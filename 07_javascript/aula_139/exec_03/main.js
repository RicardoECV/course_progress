var saida = document.querySelector("#saida");
var i = 1;
var intervalo = setInterval(teste, 1000);

function pararIntervalo() {
  clearInterval(intervalo);
}

function teste() {
  saida.innerHTML += "<p>" + i++ + "</p><br>";
  if(i > 5) {
    pararIntervalo();
    setTimeout(updateT, 1000);
  }
}

function updateT() {
  loop = 1;
  saida.innerHTML = "";
  intervalo = setInterval(teste, 1000);
}