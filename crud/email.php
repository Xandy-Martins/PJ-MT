<?php

$email=$_POST["email"];
$nome=$_POST["nome"];
$whatsapp=$_POST["whatsapp"];
$mensagem=$_POST["mensagem"];

// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$mensagem = wordwrap($mensagem,100);

// send email
mail($email,"My subject",$mensagem);

if ($enviado) {
     echo "Seu email foi enviado com sucesso!";
} else {
     echo "Olá seu e-mail foi enviando para os nossos técnicos, em breve entrarem em contatos com você, obrigado por escolher a Martins Technology.".$mail->ErrorInfo;
}
?>