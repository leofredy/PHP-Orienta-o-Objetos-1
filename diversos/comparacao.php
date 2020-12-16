<?php

require_once "./Classes/Produto.php";

$produto1 = new Produto;
$produto2 = new Produto;

$produto1->titulo = "Cerveja Itaipava";
$produto2->titulo = "Cerveja Itaipava";
var_dump($produto1 == $produto2); #Compara tipo e propriedade
var_dump($produto1 === $produto2); #Compara referencia

$produto2->titulo = "Cerveja Cristal";
var_dump($produto1 == $produto2);


$produto3 = $produto1;
var_dump($produto1 === $produto3);

$produto4 = &$produto1;
var_dump($produto1 === $produto4);

$produto5 = clone $produto1;
var_dump($produto1 === $produto5);





