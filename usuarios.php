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
                <a href="usuarios.php" class="active">
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
            <!-- New Users Section -->
            <div class="new-users">
                <h2>Novos Usuários</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="images/sasa.jpg">
                        <h2>Sabrina</h2>
                        <p>Há 2 minutos</p>
                    </div>
                    <div class="user">
                        <img src="images/momo.jpg">
                        <h2>Monique</h2>
                        <p>Há 54 minutos</p>
                    </div>
                    <div class="user">
                        <img src="images/isa.jpg">
                        <h2>Isabel</h2>
                        <p>Há 3 horas</p>
                    </div>
                    <div class="user">
                        <img src="images/ludi.jpg">
                        <h2>Ludimylla</h2>
                        <p>Novo usuário</p>
                    </div>
                </div>
            </div>
            <!-- End of New Users Section -->

            <!-- Recent Orders Table -->
            <div class="recent-orders">
                <h2>Contato</h2>
                <table>
                  <tbody>
                    <?php
                    include('../conexao-contato.php');
                    $consulta2 = $pdo->query("SELECT idContato, nome, email, assunto, mensagem, data_criacao FROM tbcontato");
                    while ($linha = $consulta2->fetch()){
                    ?>
                    <tr>
                      <td><?=$linha['nome']?></td>
                      <td><?=$linha['email']?></td>
                      <td><?=$linha['assunto']?></td>
                      <td><?=$linha['mensagem']?></td>
                      <td><?=$linha['data_criacao']?></td>
                      <td><?php echo"<a href='./excluir/excluir-contato.php?idContato=$linha[idContato]'> Excluir </a>";?></td>
                    </tr>
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