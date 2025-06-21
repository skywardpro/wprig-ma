export function init(): void {

  let swipers = [];

  function initSwipers() {
    if (window.innerWidth < 1024) {
      swipers = new Swiper('.the-team__row-cards', {
        freeMode: {
          enabled: true,
          momentum: true,
        },
        followFinger: true,
        slidesPerView: 'auto',
        spaceBetween: 16,
        speed: 1500,
        loop: false,
        allowTouchMove: true
      });
    }
  }

  function initRows() {
    const cardsContainer = document.querySelector('.the-team__cards-container');
    if (!cardsContainer) {
      return;
    }

    const allCards = document.querySelectorAll<HTMLElement>('.the-team__cards-container .the-team__card');
    if (!allCards.length) {
      return;
    }

    allCards.forEach(card => {
      const cat = card.dataset.category?.toLowerCase();
      const row = cardsContainer.querySelector(`.the-team__row.the-team__row--${cat}`);

      if (row) {

        const rowSwiperWrapper = row.querySelector('.swiper-wrapper');
        rowSwiperWrapper?.appendChild(card);

      } else {

        const rowTemplate = document.querySelector<HTMLTemplateElement>('#the-team-row-template');
        if (!rowTemplate) {
          return;
        }

        const clone: any = rowTemplate.content.cloneNode(true);
        const newRow = clone.querySelector('.the-team__row');
        if (!newRow) {
          return;
        }

        newRow.classList.add(`the-team__row--${cat}`);
        const rowTitle = newRow.querySelector('h3');
        if (rowTitle) {
          rowTitle.innerText = card.dataset.category;
        }

        const rowSwiperWrapper = newRow.querySelector('.swiper-wrapper');
        rowSwiperWrapper?.appendChild(card);

        cardsContainer.appendChild(newRow);
      }
    });
  }

  function handleResize() {
    if (window.innerWidth >= 769 && swipers) {
      swipers.forEach(item => item.destroy(true, true));
      swipers = [];

      const allCards = document.querySelectorAll('.the-team__cards-container .the-team__card');
      const cardsContainer = document.querySelector('.the-team__cards-container');
      if (cardsContainer) {
        cardsContainer.innerHTML = '';
        allCards.forEach(card => {
          cardsContainer.appendChild(card);
        });
      }
    } else if (window.innerWidth < 769 && !swipers.length) {

      initRows()
      initSwipers();
    }
  }

  // Initialize
  if (window.innerWidth < 769) {
    initSwipers();
  } else {
    
    const allCards = document.querySelectorAll('.the-team__cards-container .the-team__card');
    const cardsContainer = document.querySelector('.the-team__cards-container');
    if (cardsContainer) {
      cardsContainer.innerHTML = '';
      allCards.forEach(card => {
        cardsContainer.appendChild(card);
      });
    }
  }

  // Add resize listener with debounce
  let resizeTimeout;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(handleResize, 250);
  });
}
