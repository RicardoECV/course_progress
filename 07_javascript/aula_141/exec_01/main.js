var saida = document.querySelector("#saida");
var intervalo = setInterval(horas_1, 1000);

function horas_1() {
  let data_atual = new Date();
  let horas = (data_atual.getHours() < 10) ? (`0${data_atual.getHours()}`) : data_atual.getHours();
  let minutos = (data_atual.getMinutes() < 10) ? (`0${data_atual.getMinutes()}`) : data_atual.getMinutes();
  let segundos = (data_atual.getSeconds() < 10) ? (`0${data_atual.getSeconds()}`) : data_atual.getSeconds();

  saida.innerHTML = `${horas}:${minutos}:${segundos}`;
}


var saida_2 = document.querySelector("#saida_2");
var intervalo_2 = setInterval(horas_2, 10);

horas_2();
function horas_2() {
  let data_atual = new Date();

  let barra_horas = document.querySelector("#barra_horas");
  let barra_minutos = document.querySelector("#barra_minutos");
  let barra_segundos = document.querySelector("#barra_segundos");
  let barra_mili = document.querySelector("#barra_milisegundos");

  let horas = data_atual.getHours()/23 * 100;
  let minutos = data_atual.getMinutes()/60 * 100;
  let segundos = data_atual.getSeconds()/60 * 100;
  let mili = data_atual.getMilliseconds()/1000 * 100;

  barra_horas.style.height = `${horas}%`;
  barra_minutos.style.height = `${minutos}%`;
  barra_segundos.style.height = `${segundos}%`;
  barra_mili.style.height = `${mili}%`;
}

