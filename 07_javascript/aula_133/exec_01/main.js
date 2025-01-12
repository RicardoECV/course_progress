var elemento = document.querySelector("p");
  
// elemento.classList.add("especial");
// elemento.classList.remove("especial");
// elemento.classList.toggle("especial");

function backColorChange(elemento) {  
  let elementos = document.querySelectorAll(elemento);

  for(let i=0; i < elementos.length ; i++) {
    elementos[i].classList.toggle("especial");
  }  
}