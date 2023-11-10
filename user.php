<?php
include('conexao-contato.php');

if (isset($_POST['txEmail']) && isset($_POST['txSenha'])) {
    $email = $_POST['txEmail'];
    $password = $_POST['txSenha'];

    $consulta = $pdo->query("SELECT idLogin FROM tblogin WHERE emailLogin ='$email' AND senhaLogin ='$password'");

    while( $linha = $consulta->fetch()){
        $id = $linha['idLogin'];
    }


    if(isset($id)) {
        session_start();
        $_SESSION['user'] = 2;
        header('Location: ./indexUser.php'); 
    } else if ($email === 'codekitty@admin.com' && $password === 'codekitty123') {
        session_start();
        $_SESSION['admin'] = 1;
        header('Location: ./admin/admin.php');
    } else {
        session_start();
        echo  "<script>alert('Dados incorretos');</script>";
        header('Location: login.php');
    }
}
?>
