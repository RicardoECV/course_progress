var saida = document.querySelector("#saida");
var nome = document.querySelector("#nome");
var peso = document.querySelector("#peso");
var altura = document.querySelector("#altura");
var formulario = document.querySelector("form");

var pessoas = [];

function novaPessoa(nome, peso, altura, imc) {
  let nova_pessoa = {
    nome: nome,   
    peso: peso,   
    altura: altura,
    imc: imc 
  }
  return nova_pessoa;
}

function toString(p){
  return "<p class='string'>" + p.nome + " - " + p.peso.toFixed(1) + " - " + p.altura.toFixed(2) + " - (" + p.imc.toFixed(2) + ")</p>";  
};

function cadastrar(event) {
  event.preventDefault();
  saida.innerHTML = "";

  let novo_nome = nome.value; 
  let nova_altura = parseFloat(altura.value);
  let novo_peso = parseFloat(peso.value);
  let imc = novo_peso / (nova_altura**2);

  pessoas.push(novaPessoa(novo_nome, novo_peso, nova_altura, imc)); 

  console.log(pessoas);

  for(p of pessoas) {
    saida.innerHTML += toString(p);
  }

  // nome.value = "";
  // peso.value = "";
  // altura.value = "";
  formulario.reset();
  nome.focus();
}

