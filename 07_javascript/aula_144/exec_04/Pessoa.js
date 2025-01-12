class Pessoa{

  // Constructor e Atributos
  constructor(nome, idade, altura, genero) {
    this.nome = nome;
    this.idade = idade;
    this.altura = altura;
    this.genero = genero;
  }

  // Métodos
  completarAnos() {
    this.idade++;
  }

  toString() {
    return `<tr><td>${this.nome}</td><td>${this.idade}</td><td>${this.altura}</td><td>${this.genero}</td></tr>`;
  }

}