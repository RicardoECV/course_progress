var lista = document.querySelector("#lista");
var total = document.querySelector(".total");
var carrinho = [];

function addCarrinho(id, nome, preco, marca, quantidade) {
  carrinho.push(new Produto(id, nome, preco, marca, quantidade));
  lista.innerHTML += carrinho[carrinho.length-1];
  console.log(carrinho);
}

function remover(elemento, id) {
  elemento.parentElement.remove();
  for (let i in carrinho) {
    if(id == carrinho[i].id) {carrinho.splice(i, 1);}
  }
}

function actualizarTotal() {
  let soma_total = 0;
  for(let p of carrinho) {soma_total += p.preco;}
  total.innerHTML = soma_total.toFixed(2);
}

// function checkInput(elemento) {
//   if(elemento.value.length == 0) {this.value = 1;}
//   else if(parseInt(elemento.value.length == 0)) {this.value = 1;}
// }