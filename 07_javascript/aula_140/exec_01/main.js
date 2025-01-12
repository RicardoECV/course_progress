var saida = document.querySelector("#saida");
var total = document.querySelector("#total");
var tempo = document.querySelector("#tempo");
var i = 1;
var intervalo;

function iniciarTempo(event) {
  event.preventDefault(); 

  let tempo_entre = (parseFloat(tempo.value)) * 1000;  
  intervalo = setInterval(contagem, tempo_entre);  
}

function contagem() {   
  let loop = parseInt(total.value); 
  saida.innerHTML += "<p>" + i++ + "</p>";
  if(i > loop) {
    clearInterval(intervalo);
    setTimeout(alertT, 500);
  } 
}

function alertT() {
  i = 1;     
  alert("Acabou!"); 
}

function resetSaida() {saida.innerHTML = "";}