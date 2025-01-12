<?php

class Pessoa {

  // Atributos
  public $nome;
  public $morada;
  public $idade;
  public $altura;
  public $genero;

  // Construtor
  public function __construct($nome, $morada, $idade, $altura, $genero) {
    $this->nome = $nome;
    $this->morada = $morada;
    $this->idade = $idade;    
    $this->altura = $altura;    
    $this->genero = $genero;    
  }

  // Método
  public function toTablet($posicao) {    
    echo "<tr>";
    echo "<td>" . $posicao . "</td>";
    echo "<td>" . $this->nome . "</td>";
    echo "<td>" . $this->morada . "</td>";
    echo "<td>" . $this->idade . "</td>";
    echo "<td>" . number_format($this->altura, 2) . "</td>";
    echo "<td>" . $this->genero . "</td>";
    echo "</tr>";    
  }

}

?>