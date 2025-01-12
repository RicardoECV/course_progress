<?php

function novoFilme($titulo, $imagem, $texto) {
  $novo_filme = [
    "titulo" => $titulo,
    "imagem" => $imagem,
    "texto" => $texto,
  ];
  return $novo_filme;
}

function novoBanner($titulo, $subtitulo, $imagem) {
  $novo_banner = [
    "titulo" => $titulo,
    "subtitulo" => $subtitulo,
    "imagem" => $imagem,
  ];
  return $novo_banner;
}


?>