<?php

require_once "./autoload/autoload-psr4.php";



$Joao = new \App\Classes\Cliente("Leonardo", "99999-9999", 18);

$Joao->cpf = "124.1561.1561.132.456";
$Joao->rg = "15.165.156.123-98";
echo $Joao->cidade;
echo $Joao->game("playerOne, monster, guns");
$Joao("teste", "teste2");

$joaoSerializado = serialize($Joao);
$joaoDeserializado = unserialize($joaoSerializado);
var_dump($joaoSerializado, $joaoDeserializado);

echo "Concatenando objetos: " . $Joao;
