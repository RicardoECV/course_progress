<?php

$data_base = [
  "host" => "localhost",
  "dbname" => "construcao_e_habitacao",
  "user" => "root",
  "password" => ""
];

$conection = new PDO("mysql:host=$data_base[host];dbname=$data_base[dbname];charset=utf8mb4;", $data_base["user"], $data_base["password"]);

function selectSQL($sql) {
  global $conection;  
  $query = $conection->query($sql);
  return $query->fetchAll(PDO::FETCH_ASSOC);
}

function selectSQLUnique($sql) {
  global $conection;  
  $query = $conection->query($sql);
  return $query->fetch(PDO::FETCH_ASSOC);
}

function iduSQL($sql) {
  global $conection;  
  $conection->query($sql);  
}

?>