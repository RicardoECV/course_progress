<?php

function novaPessoa($nome, $morada, $altura, $genero) {
  $nova_pessoa = [
    "nome" => $nome,
    "morada" => $morada,
    "altura" => $altura,
    "genero" => $genero
  ];
  return $nova_pessoa;
}

?>