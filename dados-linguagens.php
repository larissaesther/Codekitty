<?php
    include ("../conexao.php");

    $idLinguagensDeProgramacao = $_POST['idLinguagensDeProgramacao'];
    $nomeLinguagem = $_POST['nomeLinguagem'];
    $historiaLinguagem = $_POST['historiaLinguagem'];
    $funcionalidadeLinguagem = $_POST['funcionalidadeLiguagem'];
    $cursosLinguagem = $_POST['cursosLinguagem'];
    $dataLinguagem = $_POST['dataLinguagem'];


    $stmt = $pdo->prepare("insert into tbLinguagensDeProgramacao values('',' $nomeLinguagem','$historiaLinguagem','$funcionalidade','$cursosLinguagem','$dataLinguagem')");	
    $stmt ->execute();




        header('location: adicionarLinguagem.php');


   


?>