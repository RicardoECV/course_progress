class Produto{

  // Atributos e Construtor
  constructor(id, quantidade, nome, preco, imagem){
    this.id = id;
    this.quantidade = quantidade;
    this.nome = nome;
    this.preco = preco;
    this.imagem = imagem;
  }

  // Métodos
  toString(){
    return `<div class="row my-2 align-items-center">
              <div class="col-auto"><img src="${this.imagem}" alt="" width="100"></div>
              <div class="col">${this.nome}</div>
              <div class="col">( ${this.preco.toFixed(2)} € ) x ${this.quantidade} = ( ${this.getTotal()} € )</div>
              <div class="col-auto text-danger" onclick="tirarCarrinho(this, ${this.id})">X</div>
            </div>`;
  }

  getTotal(){return this.quantidade * this.preco;}

}