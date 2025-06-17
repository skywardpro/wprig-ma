declare const gsap: any;
declare const ScrollTrigger: any;
declare const ScrollSmoother: any;

interface GSAPUtils {
	selector: (element: HTMLElement) => (selector: string) => HTMLElement[];
	pipe: (...functions: Function[]) => Function;
	mapRange: (inMin: number, inMax: number, outMin: number, outMax: number) => Function;
	clamp: (min: number, max: number) => Function;
}

interface GSAP {
	utils: GSAPUtils;
	quickSetter: (element: HTMLElement, property: string) => (value: number) => void;
	to: (target: HTMLElement, vars: any) => any;
	killTweensOf: (target: HTMLElement) => void;
}

// Ensure GSAP is loaded
const ensureGSAPLoaded = () => {
	return new Promise < void > ((resolve) => {
		const checkInterval = 100;
		const maxAttempts = 100; // 10 seconds maximum wait time
		let attempts = 0;

		const checkGSAP = setInterval(() => {
			attempts++;

			// Check if all required plugins are loaded
			const isGSAPLoaded = typeof gsap !== 'undefined';
			const isScrollTriggerLoaded = typeof ScrollTrigger !== 'undefined';
			const isScrollSmootherLoaded = typeof ScrollSmoother !== 'undefined';

			if (isGSAPLoaded && isScrollTriggerLoaded && isScrollSmootherLoaded) {
				clearInterval(checkGSAP);
				resolve();
			} else if (attempts >= maxAttempts) {
				clearInterval(checkGSAP);
				console.error('GSAP plugins failed to load after maximum attempts:', {
					gsap: isGSAPLoaded,
					scrollTrigger: isScrollTriggerLoaded,
					scrollSmoother: isScrollSmootherLoaded
				});
				resolve(); // Resolve anyway to prevent hanging
			}
		}, checkInterval);
	});
};

// Register ScrollTrigger plugin
const registerGSAPPlugins = () => {
	if (typeof gsap === 'undefined') {
		console.error('GSAP is not loaded');
		return false;
	}

	if (typeof ScrollTrigger === 'undefined') {
		console.error('ScrollTrigger plugin is not loaded');
		return false;
	}

	if (typeof ScrollSmoother === 'undefined') {
		console.error('ScrollSmoother plugin is not loaded');
		return false;
	}

	try {
		gsap.registerPlugin(ScrollTrigger, ScrollSmoother);
		if (typeof gsap.ScrollToPlugin !== 'undefined') {
			gsap.registerPlugin(gsap.ScrollToPlugin);
		}
		return true;
	} catch (error) {
		console.error('Failed to register GSAP plugins:', error);
		return false;
	}
};

function initBtns() {
	const buttons = document.querySelectorAll('[btn-anim]');
	if (buttons.length > 0) {
		buttons.forEach(btn => {
			if (btn instanceof HTMLElement) {
				// Create flair element
				const flair = document.createElement('span');
				flair.classList.add('btn__flair');

				// Create label element
				const label = document.createElement('span');
				label.classList.add('btn__label');
				label.textContent = btn.textContent;

                const otherElements = btn.querySelectorAll('svg, div, span');
                

				// Clear button content and add new elements
				btn.innerHTML = '';
                if (otherElements.length > 0) {
                    otherElements.forEach(element => {
                        btn.appendChild(element);
                    });
                } else {
                    btn.appendChild(label);
                }
				btn.appendChild(flair);

				// Initialize button animation
				new Button(btn);
			}
		});
	}
}

interface ButtonDOM {
	button: HTMLElement;
	flair: HTMLElement;
}

class Button {
	private block: HTMLElement;
	private DOM: ButtonDOM;
	private xSet: (value: number) => void;
	private ySet: (value: number) => void;

	constructor(buttonElement: HTMLElement) {
		this.block = buttonElement;
		this.init();
		this.initEvents();
	}

	init() {
		const el = gsap.utils.selector(this.block);

		this.DOM = {
			button: this.block,
			flair: el(".btn__flair")[0] as HTMLElement
		};

		this.xSet = gsap.quickSetter(this.DOM.flair, "xPercent");
		this.ySet = gsap.quickSetter(this.DOM.flair, "yPercent");
	}

	getXY(e: MouseEvent) {
		const {
			left,
			top,
			width,
			height
		} = this.DOM.button.getBoundingClientRect();

		const xTransformer = gsap.utils.pipe(
			gsap.utils.mapRange(0, width, 0, 100),
			gsap.utils.clamp(0, 100)
		);

		const yTransformer = gsap.utils.pipe(
			gsap.utils.mapRange(0, height, 0, 100),
			gsap.utils.clamp(0, 100)
		);

		return {
			x: xTransformer(e.clientX - left),
			y: yTransformer(e.clientY - top)
		};
	}

	initEvents() {
		this.DOM.button.addEventListener("mouseenter", (e: MouseEvent) => {
			const { x, y } = this.getXY(e);

			this.xSet(x);
			this.ySet(y);

			gsap.to(this.DOM.flair, {
				scale: 1,
				duration: 0.4,
				ease: "power2.out"
			});
		});

		this.DOM.button.addEventListener("mouseleave", (e: MouseEvent) => {
			const { x, y } = this.getXY(e);

			gsap.killTweensOf(this.DOM.flair);

			gsap.to(this.DOM.flair, {
				xPercent: x > 90 ? x + 20 : x < 10 ? x - 20 : x,
				yPercent: y > 90 ? y + 20 : y < 10 ? y - 20 : y,
				scale: 0,
				duration: 0.3,
				ease: "power2.out"
			});
		});

		this.DOM.button.addEventListener("mousemove", (e: MouseEvent) => {
			const { x, y } = this.getXY(e);

			gsap.to(this.DOM.flair, {
				xPercent: x,
				yPercent: y,
				duration: 0.4,
				ease: "power2"
			});
		});
	}
}

const buttonElements = document.querySelectorAll('[data-block="button"]');

buttonElements.forEach((buttonElement) => {
	if (buttonElement instanceof HTMLElement) {
		new Button(buttonElement);
	}
});

async function initAnimations() {
	await ensureGSAPLoaded();

	// Register plugins
	if (!registerGSAPPlugins()) {
		console.error('GSAP plugins failed to register');
		return;
	}

	// Kill all ScrollTrigger instances
	gsap.killTweensOf("*");
	ScrollTrigger.getAll().forEach(st => st.kill());

	ScrollTrigger.clearScrollMemory();
	window.history.scrollRestoration = "manual";

	initBtns();
}

window.addEventListener('load', initAnimations);