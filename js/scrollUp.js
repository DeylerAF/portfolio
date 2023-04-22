/* ========== Scroll Up ========== */
function scrollUp() {
    const scrollUp = document.getElementById("scroll-up");
    //When the scroll higher than 560 viewpoints/height, then the scroll up icon showId appear and on clicking should reach top page.
    if (this.scrollY >= 560) {
        scrollUp.classList.add("show-scroll");
    } else {
        scrollUp.classList.remove("show-scroll");
    }
    //console.log("Scroll up being called and working");
}

window.addEventListener("scroll", scrollUp);