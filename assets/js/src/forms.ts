/**
* File forms.ts
*
* Contains functions, inits, and configurations for all sort of forms.
*/

const GOOGLE_RECAPTCHA_SITE_KEY = '6Le5|z8rAAAAANskUpW¡96V-jGt3hLXhqNqo4BK6';
const GOOGLE_RECAPTCHA_SECRET_KEY = '6Le51z8rAAAAAB488EE9WqaB7vPV9udodM58xw1';
const RECAPTCHA_VERIFICATION_ENDPOINT = ''; // Must be set if reCaptchaVerified = false
const FORMCARRY_ENDPOINT_CONTACT_US_FORM = 'https://formcarry.com/s/A8Ci7mCBKH1';
const FORMCARRY_ENDPOINT_DROPDOWN_BLOCK_FORM = FORMCARRY_ENDPOINT_CONTACT_US_FORM;

let reCaptchaVerified = true; // Track the verification status // Change to debug

type Errors = Record<string, string[]> | undefined;
type Constraints = Record<string, any>;
type SubmitButton = HTMLButtonElement | (HTMLInputElement & { type: 'submit' }) | HTMLSelectElement;
type FormattedFormData = Record<string, any>;

// Assume that validate is a globally available function (e.g. from validate.js)
declare function validate(
	values: Record<string, unknown>,
	constraints: Record<string, unknown>
): Record<string, string[]> | undefined;

// Function to load reCAPTCHA script
function loadReCaptcha(callback?: () => void) {
	if (window.grecaptcha && grecaptcha.ready) {
		if (typeof callback === 'function') {
			grecaptcha.ready(callback);
		} else {
			grecaptcha.ready(() => {
				console.log('reCAPTCHA ready without callback');
			});
		}
		return;
	}

	var script = document.createElement('script');
	script.type = 'text/javascript';
	script.onload = function () {
		if (typeof callback === 'function') {
			grecaptcha.ready(callback);
		} else {
			grecaptcha.ready(() => {
				console.log('reCAPTCHA ready without callback');
			});
		}
	};
	script.src = `https://www.google.com/recaptcha/api.js?render=${GOOGLE_RECAPTCHA_SITE_KEY}`;
	document.head.appendChild(script);
}

// Function to handle user interaction
function handleUserInteraction(form) {
	// If reCAPTCHA is already verified, enable the submit button
	if (reCaptchaVerified) {
		console.log("reCAPTCHA already verified, enabling submit button.");
		const submitButton = form.querySelector('button[type="submit"]');
		if (submitButton) {
			submitButton.removeAttribute('disabled');
		}
	} else { // Execute reCAPTCHA		
		grecaptcha.execute(GOOGLE_RECAPTCHA_SITE_KEY, {
			action: 'submit'
		}).then(function (token) {
			console.log("reCAPTCHA token received:", token);
			verificationToken = token; // Store the token for reuse

			// Verify reCAPTCHA with your server
			verifyRecaptcha(token, form);
		});
	}
}

// Function to verify reCAPTCHA with your server
function verifyRecaptcha(token, form) {
	console.log("Sending reCAPTCHA token to the verification server...");

	fetch(RECAPTCHA_VERIFICATION_ENDPOINT, {
		method: "POST",
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		body: `g-recaptcha-response=${token}`
	})
		.then(response => {
			if (!response.ok) {
				throw new Error('Network response was not ok: ' + response.statusText);
			}
			return response.json();
		})
		.then(data => {
			console.log("Verification result from server:", data);
			if (data.success) {
				console.log("reCAPTCHA verification successful.");
				reCaptchaVerified = true; // Mark as verified
				// Enable the submit button
				const submitButton = form.querySelector('button[type="submit"]');
				if (submitButton) {
					submitButton.removeAttribute('disabled');
				}
			} else {
				console.log("reCAPTCHA verification failed.");
			}
		})
		.catch(error => {
			console.error("Error verifying reCAPTCHA on the server:", error);
		});
}

// Function to set up form interaction listeners
function setupInteractionListeners() {
	const forms = document.querySelectorAll("form");

	forms.forEach(form => {
		form.addEventListener("click", function () {
			console.log("User interaction detected. Loading reCAPTCHA...");
			loadReCaptcha(() => handleUserInteraction(form));
		});
	});

	// Fallback to load reCAPTCHA after 5 seconds if no interaction
	setTimeout(() => {
		if (!reCaptchaVerified) {
			loadReCaptcha(); // Now properly handles undefined callback
		}
	}, 5000);
}

