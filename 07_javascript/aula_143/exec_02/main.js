var pessoas = [];
var input_nome = document.querySelector("#nome");

bolachasCheck();

function saveItems(event) {
  event.preventDefault();
  localStorage.nome = input_nome.value;
  console.log(localStorage.nome);
}

function bolachasCheck() {
  if(localStorage.nome != null) {
    input_nome.value = localStorage.nome;
  }
}

function new_person(nome, morada, nif) {
  let new_person = {
    nome: nome,
    morada: morada,
    nif: nif
  };
  return new_person;
}
