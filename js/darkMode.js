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
//console.log("Theme settings is working!");
