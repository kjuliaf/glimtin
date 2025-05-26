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