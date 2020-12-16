<?php

require_once "./Classes/Produto.php";

#Passagem por atribuição
$produto1 = new Produto;
$produto2 = $produto1;

$produto2->titulo = "Skol";
var_dump($produto1);
var_dump($produto2);

$produto2 = 10;
var_dump($produto1);
var_dump($produto2);


echo "#Passagem por referencia";


#Passagem por referencia
$produto2 = &$produto1;

$produto2->titulo = "Titan 160";
var_dump($produto1);
var_dump($produto2);

$produto2 = "Outro valor";
var_dump($produto1);
var_dump($produto2);
