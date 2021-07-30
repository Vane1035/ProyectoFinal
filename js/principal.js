let animarscroll = document.querySelectorAll(".animarscroll");

function mostrarScroll() {
  let scrollTop = document.documentElement.scrollTop;
  for (var i = 0; i < animarscroll.length; i++) {
    let alturaAnimar = animarscroll[i].offsetTop;
    if (alturaAnimar - 450 < scrollTop) {
      animarscroll[i].style.opacity = 1;
      animarscroll[i].classList.add("mostrarIzquierda");
    }
  }
}
window.addEventListener("scroll", mostrarScroll);
///////*******************************************************
/*
let animarscroll = document.querySelectorAll(".animarscroll2");

function mostrarScroll() {
  let scrollTop = document.documentElement.scrollTop;
  for (var i = 0; i < animarscroll.length; i++) {
    let alturaAnimar = animarscroll[i].offsetTop;
    if (alturaAnimar - 30 < scrollTop) {
      animarscroll[i].style.opacity = 1;
      animarscroll[i].classList.add("mostrarIzquierda");
    }
  }
}
window.addEventListener("scroll", mostrarScroll);*/
