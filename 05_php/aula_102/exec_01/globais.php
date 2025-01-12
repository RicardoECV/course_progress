<?php

require_once("classes/Viagem.php");
require_once("classes/Contacto.php");
require_once("classes/Banner.php");

// Configurações
$config = [
  "total_caracteres" => 100,
];

// Simulação de Base de Dados
$viagens = [
  new Viagem("Lago", "public/imagens/paisagem_1.avif",  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ut nihil nulla maxime voluptas <u>vitae sit quas, quia quos velit</u> amet nemo dolorem ipsam dignissimos laborum ipsa atque commodi minus rem. Architecto maxime maiores debitis. <small>Maiores accusamus suscipit</small>, libero autem nam, maxime dignissimos rerum <i>omnis illum at nisi</i> reprehenderit. Perferendis."),

  new Viagem("Rio", "public/imagens/paisagem_2.avif",  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ut nihil nulla maxime voluptas <u>vitae sit quas, quia quos velit</u> amet nemo dolorem ipsam dignissimos laborum ipsa atque commodi minus rem. Architecto maxime maiores debitis. <small>Maiores accusamus suscipit</small>, libero autem nam, maxime dignissimos rerum <i>omnis illum at nisi</i> reprehenderit. Perferendis."),

  new Viagem("Balões", "public/imagens/paisagem_3.avif",  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ut nihil nulla maxime voluptas <u>vitae sit quas, quia quos velit</u> amet nemo dolorem ipsam dignissimos laborum ipsa atque commodi minus rem. Architecto maxime maiores debitis. <small>Maiores accusamus suscipit</small>, libero autem nam, maxime dignissimos rerum <i>omnis illum at nisi</i> reprehenderit. Perferendis."),

  new Viagem("Cidade", "public/imagens/paisagem_4.avif",  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ut nihil nulla maxime voluptas <u>vitae sit quas, quia quos velit</u> amet nemo dolorem ipsam dignissimos laborum ipsa atque commodi minus rem. Architecto maxime maiores debitis. <small>Maiores accusamus suscipit</small>, libero autem nam, maxime dignissimos rerum <i>omnis illum at nisi</i> reprehenderit. Perferendis."),

  new Viagem("Encosta", "public/imagens/paisagem_5.avif",  "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ut nihil nulla maxime voluptas <u>vitae sit quas, quia quos velit</u> amet nemo dolorem ipsam dignissimos laborum ipsa atque commodi minus rem. Architecto maxime maiores debitis. <small>Maiores accusamus suscipit</small>, libero autem nam, maxime dignissimos rerum <i>omnis illum at nisi</i> reprehenderit. Perferendis.") 
]; 

$contactos = [
  new Contacto("Rua Lisboa", 34354543543, "contacto@gmail.com")
];

$carousel = [
  new Banner("public/imagens/paisagem_1.avif"),
  new Banner("public/imagens/paisagem_2.avif"),
  new Banner("public/imagens/paisagem_3.avif"),
  new Banner("public/imagens/paisagem_4.avif"),
  new Banner("public/imagens/paisagem_5.avif")
];

?>

