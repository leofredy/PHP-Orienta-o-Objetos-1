<?php

namespace App\Classes;

class Fornecedor 
{
    public const PAIS = "BRAZIL";
    public string $razaoSocial;
    public string $nomeFantasia;
    public string $cnpj;

    public function autorizar(object $usuario): void
    {
        if ($usuario->nome == "joao" && $usuario->senha == "1234"){
            echo "<br> Autorizado";
        } else {
            echo "<br> Bloqueado!";
        }
    }
}