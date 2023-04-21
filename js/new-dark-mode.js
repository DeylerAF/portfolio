const toggleBtn = document.getElementById("toggle-btn");
const theme = document.querySelector("body");
let darkMode = localStorage.getItem("dark-mode");


const enableDarkMode = ( ) => {
    theme.classList.add("dark-mode-theme");
    toggleBtn.classList.remove("dark-mode-toggle");
    localStorage.setItem("dark-mode", "enabled");
};

const disableDarkMode = () => {
    theme.classList.remove("dark-mode-theme");
    toggleBtn.classList.add("dark-mode-toggle");
    localStorage.setItem("dark-mode", "disabled");
};


/* 
    *The code retrieves necessary elements and the current dark mode state from localStorage. There are two functions: enableDarkMode() and disableDarkMode(). Enabling dark mode adds the "dark-mode-theme" class and removes "dark- mode-toggle", and sets the localStorage value to "enabled". Disabling dark mode does the opposite.
 */

if (darkMode === "enabled") {
    enableDarkMode(); //set state of darkMode on page load
}

toggleBtn.addEventListener("click", (e) => {
    //update darkMode when button is clicked
    darkMode = localStorage.getItem("dark-mode");
    if (darkMode === "disabled") {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
});