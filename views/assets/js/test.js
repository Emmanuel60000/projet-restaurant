// js pour menu hamburger de la page d'acceuil
const buttonToggler = document.querySelector(".button")
const navlinksContainer = document.querySelector(".navlinks-container");

const toggleNav = e => {
    buttonToggler.classList.toggle("open")
    navlinksContainer.classList.toggle("open")
}

buttonToggler.addEventListener("click", toggleNav)

// document.getElementById('menu-btn').addEventListener('click', function() {
//   document.querySelector('.navlinks-container').classList.toggle('open');
//   document.querySelector('.button').classList.toggle('open');
// });

// js pour la gallerie d'image
const thumbnails = document.querySelectorAll('.thumbnails img');
const preview = document.querySelector('.preview img');

thumbnails.forEach((thumbnail) => {
  thumbnail.addEventListener('click', () => {
    const full = thumbnail.dataset.full;
    preview.src = full;
    preview.alt = thumbnail.alt;
  });
});

// js pour la page evenement

function rotate() {
  var lastChild = $('.slider div:last-child').clone();
  /*$('#test').html(lastChild)*/
  $('.slider div').removeClass('firstSlide')
  $('.slider div:last-child').remove();
  $('.slider').prepend(lastChild)
  $(lastChild).addClass('firstSlide')
}
// La première ligne de la fonction sélectionne le dernier enfant de l'élément parent ".slider" en utilisant la méthode jQuery "$". La méthode ".clone()" est ensuite appelée pour créer une copie de cet élément.

// La deuxième ligne, actuellement en commentaire, insère le contenu de la variable "lastChild" dans un élément HTML avec l'id "test".

// La troisième ligne supprime la classe "firstSlide" de tous les éléments enfants de l'élément parent ".slider".

// La quatrième ligne supprime l'enfant en dernier dans l'élément parent ".slider".

// La cinquième ligne insère l'élément "lastChild" en tant que premier enfant de l'élément parent ".slider".

// La dernière ligne ajoute la classe "firstSlide" à l'élément "lastChild".

// En résumé, cette fonction permet de faire une rotation infinie de la liste d'éléments HTML contenue dans l'élément parent ".slider", où le dernier élément devient le premier élément de la liste après la rotation. La classe "firstSlide" est ajoutée à l'élément en première position dans la liste après chaque rotation.


window.setInterval(function(){
  rotate()
}, 5000);

// JS POUR LE BOUTON QUI PERMET DE REMONTER EN HAUT DE LA PAGE

var boutonHaut = document.getElementById("bouton-haut");

window.addEventListener("scroll", function() {
if (window.scrollY > window.innerHeight) {
boutonHaut.style.display = "block";
} else {
boutonHaut.style.display = "none";
}
});

boutonHaut.addEventListener("click", function() {
window.scrollTo({
top: 0,
behavior: "smooth"
});
});




// timeline sur les titres de la page d'accueil
var tl = gsap.timeline();

// Ajouter l'animation pour le titre h1
tl.fromTo("#title1", { x: "100%" }, { x: "0%", duration: 2 });

// Ajouter l'animation pour le titre h2
tl.fromTo("#title2", { x: "100%" }, { x: "0%", duration: 2 }, "-=0.5");





// js pour l'animation du texte et des boutons de la page d'accueil

// sélectionne les éléments à observer
const progressiveTextElements = document.querySelectorAll('.progressive-text');


// configure l'observateur
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add('active');
    }
  });
});

// ajoute chaque élément à observer à l'observateur
progressiveTextElements.forEach((element) => {
  observer.observe(element);
});


// JS POUR LE DEUXIEME SLIDER

const slide = ["https://images.pexels.com/photos/2544826/pexels-photo-2544826.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
, "https://images.pexels.com/photos/5911135/pexels-photo-5911135.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
, "https://images.pexels.com/photos/2356059/pexels-photo-2356059.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"];
let numero = 0;

function ChangeSlide(sens) {
    numero = numero + sens;
    if (numero < 0)
        numero = slide.length - 1;
    if (numero > slide.length - 1)
        numero = 0;
    document.getElementById("slide").src = slide[numero];
}
setInterval("ChangeSlide(1)", 5000);



