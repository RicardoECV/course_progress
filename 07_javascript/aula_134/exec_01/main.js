function capInput(event) {  

  event.preventDefault();
  
  reset();
  let saida = document.querySelector(".contar");
  let numero = document.querySelector("#numero"); 
  max = parseInt(numero.value);

  for(i = 0; i < max; i++) {
    saida.innerHTML += "<p>" + (i+1) + "<br></p>";
  }
}

function reset() {  
  let saida = document.querySelectorAll("p");
  for (i = 0; i < saida.length; i++) {saida[i].remove();}  
}