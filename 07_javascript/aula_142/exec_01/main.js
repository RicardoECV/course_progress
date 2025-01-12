const saida = document.querySelector("#saida");
const saida_2 = document.querySelector("#saida_2");

var intervalo = setInterval(arrancar, 1000);

function arrancar() {saida.innerHTML = randomNum(10);}

function randomNum(max) {
  return parseInt(Math.random() * (max + 1));
}

function randomMaxMin(max, min) {
  return parseInt(Math.random() * (max - min + 1)) + min;
}