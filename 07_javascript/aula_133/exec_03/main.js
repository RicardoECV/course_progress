function capInput() {   
  reset();
  let saida = document.querySelector(".contar");
  let numero = document.querySelector("#numero"); 

  for(let i = 1; i <= numero.value; i++) {
    saida.innerHTML +=  (i) + "<br>";
  }
}

function reset() {  
  let saida = document.querySelector(".contar");   
  saida.innerHTML = ""; 
}