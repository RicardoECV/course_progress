// Variáveis Globais
var element = document.querySelector("#element");
const BASE_SPEED = 10;
var speed_x = BASE_SPEED;
var speed_y = BASE_SPEED;

var intervalor = setInterval(move, 16);

function move() {  

  // Eixo X
  element.style.left = `${element.offsetLeft + speed_x}px`;
  if(element.offsetLeft > window.innerWidth - element.offsetWidth) {
    speed_x = -BASE_SPEED;
    element.style.filter = "invert()";
    element.style.transform= "rotate(270deg)";
  }
  else if(element.offsetLeft < 0) {
    speed_x = BASE_SPEED;
    element.style.filter = "sepia()";
    element.style.transform= "rotate(90deg)";
  }
  
  // Eixo Y
  element.style.top = `${element.offsetTop + speed_y}px`;
  if(element.offsetTop > window.innerHeight - element.offsetHeight) {
    speed_y = -BASE_SPEED;
    element.style.filter = "";
    element.style.transform= "rotate(0deg)";
  }
  else if(element.offsetTop < 0) {
    speed_y = BASE_SPEED;
    element.style.transform= "rotate(180deg)";
  }  
  
}

