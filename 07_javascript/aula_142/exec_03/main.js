const saida = document.querySelector("#saida");

var i = 1;
var intervalo;

gerar();

function novoElemento() {
  let r = randomMaxMin(0, 255);
  let g = randomMaxMin(0, 255);
  let b = randomMaxMin(0, 255);
  let new_element = document.createElement("div");
  new_element.style.backgroundColor = `rgb(${r},${g},${b})`;
  new_element.innerHTML = i++;
  saida.append(new_element);
  console.log(`rgb(${r},${g},${b})`);
  if(i>10) {pararIntervalo();}
}
function pararIntervalo() {
  clearInterval(intervalo);  
}

function gerar() {
  novoElemento();  
  intervalo = setInterval(novoElemento, 500);  
}

function randomMaxMin(max, min) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
