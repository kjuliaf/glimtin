const navMobile = document.getElementById("header__nav-mobile");
const menuIcon = document.getElementById("header__menu-icon");
const closeMenuIcon = document.getElementById("header__close-icon");
const body = document.body;

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
