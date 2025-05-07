document.addEventListener("DOMContentLoaded", function () {

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
});