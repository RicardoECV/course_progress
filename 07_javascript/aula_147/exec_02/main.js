const input_pesquisa = document.querySelector("#pesquisa");

function pesquisar() {
  let nome_produtos = document.querySelectorAll(".nome_produto");
  
    for (let p of nome_produtos) {      
      if(input_pesquisa.value.trim().length > 0) {

        if(p.innerHTML.toLowerCase().includes(input_pesquisa.value.toLowerCase())) {       
          p.classList.add("destacar");
        }

        else {p.classList.remove("destacar");}

      } 
      else {p.classList.remove("destacar");} 
    }    
}