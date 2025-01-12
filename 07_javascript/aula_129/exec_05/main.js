var nome = "Ricardo";
var data_ultimo_acesso = "20:31 13/11/24";

function convertKelvin(temp) {
  let resultado = temp + 273.15;
  return resultado;
}

function convertFahr(temp) {
  let resultado = temp * 1.8 + 32;
  return resultado;
}

var temperatura = 25;

var kelvin = convertKelvin(temperatura);
var fahr = convertFahr(temperatura);
