<?php
    include ("../../conexao.php");

    $excluirContato = $_GET['idContato'];

    $stmt = $pdo->prepare("delete from tbContato where idContato=$excluirContato");	
    $stmt ->execute();

    header('Location: ../usuarios.php');


?>