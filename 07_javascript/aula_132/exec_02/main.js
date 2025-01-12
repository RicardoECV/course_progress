var comuta = true;

function backColorChange(elemento ,color_1, color_2) {
  let elementos = document.querySelectorAll(elemento);

  if(comuta) {
    for(let i=0; i < elementos.length ; i++) {
      elementos[i].style.backgroundColor = color_1;
    }  
  }

  else {
    for(let i=0; i < elementos.length ; i++) {
      elementos[i].style.backgroundColor = color_2;
    }    
  }
  comuta = !comuta;
}

  

