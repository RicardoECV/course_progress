const saida = document.querySelector("#saida");
var i = 1;
var intervalo = setInterval(contagem, 1000);

function pararIntervalo() {
  clearInterval(intervalo);
}

function contagem() { 
  saida.innerHTML += i + "<br>";
  i++;
  if(i >= 7) {    
    saida.innerHTML = ""; 
    i = 1;     
    setTimeout(2000); 
  }  
}