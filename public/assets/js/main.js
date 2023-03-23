// Import our custom CSS
import "../scss/styles.scss";

document.addEventListener("DOMContentLoaded", function () {
    const year = document.getElementById("year");

    const currentYear = new Date().getFullYear();

    year.textContent = currentYear;
});
