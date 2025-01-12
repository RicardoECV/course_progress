var input_nome = document.querySelector("#nome");
var input_cor = document.querySelector("#cor");
var saida = document.querySelector("#saida");
var body = document.body;
var formulario = document.querySelector("form");

bolachasCheck();

function saveItems(event) {
  event.preventDefault();
  localStorage.nome = input_nome.value;
  localStorage.cor = input_cor.value;

  console.log(localStorage.nome);
  console.log(localStorage.cor);

  saida.classList.remove("d-none");  
  saida.innerHTML = `<p>Olá (${input_nome.value}), vejo que escolheste a cor (${input_cor.value}).</p>`;
  body.style.backgroundColor = input_cor.value;

  localStorage.fundo = input_cor.value;  
}

function bolachasCheck() {
  if(localStorage.nome != null && localStorage.cor != null) {
    input_nome.value = localStorage.nome;
    input_cor.value = localStorage.cor;
  }  
  if(localStorage.fundo != null) {
    saida.classList.remove("d-none");
    saida.innerHTML = `<p>Olá (${input_nome.value}), vejo que escolheste a cor (${input_cor.value}).</p>`;
    body.style.backgroundColor = input_cor.value;
  }
}

function resetTudo() {
  formulario.reset();
  saida.classList.add("d-none");
  body.style.backgroundColor = "gray";
  localStorage.clear();
}