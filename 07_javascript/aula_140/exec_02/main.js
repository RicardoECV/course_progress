var saida = document.querySelector("#saida");
var total = document.querySelector("#total");
var tempo = document.querySelector("#tempo");
var loop = 1;

function iniciarTempo(event) {
  resetSaida();
  event.preventDefault(); 

  let tempo_entre = (parseFloat(tempo.value)) * 1000;  
  let total_ciclos = parseInt(total.value);
  for(let i=1 ; i<=total_ciclos; i++) {
    setTimeout(contagem, i*tempo_entre);
    if(i == total_ciclos) {setTimeout(alertT,500);}
  } 
}

function contagem() {     
  saida.innerHTML += "<p>" + loop++ + "</p>";  
}

function alertT() {      
  alert("Acabou!"); 
}

function resetSaida() {
  saida.innerHTML = "";
  loop = 1;
}