var body = document.body;


function capInput(event) {
  event.preventDefault();   
 
  let img = "";
  let input_temperatura = document.querySelector("input[name='temperatura']"); 
  let c = parseFloat(input_temperatura.value);  
  let f = calcF(c);
  let k = calcK(c);
  
  if (c <= 0) {img = "imagens/gelo.jpg";}
  else if (c >= 100) {img = "imagens/vapor.jpg";}
  else {img = "imagens/agua.jpg";}
  
  body.innerHTML += "<div class='box-2'>" + c.toFixed(1) + "  ºC<br><br>" + f.toFixed(2) + " ºF<br><br>" + k.toFixed(2) + " K<br><br><img class='img-temp' src=" + img + "></img></div>";  
}

function calcK(temperatura) {
  let kelvin = temperatura + 273.15;
  return kelvin;
}

function calcF(temperatura) {
  let f = temperatura * 1.8 + 32;
  return f;
}

function limpar() {    
  let resultado = document.querySelector(".box-2");
  resultado.remove(); 
}