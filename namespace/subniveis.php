<?php

require_once "./src/Email/Adaptadores/Mailgun/Adaptador.php";
require_once "./src/Email/Adaptadores/SES/Adaptador.php";
require_once "./src/Email/Envio.php";
require_once "./src/SMS/Envio.php";

$mailgun = new \App\Email\Adaptadores\Mailgun\Adaptador;
$ses = new \App\Email\Adaptadores\SES\Adaptador;
$email = new \App\Email\Envio;
$sms = new \App\SMS\Envio;

var_dump($mailgun, $ses, $email, $sms);