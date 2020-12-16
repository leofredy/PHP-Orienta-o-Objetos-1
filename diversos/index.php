<?php

require_once "./Classes/Produto.php";
require_once "./Classes/Cliente.php";

$prod1 = new Produto;
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Brasileira";
$prod1->preco = 3;

$prod2 = new Produto;
$prod2->titulo = "Itaipava";
$prod2->descricao = "Cerveja Brasileira";
$prod2->preco = 7;


$Fernando = new Cliente;
$Fernando->nome = "Fernando";
$Fernando->idade = 16;
$Fernando->comprar($prod1, $prod2);