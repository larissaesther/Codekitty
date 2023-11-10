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
                <a href="admin.php"  class="active">
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
            <h1>Análise</h1>
            <!-- Analyses -->
            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Novos usuários</h3>
                            <h1>65</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+81%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Visitas ao site</h3>
                            <h1>24,981</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>-48%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Mensagens</h3>
                            <h1>147</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>+21%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analyses -->

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
                <h2>Novas mensagens</h2>
                <table>
                  <tbody>
                    <?php
                    include('../conexao-contato.php');
                    $consulta2 = $pdo->query("SELECT idContato, nome, email, assunto, mensagem, data_criacao FROM tbcontato");
                    $stmt = $pdo->prepare("select * from tbcontato");	
                    $stmt ->execute();
                    while ($linha = $consulta2->fetch()){
                    ?>
                    <tr>
                      <td><?=$linha['idContato']?></td>
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

            <div class="user-profile">
                <div class="logo">
                    <img src="images/logo.png">
                    <h2>Codekitty</h2>
                    <p>Site de DS</p>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Lembretes</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Workshop</h3>
                            <small class="text_muted">
                                08:00 AM - 12:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Adicionar Lembrete</h3>
                    </div>
                </div>

            </div>

        </div>


    </div>

    <script src="orders.js"></script>
    <script src="index.js"></script>
</body>

</html>