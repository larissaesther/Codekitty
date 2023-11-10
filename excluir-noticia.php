<?php
    include ("../../conexao.php");

    $excluirNoticia = $_GET['idNoticia'];

    $stmt = $pdo->prepare("delete from tbNoticia where idNoticia=$excluirNoticia");	
    $stmt ->execute();

    header('Location:../adicionarNoticia.php');

?>