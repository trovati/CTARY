<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$phone = addslashes($_POST['telefone']);
$email = addslashes($_POST['email']);
$categoria = addslashes($_POST['select']);
$mensagem = addslashes($_POST['mensage']);
}

$to = "watsontrovati@gmail.com";
$subject = "Contato - CT ARY";
$body = "Nome: " .$nome."\n".
        "Telefone: ".$phone."\n".
        "Email: ".$email."\n".
        "Categoria".$categoria."\n".
        "Mensagem: ".$mensagem;

$header = "From: watsontrovati@hotmail.com"."\r\n".
            "Reply-To:".$email."\e\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email Enviado com Sucesso");
} else{
    echo("Email não enviado");
}

?>