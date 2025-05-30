const navMobile = document.getElementById("header__nav-mobile");
const menuIcon = document.getElementById("header__menu-icon");
const closeMenuIcon = document.getElementById("header__close-icon");
const body = document.body;
const header = document.querySelector('.header');

/* Mobile navigation open and close functions */
menuIcon.addEventListener("click", function () {
    navMobile.classList.toggle("active");
    closeMenuIcon.classList.toggle("show");
    body.classList.toggle("no-scroll");
});

closeMenuIcon.addEventListener("click", function () {
    navMobile.classList.toggle("active");
    closeMenuIcon.classList.toggle("show");
    body.classList.toggle("no-scroll");
});

/* Header reduces in height when scrolling */
window.addEventListener('scroll', function () {
    if (window.scrollY > 0) {
        header.classList.add('scrolling');
    } else {
        header.classList.remove('scrolling');
    }
});

/* Events Slider */
document.addEventListener('DOMContentLoaded', function () {
    const sliders = document.querySelectorAll('.events__slider');
    sliders.forEach(function (slider) {
        const items = slider.querySelectorAll('.events__item');
        let current = 0;
        if (items.length === 0) return;
        items.forEach((item, i) => item.classList.toggle('active', i === 0));
        const container = slider.parentElement;

        function showItem(newIndex) {
            if (newIndex === current) return;
            // Fade out current
            items[current].style.opacity = 0;
            setTimeout(() => {
                items[current].classList.remove('active');
                items[newIndex].classList.add('active');
                // Fade in new
                setTimeout(() => {
                    items[newIndex].style.opacity = 1;
                }, 10);
                current = newIndex;
            }, 400); // match transition duration
        }

        container.querySelector('.events__arrow--left').addEventListener('click', function () {
            let newIndex = (current - 1 + items.length) % items.length;
            showItem(newIndex);
        });
        container.querySelector('.events__arrow--right').addEventListener('click', function () {
            let newIndex = (current + 1) % items.length;
            showItem(newIndex);
        });
    });
});
