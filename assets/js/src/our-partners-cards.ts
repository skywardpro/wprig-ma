/**
 * Handles "Show More" functionality for partner cards on mobile.
 * - Hides some cards initially (with `.is-hidden-mobile` class).
 * - Reveals them when the "Show More" button is clicked.
 * - Removes the button after all cards are shown.
 */
document.addEventListener("DOMContentLoaded", function () {

    const cardsContainer = document.querySelector('.our-partners-cards');
    if(!cardsContainer) {
        return;
    }
    
    const showMoreBtn = cardsContainer.querySelector('.our-partners-cards__show-more');
    showMoreBtn?.addEventListener('click', showMoreCards);
    
    function showMoreCards() {
        const hiddenCards = cardsContainer?.querySelectorAll('.our-partners-cards__item.is-hidden-mobile');
        hiddenCards?.forEach(card => card.classList.remove('is-hidden-mobile'));
        showMoreBtn?.remove();
    }
});