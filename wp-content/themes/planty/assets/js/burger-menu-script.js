document.addEventListener("DOMContentLoaded", function () {
  let toggleburger = document.querySelector(".toggleburger");
  let header = document.querySelector("header");

  toggleburger.addEventListener("click", function () {
    toggleburger.classList.toggle("active");
    header.classList.toggle("open");
    jQuery(".menu ul").slideToggle(500);
  });
});
