// Variáveis Globais
var pessoas = [
  new Pessoa("Ricardo", 43, 1.55, "masculino"),
  new Pessoa("Ana", 23, 1.78, "feminino"),
  new Pessoa("Francisco", 33, 1.88, "masculino")
];

const nome_input = document.querySelector("#nome");
const idade_input = document.querySelector("#idade");
const altura_input = document.querySelector("#altura");
const genero_input = document.querySelector("#genero");
const saida = document.querySelector("#saida table");
const formulario = document.querySelector("form");

var posicao = 1;

// Funções
function registarP(event) {
  event.preventDefault();
  pessoas.push(new Pessoa(nome_input.value, parseFloat(idade_input.value), parseFloat(altura_input.value), genero_input.value));  
  listarP(); 
  formulario.reset();
  console.log(pessoas); 
}

function listarP() { 
  saida.innerHTML = "<tr><th>Posição</th><th>Nome</th><th>Idade</th><th>Altura</th> <th>Gênero</th></tr>";
  for(let p of pessoas) {   
    saida.innerHTML += p.toString(posicao++);    
  }
}

// Executar
listarP();
