var saida = document.querySelector("#saida");

let loop = 1;

// WHILE
while(loop <= 3) {
  saida.innerHTML += "<p> Dentro While </p>";
  loop ++;
}

saida.innerHTML += "<hr>";

// SWITCH
let opcao = 2;
switch(opcao) {
  case 1:
    saida.innerHTML += "<p> Caso 1 </p>";
    break;
  case 2:
    saida.innerHTML += "<p> Caso 2 </p>";
    break;
  case 3:
    saida.innerHTML += "<p> Caso 3 </p>";
    break;
  default:
    saida.innerHTML += "<p> Opcao Invalida </p>";
    break;
}

saida.innerHTML += "<hr>";

var carros = ["Ford","Opel","BMW","VW"];

// FOR "NORMAL"
for(let i=1; i<=3; i++) {
  c = carros[i];
  saida.innerHTML += "<p> Teste FOR (" + c + ")</p>";
}

saida.innerHTML += "<hr>";

// FOR IN
for(let i in carros){
  c = carros[i];
  saida.innerHTML += "<p> Teste FOR IN(" + c + ")</p>";
}

saida.innerHTML += "<hr>";

// FOR OF
for(let c of carros) {
  saida.innerHTML += "<p> Teste FOR OF(" + c + ")</p>";
}

saida.innerHTML += "<hr>";

// FOR EACH
carros.forEach(teste);

function teste(c){
  saida.innerHTML += "<p> Teste FOREACH (" + c + ")</p>";
}

saida.innerHTML += "<hr>";

// FOR EACH
carros.forEach(function(c){saida.innerHTML += "<p> Teste FOREACH Especial (" + c + ")</p>";});

saida.innerHTML += "<hr>";

// FOR EACH
carros.forEach((c) => {saida.innerHTML += "<p> Teste FOREACH Especial (" + c + ")</p>";});