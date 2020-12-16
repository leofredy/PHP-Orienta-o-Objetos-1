<?php

namespace App\Email;

/**
 * Com use usamos apenas o Adaptador para referenciar
 * o caminho do namespace!
 * 
 * Como adaptador já esta definido, usamos "as" para
 * criar um apelido em nosso Adaptador SES!
 */
use App\Email\Adaptadores\Mailgun\Adaptador as AdaptadorMailgun;
use App\Email\Adaptadores\SES\Adaptador as AdaptadorSES;
use App\Classes\Cliente;

const VERSAO = "1.0";

class Envio
{
    #Uma biblioteca de terceiro...

    public function enviar(): void
    {
        # Namespace relativo, omitindo o caminho /App/Email
        $adaptadorMailgun = new AdaptadorMailgun;
        $transporte = new Transporte;
        $classGlobal = new \stdClass;
        $cli = new Cliente;

        var_dump($adaptadorMailgun, $transporte, $classGlobal);
    }

    public function m1(): void
    {
        $adaptadorMailgun = new AdaptadorMailgun;

        echo "<br> M1.... <br>";

        var_dump($adaptadorMailgun);
    }

    public function m2(): void
    {
        $adaptadorSES = new AdaptadorSES;
    }
}

function validationEmail(string $email)
{
    return "O e-mail: $email está validado";
}