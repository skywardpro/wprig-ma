/**
 * File forms.ts
 *
 * Contains function, inits, and configurations for all sort of forms.
 */

const forms = document.querySelectorAll('form');
forms.forEach(form => addListeners(form));

function addListeners(form) {
	form.addEventListener('submit', formSubmitHandler);
}

async function formSubmitHandler(event) {
	event.preventDefault();

	const submitButton = this.querySelector('button[type="submit"], input[type="submit"]');
	if (submitButton) {
		submitButton.disabled = true;
	}

	let formData = new FormData(this);
	let data = { name: '', email: '', tel: '', message: '' };
	formData.forEach((value, key) => data[key] = value);
	const formacarryEndpoint = 'https://formcarry.com/s/A8Ci7mCBKH1';

	try {
		const response = await fetch(formacarryEndpoint, {
			method: 'POST',
			headers: {
				'Content-Type': 'application/json',
				'Accept': 'application/json'
			},
			body: JSON.stringify(data)
		});

		if (!response.ok) {
			throw new Error(`HTTP error! status: ${response.status}`);
		}

		const responseData = await response.json();

		if (response.status !== 429 && responseData.status === "success") {
			showNotification("Your request is successfully received!", "success");
			this.reset();

			localStorage.setItem('formData', JSON.stringify(data));
		} else if (responseData.code === 422) {
			showNotification("Error processing your request. Try again.", "fail");
		} else {
			showNotification("Error processing your request. Try again.", "fail");
		}
	} catch (error) {
		showNotification("Error processing your request. Try again.", "fail");
	} finally {
		if (submitButton) {
			submitButton.disabled = false; // Re-enable the submit button
		}
	}
}

function showNotification(msg, status) {
	console.log(`${status}: ${msg}`);
}