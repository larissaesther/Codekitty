<?php

    $nome = $_POST['txNome1'];
    $email = $_POST['txEmail1'];
    $senha = $_POST['txSenha1'];

    
   


    include("conexao-contato.php");

    $stmt = $pdo->prepare("insert into tbLogin values(null,'$nome','$email','$senha')");	
    $stmt ->execute();

    header('location:login.php');


?>

    
<?php
        $stmt = $pdo->prepare("select * from tbLogin");	
        $stmt ->execute();
        
        while($row = $stmt->fetch(PDO::FETCH_BOTH)){       
            echo $row["idLogin"];						
            echo $row[1];						
            echo $row[2];						
            echo $row[3];											
            echo "<br />";      
        }	?>