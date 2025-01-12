const saida = document.querySelector("#saida");

var i = 1;
var intervalo;

gerar();

function pararIntervalo() {
  clearInterval(intervalo);
}

function gerar() {
  i=1;
  saida.innerHTML = ""; 
  console.clear();
  intervalo = setInterval(cores, 1000);
}

function randomMaxMin(max, min) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

function corRandom() {
  return `rgb(${randomMaxMin(256, 0)},${randomMaxMin(256, 0)},${randomMaxMin(256, 0)})`;
}

function cores() {
 
  saida.innerHTML += `<div class="cor_${i}"> ${i} </div>`;  
  const saida_div = document.querySelector(".cor_" + i++);
  saida_div.style.backgroundColor = corRandom();
  console.log(saida_div.style.backgroundColor);
  
  if(i>=11) {        
    pararIntervalo();      
    setTimeout(gerar, 2000);     
  };  

}