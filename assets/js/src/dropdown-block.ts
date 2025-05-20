/**
 * Handles Dropdown Block toggle behavior:
 * - Expands/collapses Dropdown Block on click.
 */
document.addEventListener("DOMContentLoaded", function () {

    const dropdownBlockEl = document.querySelector('#dropdown-block');
    const toggleBtn = dropdownBlockEl?.querySelector('.dropdown-block__toggle-btn');

    toggleBtn?.addEventListener('click', toggle);

    function toggle() {
        dropdownBlockEl?.classList.toggle('dropdown-block--expanded');
    }
});