<?php

    $nome = $_POST['txNome'];
    $email = $_POST['txEmail'];
    $assunto = $_POST['txAssunto'];
    $mensagem = $_POST['txMensagem'];
    $data = $_POST['Data'];


    include("conexao-contato.php");

    $stmt = $pdo->prepare("insert into tbContato values(null,'$nome','$email','$assunto','$mensagem','$data')");	
    $stmt ->execute();

    header('location:contato.php');


?>