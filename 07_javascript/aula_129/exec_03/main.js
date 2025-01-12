function convertEuroDolar(euro) {
  let resultado = euro * 1.06;
  console.log(resultado.toFixed(2) + " €");
}

function convertEuroLibra(euro) {
  let resultado = euro * 0.83;
  return resultado;
}

var euro = 24;

var libra = convertEuroLibra(euro) + 10;
convertEuroDolar(euro);

console.log(libra.toFixed(2) + " £");