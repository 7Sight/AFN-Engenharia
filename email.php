<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['msg'];

$to = "evaldojr11@gmail.com"; //alterar para o email de contato da AFN
$subject = "Contato - AFN Engenharia";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email."\r\n".
        "Telefone: ".$telefone."\r\n".
        "Mensagem: ".$mensagem;

$header = "From: evaldojunior1997@hotmail.com"."\r\n". //alterar o email - Esse email precisa pertencer ao dominio no qual o script ta rodando
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();
            
if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");
}else{

    echo("O Email não pode ser enviado");
}

}

?>