<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
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
                <a href="adicionarNoticia.php">
                    <span class="material-icons-sharp">
                        add
                    </span>
                    <h3>Adicionar Notícia</h3>
                </a>
                <a href="adicionarLinguagem.php" class="active">
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
        
        <!-- Main Content -->
        <main>

            <!-- Recent Orders Table -->
            <div class="recent-orders">

                    <h1>Cadastrar Linguagem</h1>

                    <form action="dados-linguagens.php" method="post">
                        <p>
                            <label for="nome">Nome da Linguagem:</label><br>
                            <input type="text" name="txNomeLinguagem"">
                        </p>

                        <p>
                            <label for="historia">Historia</label><br>
                            <textarea name="txHistoriaLiguagem" id="" cols="30" rows="10"></textarea>
                        </p>

                        <p>
                            <label for="funcao">Funcionalidade</label><br>
                            <input type="text" name="txFuncionalidadeLinguagem">
                        </p>

                        <p>
                            <label for="cursos">Cursos</label><br>
                            <input type="text" name="txCursosLinguagem">
                        </p>

                        <p>
                            <label for="data">Data</label><br>
                            <input type="date" name="txdataLinguagem">
                        </p>

                        <p>
                        <div class="bntExcluir"><button onclick="">Cadastrar</button>                        </p>
                    </form>

                    <div class="recent-orders">
                <h2>Linguagens Cadastradas</h2>
                <table>
                  <tbody>
                    <?php
                    $consulta2 = $pdo->query("SELECT idLinguagensDeProgramacao, nomeLinguagem, historiaLinguagem, funcionalidadeLiguagem, cursosLinguagem, dataLinguagem FROM tblinguagensdeprogramacao");
                    while ($linha = $consulta2->fetch()){
                    ?>
                    <tr>
                      <td><?=$linha['idLinguagensDeProgramacao']?></td>
                      <td><?=$linha['nomeLinguagem']?></td>
                      <td><?=$linha['historiaLinguagem']?></td>
                      <td><?=$linha['funcionalidadeLiguagem']?></td>
                      <td><?=$linha['cursosLinguagem']?></td>
                      <td><?=$linha['dataLinguagem']?></td><br><br>
                      <td class="btnExcluir"><?php echo"<a href='./excluir/excluir-contato.php?idContato=$linha[idContato]'> Excluir </a>";?></td>                    </tr>
                    <?php
                      }
                    ?>
                      
                    
                  </tbody>
                </table> 
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
                        <img src="images/lari.p">
                    </div>
                </div>

            </div>
            <!-- End of Nav -->

    </div>

    <script src="orders.js"></script>
    <script src="index.js"></script>
</body>

</html>