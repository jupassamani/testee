<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$message = addslashes($_POST['message']);

}

$to = "ligiacpassamani@gmail.com";
$subtjet = "Contato - Doceria LCP";
$body = "Nome: ".$nome. "\r\n"
        ."Email: ".$email. "\r\n"
        ."Mensagem: ".$message;
$header = "From: ligia@dominio.com"."\r\n"
            ."Replay to: ".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();

if(mail($to, $subtjet, $body, $header)) {
    echo ("email enviado com sucesso!");
}else {
    echo ("email não enviado");
}




?>