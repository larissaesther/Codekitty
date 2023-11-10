<?php
    include ("../conexao.php");

    $descricao = $_POST['descricao'];
    $imgNoticia = $_POST['imgNoticia'];
    


    $stmt = $pdo->prepare("insert into tbNoticia values('', '$descricao', '$imgNoticia')");	
    $stmt ->execute();




        header('location: adicionarNoticia.php');


   


?>