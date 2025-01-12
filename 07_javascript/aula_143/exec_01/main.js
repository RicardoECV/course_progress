var pessoas = [];
var input_nome = document.querySelector("#nome");
var input_morada = document.querySelector("#morada");
var input_nif = document.querySelector("#nif");
var form = document.querySelector("form");
var table = document.querySelector("table");

function registar(event){
  event.preventDefault();

  let diferente = true;
  
  for(let p of pessoas) {
    if(input_nome.value == p.nome) {
      diferente = confirm("Nome repetido, deseja continuar o registo?");
      break;  
    }
    if(input_morada.value == p.morada) {
      diferente = confirm("Morada repetida, deseja continuar o registo?");
      break; 
    }
    if(input_nif.value == p.nif) {
      diferente = confirm("Nif repetido, deseja continuar o registo?");
      break; 
    }
  }

  if(diferente) {registoPessoa();}  
 
  
}

function new_person(nome, morada, nif) {
  let new_person = {
    nome: nome,
    morada: morada,
    nif: nif
  };
  return new_person;
}

function registoPessoa() {
  pessoas.push(new_person(input_nome.value, input_morada.value, input_nif.value));
  table.innerHTML += `<tr><td>${input_nome.value}</td><td>${input_morada.value}</td><td>${input_nif.value}</td></tr>`;
  console.log(pessoas);
  form.reset();
  input_nome.focus();
}