// Function to update validation classes on submit
function updateValidationWarnings(errors: Errors, form: HTMLFormElement): void {
	

	// Remove 'not-valid' class from all inputs
	form.querySelectorAll('input').forEach((input) => {
		input.classList.remove('not-valid');
	});

	// Remove error messages
	form.querySelectorAll('.error-message').forEach((el) => {
		el.remove();
	});


	// Add 'not-valid' class to inputs with errors
	let errorCounter = 0;
	if (errors) {
		Object.keys(errors).forEach((key) => {			
			errorCounter++;
			const field = form.querySelector<HTMLInputElement>(`[name="${key}"]`);
			if (field) {
				field.classList.add('not-valid');
				// display error message under the input
				const errorMsg = document.createElement('span');
				errorMsg.classList.add('error-message', 'color--red')
				errorMsg.innerText = errors[key][0];
				field.after(errorMsg);				
			}
		});
		if (errorCounter > 1) {
			showNotification(form, 'Fill all required fields.', 'fail');
		} else {
			showNotification(form, 'Fill the required field.', 'fail');
		}
	}
}

// Function to update validation on input change
function updateValidationInputClass(errors: Errors, input: HTMLInputElement): void {
	// Add 'not-valid' class to inputs with errors
	if (errors) {
		input.classList.add('not-valid');
	} else {
		// Remove 'not-valid' class from input
		input.classList.remove('not-valid');
	}
}

// Validate a field on change
function validateField(event: Event, constraints: Constraints): void {
	const target = event.target as HTMLInputElement;
	const fieldName = target.name;
	const value: Record<string, unknown> = {};
	value[fieldName] = target.value;

	const fieldConstraints: Constraints = {};
	fieldConstraints[fieldName] = constraints[fieldName];

	const errors = validate(value, fieldConstraints);
	updateValidationInputClass(errors, target);

	// Log validation errors for debugging
	if (errors) {
		console.error('Validation errors for', fieldName, ':', errors);
	}
}

// Function to correct email domain typos
function correctEmailDomain(email: string): string {
	// Define a map of typos and their corrections
	const domainCorrections: Record<string, string> = {
		// Common typos for .com
		".con": ".com",
		".cob": ".com",
		".co,": ".com",
		".cok": ".com",
		".coj": ".com",
		".vom": ".com",
		".xom": ".com",
		".cpm": ".com",
		".cim": ".com",

		// Common typos for .net
		".ner": ".net",
		".nrt": ".net",
		".neq": ".net",
		".met": ".net",
		".nte": ".net",
		".bet": ".net",

		// Common typos for .org
		".irg": ".org",
		".prg": ".org",
		".ogr": ".org",
		".ofg": ".org",
		".og": ".org",
		".0rg": ".org",

		// Common typos for .edu
		".edj": ".edu",
		".edk": ".edu",
		".edl": ".edu",
		".rdu": ".edu",
		".esu": ".edu",

		// Common typos for .gov
		".gob": ".gov",
		".gof": ".gov",
		".g0v": ".gov",
		".hov": ".gov",
		".govb": ".gov",

		// Common typos for .co (e.g., .co domains like example.co)
		".cp": ".co",
		".cp,": ".co",
		".coo": ".co",
		".ci": ".co",
		".xo": ".co",

		// Common typos for .io (e.g., example.io)
		".lo": ".io",
		".i0": ".io",
		".po": ".io",
		".ik": ".io",
		".jo": ".io",

		// Common typos for .biz
		".buz": ".biz",
		".viz": ".biz",
		".bix": ".biz",
		".biv": ".biz",

		// Common typos for .info
		".imfo": ".info",
		".inro": ".info",
		".ibfo": ".info",
		".infp": ".info",
		".9nfo": ".info",
	};

	// Extract the domain part of the email
	const atIndex = email.lastIndexOf('@');
	if (atIndex === -1) return email; // Invalid email format, return as is

	const localPart = email.substring(0, atIndex);
	const domainPart = email.substring(atIndex);

	// Check and correct the domain part
	for (const [typo, correction] of Object.entries(domainCorrections)) {
		if (domainPart.endsWith(typo)) {
			return localPart + domainPart.slice(0, -typo.length) + correction;
		}
	}

	return email; // Return the email unmodified if no typos are found
}

