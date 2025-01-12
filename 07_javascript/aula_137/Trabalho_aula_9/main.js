var screen = document.querySelector("#screen");
var resultado = document.querySelector("#resultado");

function premir(num) {  
  if(screen.innerHTML.length <= "9"){    
    if(num == ".") {
      if(!screen.innerHTML.includes(".")) {
        screen.innerHTML += num;
      }
    }
    else if(num == "-") {
      if(screen.innerHTML.length == "0") {
        screen.innerHTML += num;
      }
    }
    else {screen.innerHTML += num;}
  }
  calc();
}

function clearScreen() {
  screen.innerHTML = "";
  resultado.innerHTML = "";
}

function calc() {

  let temperatura = parseFloat(screen.innerHTML);
  let k = calcK(temperatura);
  let f = calcF(temperatura);

  if(!isNaN(temperatura)) {    
    resultado.innerHTML = temperatura.toFixed(2) + " C = " + f.toFixed(2) + " F<br><br>" + temperatura.toFixed(2) + " C = " + k.toFixed(2) + " K";
  }
  else {resultado.innerHTML = "";}
  
}

function calcK(temperatura) {
  let kelvin = temperatura + 273.15;
  return kelvin;
}

function calcF(temperatura) {
  let f = temperatura * 1.8 + 32;
  return f;
}