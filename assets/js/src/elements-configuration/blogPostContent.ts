export function init(): void {

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