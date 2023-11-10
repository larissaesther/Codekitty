<?php
    include ("../conexao.php");

    $excluirLinguagens = $_GET['idLinguagensDeProgramacao'];

    $stmt = $pdo->prepare("delete from tbLinguagensDeProgramacao where idLinguagensDeProgramacao=$excluirLinguagens");	
    $stmt ->execute();

    header('Location:../adm-linguagens.php');


?>