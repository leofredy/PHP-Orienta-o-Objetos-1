<?php

declare(strict_types=1);

require_once "./src/Classes/Fornecedor.php";

$fornecedor = new Fornecedor();
// $fornecedor->cnpj = 99.999.999/9999-99; Erro tipo estrito
$fornecedor->cnpj = "99.999.999/9999-99";
$fornecedor->nomeFantasia = "Meu Armazem";
$fornecedor->razaoSocial = "Meu Armazem LTDA";

$fornecedor->autorizar(new class {
    public $nome = "joao";
    public $senha = "1234";
});

var_dump($fornecedor);