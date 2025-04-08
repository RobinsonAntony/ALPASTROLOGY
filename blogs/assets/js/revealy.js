function reveal() {
    var reveal = document.querySelectorAll(".revealy");

    for (var i = 0; i < reveal.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveal[i].getBoundingClientRect().top;
        var elementVisible = 100;
        if (elementTop < windowHeight - elementVisible) {
            reveal[i].classList.add("active");
            
        }
        else {
            reveal[i].classList.remove("active")
        }
    }
}
window.addEventListener("scroll", reveal)