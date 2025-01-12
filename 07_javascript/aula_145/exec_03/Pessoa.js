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

  toString(posicao) {
    return `<tr>
              <td>${posicao}</td>
              <td>${this.nome}</td>
              <td>${this.idade}</td>
              <td>${this.altura.toFixed(2)}</td>
              <td>${this.genero}</td>
            </tr>`;
  }

}