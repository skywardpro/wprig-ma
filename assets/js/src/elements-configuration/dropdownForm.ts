/**
 * Handles Dropdown Block toggle behavior:
 * - Expands/collapses Dropdown Block on click.
 */
export function init(): void {

    const dropdownBlockEl = document.querySelector('#dropdown-form');
    const toggleBtn = dropdownBlockEl?.querySelector('.dropdown-form__toggle-btn');

    toggleBtn?.addEventListener('click', toggle);

    function toggle() {
        dropdownBlockEl?.classList.toggle('dropdown-form--expanded');
    }
}