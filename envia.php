<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "lcc.sistemas.info@gmail.com";
    $assunto = "Contato - LCC Web Developer";

    $corpo = "Nome: ".$nome."\r\n"."E-mail: ".$email."\r\n"."Telefone: ".$telefone."\r\n"
    ."Mensagem: ".$mensagem; 

    $cabecalho = "From:lcc.sistemas.info@gmail.com"."\n"."Reply-To: ".$email."\n"."X-Mailer:PHP/".phpversion();

 
    if (empty($erro)) {

        if (file_exists('envia_phpmailer.php')) {
            include('envia_phpmailer.php');
        } else {
            echo 'O arquivo envia_phpmailer.php não foi encontrado.';
        }
    } else {
        echo 'Não foi possível enviar as informações para o envia_phpmailer.php';
    }
    


?>