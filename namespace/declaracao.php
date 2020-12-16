<?php

require_once "src/Email/Envio.php";
require_once "src/SMS/Envio.php";

$email = new App\Email\Envio;
$sms = new App\SMS\Envio;
var_dump($email, $sms);

$validacao = App\Email\validationEmail("aaaaaaa@bbbb.ccc.dd");
echo "$validacao" . "<br>";
echo App\Email\VERSAO;


