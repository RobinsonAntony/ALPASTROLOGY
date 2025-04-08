document.addEventListener("DOMContentLoaded", function () {
    var spinnerContainer = document.querySelector(".spinner-container");

    // Show the spinner initially
    spinnerContainer.style.display = "flex"; // Use flex or another display value that suits your layout

    // Hide the spinner when the page is fully loaded
    window.addEventListener("load", function () {
        spinnerContainer.style.display = "none";
        document.body.classList.remove("no-scroll");
    });
});

