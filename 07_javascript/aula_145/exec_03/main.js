// Variáveis Globais
var element = document.querySelector("#element");
var element_2 = document.querySelector("#element_2");
var speed_x = 10;
var speed_y = 10;

function getNumeroAleatorio(min, max){return Math.floor( Math.random() * (max - min + 1) ) + min;}

function move() {  

  // Eixo X
  let x = getNumeroAleatorio(0, window.innerWidth - element.offsetWidth);
  
  // Eixo Y
  let y = getNumeroAleatorio(0, window.innerHeight - element.offsetHeight);

  element.style.left = `${x}px`
  element.style.top = `${y}px`
  
}


function moveR() {  

  // Eixo X
  let x = getNumeroAleatorio(0, window.innerWidth - element_2.offsetWidth);
  
  // Eixo Y
  let y = getNumeroAleatorio(0, window.innerHeight - element_2.offsetHeight);

  element_2.style.left = `${x}px`
  element_2.style.top = `${y}px`
  
}
