export function init(): void {

    function initStickyBlocks() {

        try {

            const throttleTimer = 100; // Adjust this value as needed

            let isTicking = false;
            let timeout;

            const updateStickyBlocks = () => {

                const stickyBlockContainer = document.querySelector('.blog-post-content__inner');
                const stickyBlockRight = document.querySelector('.blog-post-content__3-cards');
                const stickyBlockLeft = document.querySelector('.blog-post-content__post-navigation');
                const stickyBlockContainerTop = stickyBlockContainer.getBoundingClientRect().top;
                const siteHeader = document.querySelector('.site-header');
                const headerHeight = siteHeader.clientHeight;

        
                if (stickyBlockContainerTop <= 0) {

                    stickyBlockLeft.style.top = `${headerHeight}px`;
                    stickyBlockRight.style.top = `${headerHeight}px`;
                } else if (stickyBlockContainerTop <= headerHeight) {

                    const stickyBlockTopOffset = headerHeight - stickyBlockContainerTop;

                    stickyBlockLeft.style.top = `${stickyBlockTopOffset}px`;
                    stickyBlockRight.style.top = `${stickyBlockTopOffset}px`;
                }

                isTicking = false;
            };

            const handleScroll = () => {

                if (!isTicking) {
                    requestAnimationFrame(() => {
                        updateStickyBlocks();
                    });
                    isTicking = true;
                }
            };

            const throttledHandleScroll = () => {

                if (!timeout) {
                    timeout = window.setTimeout(() => {
                        handleScroll();
                        timeout = null;
                    }, throttleTimer);
                }
            };

            updateStickyBlocks();

            document.addEventListener("scroll", throttledHandleScroll);

        } catch (ex) {
            console.error(ex.message);
            return;
        }
    }

    function initPostNavigation() {

        try {

            const postContent = document.querySelector('.blog-post-content__content');
            const topicsList = postContent.querySelectorAll('h2, h3');
            const navigationMenuTitle = document.querySelector('.blog-post-content__post-navigation-title');
            const navigationItemsContainer = document.querySelector('.blog-post-content__post-navigation-items');

            navigationItemsContainer.innerHTML = '';

            const addToMenu = (topicEl, index) => {

                const topicId = `post-navigation-item-${index}`;
                topicEl.setAttribute('id', topicId);

                const navLink = document.createElement('a');
                navLink.setAttribute('href', `#${topicId}`);
                navLink.setAttribute('class', 'typo--body typo--regular color--purple py-3xs');
                if (index > 3) {

                    navLink.classList.add('is-hidden');
                }
                navLink.innerText = topicEl.textContent;
                navigationItemsContainer.appendChild(navLink);
            }

            const showMoreClickHandler = (e) => {

                const hiddenItems = document.querySelectorAll('.blog-post-content__post-navigation .is-hidden');

                hiddenItems.forEach(element => {
                    element.classList.remove('is-hidden');
                });

                e.target.remove();
            }

            const createShowMoreButton = () => {

                const btn = document.createElement('button');
                btn.innerText = 'All content';
                btn.setAttribute('class', 'blog-post-content__post-navigation-show-all reset-button-styles typo--body-small typo--regular color--purple w-100 has-text-left px-0 py-2xs');

                navigationItemsContainer.after(btn);

                return btn;
            }

            
            if (topicsList.length === 0) {
                navigationMenuTitle.remove();
            }
            topicsList.forEach((topicEl, index) => addToMenu(topicEl, index));

            
            if (topicsList.length > 4) {
                const showMore = createShowMoreButton();
                showMore.addEventListener('click', showMoreClickHandler);
            }


        } catch (ex) {

            console.error(ex.message)

            return;
        }
    }

    initStickyBlocks();
    initPostNavigation();
}