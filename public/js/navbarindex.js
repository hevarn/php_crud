const navbar = document.getElementById("header-toggle");
nav = document.getElementById("nav-bar"),

navbar.addEventListener("click", function (event) {
    nav.classList.toggle("show");
});
