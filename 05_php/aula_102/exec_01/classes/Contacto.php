<?php

class Contacto {

  public $morada;
  public $telefone;
  public $email;

  public function __construct($morada, $telefone, $email) {
    $this->morada = $morada;
    $this->telefone = $telefone;
    $this->email = $email; 
  }

}


?>