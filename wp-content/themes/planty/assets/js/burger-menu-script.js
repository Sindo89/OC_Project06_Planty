document.addEventListener("DOMContentLoaded", function () {
  // attend que le DOM soit chargé (tous les éléments HTML)
  let toggleburger = document.querySelector(".toggleburger"); // sélectionne l'élément avec la classe toggleburger
  let header = document.querySelector("header"); // sélectionne l'élément header

  toggleburger.addEventListener("click", function () {
    // écoute le click sur l'élément toggleburger
    toggleburger.classList.toggle("active"); // ajoute ou supprime la classe active
    header.classList.toggle("open"); // ajoute ou supprime la classe open
  });
});
