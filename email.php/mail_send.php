<?php

function pegaValor($valor) {
    return isset($_POST[$valor]) ? $_POST[$valor] : 'mail_ok.php';
}

function validaEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function enviaEmail($de, $assunto, $mensagem, $para, $email_servidor) {
    $headers = "From: $email_servidor\r\n" .
               "Reply-To: $de\r\n" .
               "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  mail($para, $assunto, nl2br($mensagem), $headers);
}

$email_servidor = "martinstechnology@outlook.com";
$para = "martinstechnology@outlook.com";
$de = pegaValor("martinstechnology@outlook.com");
$mensagem = pegaValor("Solicitação de Serviço");
$assunto = "Solicitação de Serviço";

?>
