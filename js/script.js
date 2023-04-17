/* ========== Dark Theme ========== */
const themeButton = document.getElementById("theme-button");
const darkTheme = "dark-theme";
const iconTheme = "fa-sun";

//Previously selected topic (checking for local storage)
const selectedTheme = localStorage.getItem("selected-theme");
const selectedIcon = localStorage.getItem("selected-icon");

//We  obtain the current theme that the interface has by validating the dark theme class
const getCurrentTheme = () =>
  document.body.classList.contains(darkTheme) ? "dark" : "light";
const getCurrentIcon = () =>
  document.body.classList.contains(darkTheme) ? "fa-moon" : "fa-sun";

//We need to validate if the user has previously chosen a topic
if (selectedTheme) {
  document.body.classList[selectedTheme === "dark" ? "add" : "remove"](
    darkTheme
  );
  themeButton.classList[selectedIcon === "fa-moon" ? "add" : "remove"](
    iconTheme
  );
}

//Activate or deactivate the theme manually with the button
themeButton.addEventListener("click", () => {
  //Add or Remove the dark/light icon theme
  document.body.classList.toggle(darkTheme);
  themeButton.classList.toggle(iconTheme);
  //We save the selected theme and the selected icon that the user has chosen
  localStorage.setItem("selected-theme", getCurrentTheme());
  localStorage.setItem("selected-icon", getCurrentIcon());
});
console.log("Theme settings is working!");

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
console.log("Menu settings is working!");

/* ========== Remove menu profile ========== */
const navLink = document.querySelectorAll(".nav__link");

function linkAction() {
  const navMenu = document.getElementById("nav-menu");
  //When we click on nav__links, we remove the show menu
  navMenu.classList.remove("show-menu");
}

navLink.forEach((n) => n.addEventListener("click", linkAction));
console.log("Remove menu profile is working!");

/* ========== Typewriter effect ========== */
// https://www.npmjs.com/package/typewriter-effect
new Typewriter("#typewriter-title", {
  strings: ["Hello World!!"],
  autoStart: true,
  loop: true,
  cursor: "|",
  pauseFor: 2500,
  delay: "natural",
  wrapperClassName: "Typewriter__wrapper__title",
  cursorClassName: "Typewriter__cursor__title",
});
console.log("Typewriter effect is working!");

new Typewriter("#typewriter", {
  strings: ["I'm Deyler Alvarez Fernández"],
  autoStart: true,
  loop: true,
  cursor: "|",
  pauseFor: 1250,
  delay: 75,
});
console.log("Typewriter effect is working!");

/* ========== Swiper effect ========== */
var swiper = new Swiper(".blog-slider", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  mousewheel: {
    invert: false,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".blog-slider__pagination",
    clickable: true,
  },
  /* mousewheel: true, */
  keyboard: true,
});
console.log("Portfolio swiper is working!");

/* ========== Scroll Up ========== */
function scrollUp() {
  const scrollUp = document.getElementById("scroll-up");
  //When the scroll higher than 560 viewpoints/height, then the scroll up icon showId appear and on clicking should reach top page.
  if (this.scrollY >= 560) {
    scrollUp.classList.add("show-scroll");
  } else {
    scrollUp.classList.remove("show-scroll");
  }
  console.log("Scroll up being called and working");
}

window.addEventListener("scroll", scrollUp);

/* ========== Scroll Section active highlight ========== */

const sections = document.querySelectorAll("section[id]");

function scrollActive() {
  const scrollY = window.pageYOffset;

  sections.forEach((current) => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.add("active-link");
    } else {
      document
        .querySelector(".nav__menu a[href*=" + sectionId + "]")
        .classList.remove("active-link");
    }
  });

  console.log("Section highlight is working!");
}
window.addEventListener("scroll", scrollActive);
