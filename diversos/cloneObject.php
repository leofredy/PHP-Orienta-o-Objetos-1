<?php

require_once "./Classes/Produto.php";

$produto1 = new Produto;
$produto1->preco = "Barato ladrão!";
$produto2 = clone $produto1;

$produto1->titulo = "Motorzão";
$produto2->titulo = "Escape esportivo";

var_dump($produto1);
var_dump($produto2);
