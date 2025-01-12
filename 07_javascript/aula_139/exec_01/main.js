var especial = document.querySelector("#especial");
var entrada = document.querySelector("#entrada");
var intervalo = setInterval(scrollH, 5000);

function scrollV() {
  especial.scrollIntoView();
}

function scrollH() {
  entrada.scrollIntoView();
}

function tempo() {  
  setTimeout(scrollV, 1000);
}

function pararIntervalo() {
  clearInterval(intervalo);
}