// Variáveis Globais
var element = document.querySelector("#element");
const BASE_SPEED = 10;
var speed_x = BASE_SPEED;
var speed_y = BASE_SPEED;

var move_up = false;
var move_down = false;
var move_left = false;
var move_right = false;

document.addEventListener("keydown", keydown);
document.addEventListener("keyup", keyup);

var intervalo = setInterval(move, 16);

function keydown(event) {
  console.log(event.key);

  // Eixo X
  if(event.key == "ArrowRight" || event.key == "d") {move_right = true;}
  else if(event.key == "ArrowLeft" || event.key == "a") {move_left = true;}

  // Eixo Y
  if(event.key == "ArrowUp" || event.key == "w") {move_up = true;}
  else if(event.key == "ArrowDown" || event.key == "s") {move_down = true;}
}

function keyup(event) {
  console.log(event.key);

  // Eixo X
  if(event.key == "ArrowRight" || event.key == "d") {move_right = false;}
  else if(event.key == "ArrowLeft" || event.key == "a") {move_left = false;}

  // Eixo Y
  if(event.key == "ArrowUp" || event.key == "w") {move_up = false;}
  else if(event.key == "ArrowDown" || event.key == "s") {move_down = false;}
}

function move() {

  if(move_right) {element.style.left = `${element.offsetLeft + BASE_SPEED}px`;}
  else if(move_left) {element.style.left = `${element.offsetLeft - BASE_SPEED}px`;}
  if(move_up) {element.style.top = `${element.offsetTop - BASE_SPEED}px`;}
  else if(move_down) {element.style.top = `${element.offsetTop + BASE_SPEED}px`;}

}
