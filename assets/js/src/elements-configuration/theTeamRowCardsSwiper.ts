export function init(): void {

  interface Person {
    "category": string,
    "name": string,
    "jobTitle": string,
    "image": string,
    "sameAs": string
  }

  let swipers = [];

  function initSwipers() {

    initRows();

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

  function createCard(person: Person): HTMLElement | null {

    // Create person card
    const cardTemplate = document.querySelector<HTMLTemplateElement>('#the-team-person-card-template');
    if (!cardTemplate) {

      console.error('no the-team-person-card-template is found');

      return null;
    }

    const cardTemplateClone = cardTemplate.content.cloneNode(true) as HTMLElement;
    const newCard = cardTemplateClone.querySelector<HTMLElement>('.the-team__card');
    if (!newCard) {

      console.error('no the-team__card is found in the-team-person-card-template');

      return null;
    }

    // Populate card with data
    const anchorEl = newCard.querySelector<HTMLElement>('.the-team__card-anchor');
    const anchorTextEl = newCard.querySelector<HTMLElement>('.the-team__card-anchor-text');
    const imageEl = newCard.querySelector<HTMLElement>('.the-team__card-image');
    const nameEl = newCard.querySelector<HTMLElement>('.the-team__card-name');
    const positionEl = newCard.querySelector<HTMLElement>('.the-team__card-position');

    anchorEl?.setAttribute('href', person.sameAs);
    if (anchorTextEl) {

      anchorTextEl.innerText = `${person.name}'s linkedIn account`;
    }
    imageEl?.setAttribute('src', person.image);
    imageEl?.setAttribute('alt', person.name);
    if (nameEl) {

      nameEl.innerText = person.name;
    }
    if (positionEl) {

      positionEl.innerText = person.jobTitle;
    }

    return newCard;
  }

  function createRow(category: string): HTMLElement | null {

    const rowTemplate = document.querySelector<HTMLTemplateElement>('#the-team-row-template');
    if (!rowTemplate) {

      console.error('no the-team-row-template is found');

      return null;
    }

    const rowTemplateClone = rowTemplate.content.cloneNode(true) as HTMLElement;
    const newRow = rowTemplateClone.querySelector<HTMLElement>('.the-team__row');
    if (!newRow) {

      console.error('no the-team__row in the-team-row-template is found');

      return null;
    }

    // Set row category class
    newRow.classList.add(`the-team__row--${category.replaceAll(' ', '-').toLowerCase()}`);
    // Set row title
    const rowTitle = newRow.querySelector('h3');
    if (rowTitle) {

      rowTitle.innerText = category;
    }

    return newRow;
  }

  function getEmployees(): Person[] {

    const scriptEl = document.querySelector<HTMLElement>("#the-team-json");
    const data = JSON.parse(scriptEl?.textContent ?? '{}');
    const employees: Person[] = data.employees ?? null;
    if (!employees) {

      console.error('the-team-json is empty');

      return new Array<Person>();
    }

    return employees;
  }

  function clearContainer(): void {
    const container = document.querySelector('.the-team__cards-container');
    if (container) {

      container.innerHTML = '';
    }
  }

  function initRows() {

    clearContainer();

    const cardsContainer = document.querySelector('.the-team__cards-container');
    if (!cardsContainer) {

      console.error('no cardsContainer');

      return;
    }

    const employees = getEmployees();
    employees.forEach(person => {

      const category = String(person.category).toLowerCase();
      const row = cardsContainer.querySelector(`.the-team__row.the-team__row--${category}`);
      const personCardEl = createCard(person);
      if (!personCardEl) {

        console.error('no card was created');

        return;
      }

      if (row) {

        const rowSwiperWrapper = row?.querySelector('.swiper-wrapper');
        rowSwiperWrapper?.appendChild(personCardEl)
      } else {


        const newRowEl = createRow(category);
        if (!newRowEl) {

          console.error('no row was created');

          return;
        }
        const rowSwiperWrapper = newRowEl.querySelector('.swiper-wrapper');
        rowSwiperWrapper?.appendChild(personCardEl);
        cardsContainer.appendChild(newRowEl);
      }
    });
  }

  function initGrid() {

    clearContainer();

    const cardsContainer = document.querySelector('.the-team__cards-container');
    if (!cardsContainer) {

      console.error('no the-team__cards-container');

      return;
    }

    getEmployees().forEach(person => {

      const card = createCard(person);
      if (card) {
        cardsContainer.appendChild(card);
      }
    });
  }

  function handleResize() {

    if (window.innerWidth >= 769 && swipers) {

      swipers.forEach(item => item.destroy(true, true));
      swipers = [];

      initGrid();
    } else if (window.innerWidth < 769 && !swipers.length) {

      clearContainer();
      initSwipers();
    }
  }

  // Add resize listener with debounce
  let resizeTimeout;
  window.addEventListener('resize', () => {

    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(handleResize, 250);
  });

  // Run
  if (window.innerWidth < 769) {

    initSwipers();
  } else {

    initGrid();
  }
}