// Submit forms
function submitFormViaFormCarry(form: HTMLFormElement): void {
	console.log('Start submitFormViaFormCarry')
	// Disable submit button to prevent multiple submissions
	const submitButton = form.querySelector<SubmitButton>('button[type="submit"], input[type="submit"]');
	if (submitButton) {
		submitButton.disabled = true;
	}

	if (getFormActionHref(form)) {
		console.log("Form action is defined for this form.", getFormActionHref(form));
	} else {
		console.error("Form action is not defined for this form.");
		return;
	}

	const formattedFormData = getFormattedFormData(form);

	// Save data to local storage (for debugging or persistence)
	localStorage.setItem('formData', JSON.stringify(formattedFormData));

	sendFormData(form, formattedFormData, submitButton);
}

async function sendFormData(form: HTMLFormElement, data: FormattedFormData, submitButton: SubmitButton | null) {

	try {
		const response = await fetch(getFormActionHref(form), {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
				'Accept': 'application/json'
			},
			body: JSON.stringify(data)
		});

		if (!response.ok) {
			if (response.status === 429) {
				showNotification(form, "Too many requests. Try again in 5 minutes.", "fail");
			} else {
				const errorResponse = await response.json();
				if (errorResponse.code === 422) {
					showNotification(form, "Error processing your request. Try again.", "fail");
				} else {
					showNotification(form, "Error processing your request. Invalid data. Try again.", "fail");
				}
			}
		} else {
			const responseData = await response.json();
			if (responseData.status === "success") {
				showNotification(form, "Your request is successfully received!", "success");
				form.reset();

				// Save form data to local storage
				localStorage.setItem('formData', JSON.stringify(data));
			}
		}
	} catch (error) {
		showNotification(form, "Error processing your request. Try again.", "fail");
	} finally {
		if (submitButton) {
			submitButton.disabled = false; // Re-enable the submit button
		}
	}
}

/**
 * Converts FormData into a structured object, handling special cases:
 * - Checkboxes: Values are grouped into arrays
 * - Select elements: Captures displayed text (not just values)
 * - Email fields: Applies domain correction
 * @param formData Raw form data from HTMLFormElement
 * @param form The source HTML form (for DOM element lookup)
 * @returns Structured object with field names as keys
 */
function getFormattedFormData(form: HTMLFormElement): FormattedFormData {

	const formData = new FormData(form);
	const formattedData: FormattedFormData = {};

	formData.forEach((inputValue, inputName) => {
		const inputEl = form.querySelector(`[name="${inputName}"]`) as HTMLInputElement | HTMLSelectElement | null;

		// Handle multiple checkboxes
		if (inputEl && inputEl instanceof HTMLInputElement && inputEl.type === "checkbox") {
			if (!formattedData[inputName]) {
				formattedData[inputName] = [];
			}
			if (inputEl.checked) {
				formattedData[inputName].push(inputValue);
			}
		}
		// Handle select elements
		else if (inputEl && inputEl.tagName === "SELECT") {
			const selectElement = inputEl as HTMLSelectElement;
			formattedData[inputName] = selectElement.options[selectElement.selectedIndex].text;
		}
		// Handle other form fields
		else {
			// Correct the email domain if the field is "email"
			if (inputName === "email" && typeof inputValue === "string") {
				inputValue = correctEmailDomain(inputValue);
			}
			formattedData[inputName] = inputValue;
		}
	});

	return formattedData;
}

