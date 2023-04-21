/* ========== Menu show and hidden ========== */
const navMenu = document.getElementById("nav-menu");
const navToggle = document.getElementById("nav-toggle");
const navClose = document.getElementById("nav-close");
/* Menu show */
// Validate if the constant exists
if (navToggle) {
    navToggle.addEventListener("click", () => {
        navMenu.classList.add("show-menu");
    });
}
/* Menu hide */
// Validate if the constant exists
if (navClose) {
    navClose.addEventListener("click", () => {
        navMenu.classList.remove("show-menu");
    });
}
//console.log("Menu settings is working!");

/* ========== Remove menu profile ========== */
const navLink = document.querySelectorAll(".nav__link");

function linkAction() {
    const navMenu = document.getElementById("nav-menu");
    //When we click on nav__links, we remove the show menu
    navMenu.classList.remove("show-menu");
}

navLink.forEach((n) => n.addEventListener("click", linkAction));
//console.log("Remove menu profile is working!");