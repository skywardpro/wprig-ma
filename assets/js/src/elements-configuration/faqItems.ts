/**
 * Handles FAQ item toggle behavior:
 * - Expands/collapses FAQ items on click.
 * - Ensures only one FAQ item is open at a time.
 */
export function init(): void {

    const items = document.querySelectorAll('.faq-item');
    items?.forEach(item => {
        item.addEventListener('click', () => toggle(item))
    });

    function toggle(item) {
        if(item.classList.contains('active')) {
            item.classList.remove('active');
        } else {
            document.querySelector('.faq-item.active')?.classList.remove('active');
            item.classList.add('active');
        }
    }
}