<?php

namespace App\Classes;

class Cliente 
{
    public string $nome;
    public int $idade;
    public string $endereco;
    public string $telefone;

    public function __construct(string $nome, string $telefone, int $idade)
    {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->idade = $idade;

        echo "Bem-vindo {$this->nome}";
    }

    public function __destruct()
    {
        echo "\nO objeto foi destruido!";
    }

    public function __set(string $nomePropriedade, $valorPropriedade): void
    {
        if ($nomePropriedade === 'cpf') {
            $this->cpf = \str_replace('.', '', $valorPropriedade);
        } else {
            $this->$nomePropriedade = $valorPropriedade;
        }
    }

    public function __get(string $nomePropriedade): string
    {
        return "\nA propriedade não existe tanto estaticamente quanto dinamicamente";
    }

    public function __call(string $nomeMetodo, array $listaParametros): string
    {
        return "\nO método '$nomeMetodo' com os parametros: "
            . var_dump($listaParametros) 
            . " foi chamado!!";
    }

    public function __invoke($parametroA, $parametroB): void
    {
        echo "Instancia da classe chamada como método"; 
        var_dump($parametroA, $parametroB);
    }

    public function __sleep(): array
    {
        $this->serializado = true;

        return ["nome", "idade"];
    }

    public function __wakeup(): void
    {
        $this->serializado = false;
    }

    public function __tostring(): string
    {
        return "fui chamado como uma string, sendo concatenado!";
    }

    public function comprar(Produto $prod1, Produto $prod2): void
    {
        if ($this->idade < 18){
            echo "Menor de 18 anos não pode comprar cerveja!";
        } else {
            $compra = $prod1->preco + $prod2->preco;
            echo "O cliente realizou uma compra de: R$ {$compra}!";
        }
    }

    public function definirNome(string $nome): void
    {
        $this->nome = $nome;
    }
}
