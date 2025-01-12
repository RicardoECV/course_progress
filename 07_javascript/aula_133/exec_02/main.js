function buttonChange(elemento) {  
  let elementos = document.querySelectorAll(elemento);
  let div_entrada = document.querySelector("#entrada"); 
  
  div_entrada.classList.add("desaparece");  

  for(let i=0; i < elementos.length ; i++) {
    elementos[i].classList.add("botao-novo-teste");  
    elementos[i].innerHTML = "Novo-Teste " + (i+1);  
  }   
}

function resetAll(elemento) {
  let elementos = document.querySelectorAll(elemento);
  let div_entrada = document.querySelector("#entrada");

  div_entrada.classList.remove("desaparece");

  for(let i=0; i < elementos.length ; i++) {
    elementos[i].classList.remove("botao-novo-teste");  
    elementos[i].innerHTML = "Teste " + (i+1);  
  }   
}