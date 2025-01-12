var body = document.body;
var input_temperatura = document.querySelector("input[name='temperatura']"); 
var saida_cel = document.querySelector("#saida_cel");
var saida_kev = document.querySelector("#saida_kev");
var saida_far = document.querySelector("#saida_far");
var img_temp = document.querySelector(".img-temp");
var saida = document.querySelector("#saida");

function capInput(event) {
  event.preventDefault();
  saida.classList.remove("d-none");
 
  let c = parseFloat(input_temperatura.value);  
  let f = calcF(c);
  let k = calcK(c);
  let img = "";
  
  if (c <= 0) {img = "imagens/gelo.jpg";}
  else if (c >= 100) {img = "imagens/vapor.jpg";}
  else {img = "imagens/agua.jpg";}

  saida_cel.innerHTML = c.toFixed(2) + "C";
  saida_kev.innerHTML = k.toFixed(2) + "K";
  saida_far.innerHTML = f.toFixed(2) + "F";
  img_temp.src = img; 

  if(!isNaN(c)) {saida.classList.remove("d-none");}
  else{saida.classList.add("d-none");}
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
  saida.classList.add("d-none");     
}