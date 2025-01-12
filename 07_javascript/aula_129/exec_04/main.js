// Exercicio 2
console.log("\n Exercicio 2 \n\n");

function convertKelvin(temp) {
  let resultado = temp + 273.15;
  console.log("C to K: " + resultado.toFixed(2));
}

function convertFahr(temp) {
  let resultado = temp * 1.8 + 32;
  return resultado;
}

var temperatura = 25;

console.log("Temperatura em celsius: " + temperatura.toFixed(2));
convertKelvin(temperatura);
console.log("C to F: " + convertFahr(temperatura).toFixed(2));