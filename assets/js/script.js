const toggleCheck = document.querySelector("#checkbox_toggle");

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelectorAll("a").forEach((anchor) => {
      anchor.classList.remove("active");
    });
    e.target.classList.add("active");
    document.querySelector(this.getAttribute("href")).scrollIntoView({
      behavior: "smooth",
    });
    toggleCheck.click();
  });
});