// Attach input event listeners to all input fields
function attachFormValidation(): void {

	document.querySelectorAll<HTMLFormElement>('form').forEach((form) => {
		console.log('Start attachFormValidation for', form)
		let constraints: Constraints | undefined;

		if (
			form.getAttribute('id') === 'contact-us-form'
			|| form.getAttribute('id') === 'dropdown-block-form'

		) {
			constraints = {
				name: {
					presence: {
						allowEmpty: false,
					},
					length: {
						minimum: 2,
						maximum: 30,
					},
				},
				phone: {
					presence: {
						allowEmpty: false,
					},
					format: {
						pattern: '\\+?\\d{1,4}?[\\-\\s]?\\(?(\\d{1,3})?\\)?[\\-\\s]?\\d{1,4}[\\-\\s]?\\d{1,4}[\\-\\s]?\\d{1,9}',
						message: 'is not a valid phone number',
					},
				},
				email: {
					presence: {
						allowEmpty: false,
					},
					email: true,
					length: {
						minimum: 2,
						maximum: 50,
					},
				},
				message: {
					presence: {
						allowEmpty: false,
					},
					length: {
						minimum: 10,
						maximum: 240,
					},
				}
			};
		}

		if (constraints === undefined) {
			constraints = {
				email: {
					presence: {
						allowEmpty: false,
					},
					email: true,
					length: {
						minimum: 2,
						maximum: 50,
					},
				},
			};
		}

		// Capture the current constraints in a constant (for closure clarity)
		const currentConstraints: Constraints = constraints;
		console.log('Get attachFormValidation for', form, 'with', currentConstraints)

		// Listener to validate on input change
		form.querySelectorAll<HTMLInputElement>('input').forEach((input) => {
			input.addEventListener('change', (event) => validateField(event, constraints as Constraints));
		});

		form.querySelectorAll<HTMLTextAreaElement>('textarea').forEach((textarea) => {
			textarea.addEventListener('change', (event) => validateField(event, constraints as Constraints));
		});

		function restrictToLetters(event: Event): void {
			const target = event.target as HTMLInputElement;
			const regex = /^[\p{L}\s\-,.—']*$/u;

			// Restrict input based on regex
			if (!regex.test(target.value)) {
				target.value = target.value.replace(/[^\p{L}\s\-,.—']/gu, '');
			}

			// Restrict input to max 30 characters
			if (target.value.length > 30) {
				target.value = target.value.slice(0, 30);
			}
		}

		// Add listeners for name inputs
		const nameInputs = document.querySelectorAll<HTMLInputElement>('input[name="name"]');

		nameInputs.forEach(input => {
			input.addEventListener('input', restrictToLetters);
		});


		function restrictLargeEmail(event: Event): void {
			const target = event.target as HTMLInputElement;
			if (target.value.length > 50) {
				target.value = target.value.slice(0, 50);
			}
		}

		const emailInputs = document.querySelectorAll<HTMLInputElement>('input[type="email"]');
		emailInputs.forEach(input => {
			input.addEventListener('input', restrictLargeEmail);
		});

		console.log('Ready for submit form', form)

		// Handle form submission
		form.addEventListener('submit', function (event: Event): void {
			console.log('Trying to submit with', form);
			event.preventDefault();

			const values: Record<string, any> = {};

			form.querySelectorAll<HTMLInputElement | HTMLTextAreaElement>('input, textarea').forEach((input) => {

				if (
					!(input instanceof HTMLTextAreaElement)
					&& (input.type === 'radio' || input.type === 'checkbox')
				) {
					if (input.checked) {
						if (!values[input.name]) {
							values[input.name] = [];
						}
						values[input.name].push(input.value);
					}
				} else {
					values[input.name] = input.value;
				}
			});

			// Convert single checkboxes and radios to single value instead of array
			for (const key in values) {
				if (Array.isArray(values[key]) && values[key].length === 1) {
					values[key] = values[key][0];
				}
			}

			// Validate the form
			const errors = validate(values, currentConstraints);
			
			// Update validation warning messages and hilights
			updateValidationWarnings(errors, form);

			if (errors) {
				console.error('Fill all required fields.', errors);
				// Optionally display errors to the user
			} else {
				console.log('Form is valid. Submitting');
				submitFormViaFormCarry(form);
			}
		});
	});
}

/*
 * Custom notification for forms
 */
function showNotification(form: HTMLFormElement, message: string, type: 'fail' | 'success'): void {
	const el = document.createElement('div');
	el.classList.add('form-notification', 'color--white', 'typo--body-big', 'color--deep-purple', 'typo--medium', 'p-s', 'mt-m');
	el.textContent = message;
	if (type === 'fail') {
		el.classList.add('form-notification--failed');
	} else {
		el.classList.add('form-notification--success');
	}
	form.appendChild(el);
	setTimeout(() => {
		el.remove();
	}, 5500);
}

// Function to set the form action based on the form's ID
function getFormActionHref(form: HTMLFormElement): string {
	const formActions: Record<string, string> = {
		'contact-us-form': FORMCARRY_ENDPOINT_CONTACT_US_FORM,
		'dropdown-block-form': FORMCARRY_ENDPOINT_DROPDOWN_BLOCK_FORM
	};

	const formId = form.getAttribute('id') ?? '';
	if (formActions[formId]) {
		console.log(`Form action set for ${formId}: ${formActions[formId]}`);
		return formActions[formId];
	}
	return '';
}

// Initialize the interaction listeners
setupInteractionListeners(); // Change to debug

// Attach form validation
document.addEventListener("DOMContentLoaded", attachFormValidation);
