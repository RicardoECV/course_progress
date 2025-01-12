var saida_1 = document.getElementById("saida_1");
var saida_2 = document.getElementById("saida_2");
var i = 0;

function addPara() {
  let novo_positivo = document.createElement("p");
  let novo_negativo = document.createElement("p");
  novo_positivo.innerHTML = `Sou um paragrafo (${i})`;
  novo_negativo.innerHTML = `Sou um paragrafo (-${i})`;
  saida_1.append(novo_positivo);
  saida_2.append(novo_negativo);
  i++; 
}
