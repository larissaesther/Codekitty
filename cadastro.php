<?php include ("nav.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
     <link rel="stylesheet" href="css/style.css">
     <link rel="shortcut icon" href="image/x-icon.ico" type="image/x-icon">
     <title>Codekitty | Cadastro</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
        <h1>Cadastre-se<br>E entre para o nosso time</h1><br><br>
        <div class="card-login">
                    <h2>Cadastre-se</h2>
                    <form action="dados-login.php" method="post">
                        
                        <div class="textfield">
                            <label for="nome">Nome</label>
                            <input type="text" name="txNome1" placeholder="Nome" />
                        </div>
                        <div class="textfield">
                            <label for="email">E-mail</label>
                            <input type="text" name="txEmail1" placeholder="E-mail" />
                        </div>
                        <div class="textfield">
                            <label for="senha">Senha</label>
                            <input type="password" name="txSenha1" placeholder="Senha" />
                        </div>
                        <div class="bnt"><button class="btn-login" onclick="login()">Cadastrar</button><br><br><h5>Já é cadastrado?</h5><a href="login.php"><h5>Entrar</h5></a></div>
                            
                            
                    </form>
                </div>
            </div>
            <div class="right-login">
                <img src="images/cadastro.svg" alt="" class="left-login-img">
            </div>
        
    </div>

    <script src="js/contato.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</body>
</html>