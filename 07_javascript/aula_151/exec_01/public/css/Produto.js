class Produto {

  constructor(id, nome, preco, marca, quantidade) {
    this.id = id;
    this.nome = nome;
    this.preco = preco;
    this.marca = marca;
    this.quantidade = quantidade;
  }

  toString() {

    return `<div class="row my-2 align-items-center">
              <div class="col-auto">${this.nome}</div>
              <div class="col-auto">${this.preco}</div>
              <div class="col-auto">${this.quantidade}</div>
              <div class="col-auto">${this.marca}</div>
              <div class="col-auto" onclick="remover(this, ${this.id})">X</div>
            </div>`;
  }

}