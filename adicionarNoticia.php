<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Codekitty | Admin</title>
</head>

<body>

    <div class="container">
    <?php include("../conexao.php"); ?>
        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <img src="images/logo.png">
                    <h2>Codekitty</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="admin.php">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Página Inicial</h3>
                </a>
                <a href="usuarios.php">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Usuários</h3>
                </a>
                <a href="adicionarNoticia.php" class="active">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>Adicionar Notícia</h3>
                </a>
                <a href="adicionarLinguagem.php">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>Adicionar Linguagem</h3>
                </a>
                <a href="../index.php">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->

        <!-- Main Content -->
        <main>

            <!-- Recent Orders Table -->
            <div class="recent-orders">

                    <h1>Cadastro de Notícias</h1>

                    <form action="dados-noticia.php" method="post">
                        <p>
                            <label for="">Coloque a url da imagem</label><br>
                            <input type="text" name="imgNoticia">
                        </p>
                        <p>
                            <label for="descricao">Descrição</label><br>
                            <textarea name="descricao" id="" cols="30" rows="10"></textarea>
                        </p>
                        
                        <div class="bntExcluir"><button onclick="">Cadastrar</button>                        
                    </p>
                    </form>

                    <div class="recent-orders">
                <h2>Notícias Cadastradas</h2>
                <table>
                  <tbody>
                    <?php
                    $consulta2 = $pdo->query("SELECT idNoticia, descricao, imgNoticia FROM tbnoticia");
                    while ($linha = $consulta2->fetch()){
                    ?>
                    <tr>
                      <td><?=$linha['idNoticia']?></td>
                      <td><?=$linha['descricao']?></td>
                      <td><img src="<?=$linha['imgNoticia']?>"></td>
                      <td class="btnExcluir"><?php echo"<a href='./excluir/excluir-noticia.php?idNoticia=$linha[idNoticia]'> Excluir </a>";?></td>
                    </tr>
                    <?php
                      }
                    ?>
                      
                    
                  </tbody>
                </table> 
            </div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
            </div>
            <!-- End of Recent Orders -->

        </main>
        <!-- End of Main Content -->

        <!-- Right Section -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Olá, <b>Admin</b></p>
                    </div>
                    <div class="profile-photo">
                        <img src="images/logo.png">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->


    </div>

    <script src="orders.js"></script>
    <script src="index.js"></script>
</body>

</html>