<?php

require_once "./Classes/Produto.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja";
$prod1->preco = 3.50;

foreach ($prod1 as $propriedade => $valor) {
    echo "$propriedade: $valor";
    echo "\n";
}