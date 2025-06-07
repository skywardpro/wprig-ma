/**
 * Handles The Services Swiper Slide toggle behavior:
 * - Show/hide Slide overlay.
 */
export function init(): void {

    const button = document.querySelector('#copy-address-to-clipboard-btn');
    if (!button) {
        return;
    }

    button.addEventListener("click", () => {
        setClipboard(window.location);
        
        const msgBox = document.querySelector<HTMLElement>('#copy-address-to-clipboard-msg');
        if(msgBox) {
            msgBox.style.opacity = '1';

            setTimeout(() => {
                msgBox.style.opacity = '0';
            }, 3000);
        }
    });

    async function setClipboard(text) {
        const type = "text/plain";
        const clipboardItemData = {
            [type]: text,
        };
        const clipboardItem = new ClipboardItem(clipboardItemData);
        await navigator.clipboard.write([clipboardItem]);
    }
}