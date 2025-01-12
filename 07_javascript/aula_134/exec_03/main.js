var resultado = document.querySelector(".resultado");

function capInput(event) {  
  event.preventDefault();  

  let nome = document.querySelector("#nome");
  let peso = document.querySelector("#peso");
  let altura = document.querySelector("#altura"); 
  
  let imc = calcIMC(peso, altura);
 
  resultado.innerHTML = "<h3>O paciente (" + nome.value + ") está com um IMC de (" + imc + ").</h3>";
}

function calcIMC(peso, altura) {
  let imc = parseFloat(peso.value) / (parseFloat(altura.value))**2;
  return imc.toFixed(2);
}

function limpar() {resultado.innerHTML = "";}