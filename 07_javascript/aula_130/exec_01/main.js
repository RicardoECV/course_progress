var saida = document.getElementById("saida");
var i = 1;

function addPara() {
  saida.innerHTML += "<p> Sou um pararágrafo (" + i + ")</p>";

  if(i == 4) {saida.innerHTML += "<h1>Vai Explodir!</h1>";}
  else if (i == 7) {saida.innerHTML += "<h1>Explodiu!</h1>";}  
  
  i++;
}