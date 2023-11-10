
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
     <title>Codekitty | Contato</title>
</head>
<body>
  

    <section>
    <?php include("nav.php");?>
    <br>
    <br>
        <form action="dados-contato.php" method="post">
            <div class="main-login">
        <div class="left-login">
            <h1>Entre em contato conosco!</h1><br><br>
            <img src="images/animacaoContato.svg" alt="" class="left-login-img">
        </div><!--div que fecha o left-login-->
        <div class="right-login">
            <div class="card-login">
                <h2>Contato</h2>
            <form action="dados-contato.php" method="post">
            <div class="textfield">
                <label for="nome">Nome</label>
                <input type="text" name="txNome" placeholder="Insira seu nome" />
            <div class="textfield">
                <label for="email">Email</label>
                <input type="text" name="txEmail" placeholder="Insira seu email" />
            </div><!--div que fecha o textfield 1-->
            <div class="textfield">
                <label for="assunto">Assunto</label>
                <input type="text" name="txAssunto" placeholder="Insira o assunto" />
            </div><!--div que fecha o textfield 1-->
                <label for="assunto">Mensagem</label>
                <textarea class="textarea" name="txMensagem" id="" cols="40" rows="3"></textarea>
            </div><!--div que fecha o textfield 1-->
            <div class="textfield">
                <label for="data">Data</label>
                <input type="date" name="Data" placeholder="Quando ocorreu" />
            </div><!--div que fecha o textfield 1-->
            <br>
            <div class="bnt"><button class="btn-login" onclick="">Enviar</button></div>
            </div><!--div que fecha o card-login-->
        </div><!--div que fecha o right-login-->
    </div><!--div que fecha o main login-->
       <?php include('footer.php') ?>
    </section>

    
    <script src="js/contato.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.21/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.21/dist/js/uikit-icons.min.js"></script>
    
</body>
</html>