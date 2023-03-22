// js pour menu hamburger de la page d'acceuil
const buttonToggler = document.querySelector(".button")
const navlinksContainer = document.querySelector(".navlinks-container");

const toggleNav = e => {
    buttonToggler.classList.toggle("open")
    navlinksContainer.classList.toggle("open")
}

buttonToggler.addEventListener("click", toggleNav)




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

window.setInterval(function(){
  rotate()
}, 5000);