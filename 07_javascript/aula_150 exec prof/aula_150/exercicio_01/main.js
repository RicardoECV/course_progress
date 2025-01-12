var lista = document.querySelector("#lista");
var total = document.querySelector("#total");
var total_formulario = document.querySelector("#total_formulario");
var carrinho = [];

function addCarrinho(id, quantidade, nome, preco, imagem){
  carrinho.push(new Produto(id, parseInt(quantidade), nome, preco, imagem));
  lista.innerHTML += carrinho[carrinho.length-1];
  atualizarTotal();
  console.log(carrinho);
}

function tirarCarrinho(elemento, id){
  elemento.parentElement.remove();
  for(let i in carrinho){if(id == carrinho[i].id){carrinho.splice(i, 1);}}
  atualizarTotal();
  console.log(carrinho);
}

function atualizarTotal(){
  let soma_total = 0;
  for(let p of carrinho){soma_total += p.getTotal();}
  total.innerHTML = soma_total.toFixed(2);
  total_formulario.value = soma_total.toFixed(2);
}

function verificarInput(elemento){
  if(elemento.value.length == 0){elemento.value = 1;}
  else if(parseInt(elemento.value) <= 0){elemento.value = 1;}
}