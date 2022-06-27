window.addEventListener("load", function () {
  let button = document.getElementById("hamburger");
  let menu = document.getElementById("menu");
  button.addEventListener("click", function () {
    menu.classList.toggle("verborgen");
  });
});
