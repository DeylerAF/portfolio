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
//console.log("Typewriter effect is working!");

new Typewriter("#typewriter", {
    strings: ["I'm Deyler Alvarez Fernández"],
    autoStart: true,
    loop: true,
    cursor: "|",
    pauseFor: 1250,
    delay: 75,
});
//console.log("Typewriter effect is working!");