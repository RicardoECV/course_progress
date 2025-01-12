// Variáveis Globais
var element = document.querySelector("#element");
var speed_x = 10;
var speed_y = 10;

var intervalor = setInterval(move, 33);

function move() {  

  // Eixo X
  element.style.left = `${element.offsetLeft + speed_x}px`;
  if(element.offsetLeft > window.innerWidth - element.offsetWidth) {
    speed_x = -10;
    element.style.filter = "invert()";
    element.style.transform= "rotate(270deg)";
  }
  else if(element.offsetLeft < 0) {
    speed_x = 10;
    element.style.filter = "sepia()";
    element.style.transform= "rotate(90deg)";
  }
  
  // Eixo Y
  element.style.top = `${element.offsetTop + speed_y}px`;
  if(element.offsetTop > window.innerHeight - element.offsetHeight) {
    speed_y = -10;
    element.style.filter = "";
    element.style.transform= "rotate(0deg)";
  }
  else if(element.offsetTop < 0) {
    speed_y = 10;
    element.style.transform= "rotate(180deg)";
  }  
  
}

