
<?php include ("nav.php")?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF=8">
     <link rel="stylesheet" href="css/style.css"/>
     <link rel="shortcut icon" href="image/x-icon.ico" type="image/x-icon"/>
     <title>Codekitty | Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Entre como administrador</h1>
            <img src="images/animacaoLogin.svg" alt="" class="left-login-img"/>
        </div><!--div que fecha o left-login-->
        <div class="right-login">
            <div class="card-login">
                <h2>Login</h2>
            <form action="../user.php" method="post">
            <div class="textfield">
                <label for="email">E-mail</label>
                <input type="text" name="txEmail" placeholder="E-mail" />
            </div><!--div que fecha o textfield 1-->
            <div class="textfield">
                <label for="senha">Senha</label>
                <input type="password" name="txSenha" placeholder="Senha" />
            </div><!--div que fecha o textfield 2-->
            <br>
            <div class="bnt"><button class="btn-login" onclick="login()">Entrar</button><br><br><h5>Ainda não é cadastrado?</h5><a href="cadastro.php"><h5>Cadastre-se</h5></a></div>
            </form>
            </div><!--div que fecha o card-login-->
        </div><!--div que fecha o right-login-->
    </div><!--div que fecha o main login-->
    
</body>