<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Codekitty | Notícias</title>
</head>
<body>
  <!-- SERVICES -->

  <section class="services">
    
      <div id="services-content">
        <h1>Notícias</h1><br>
      </div>

      <section id="haircuts">

        <?php
          include("conexao.php");
          $consulta = $pdo->query("SELECT * FROM tbnoticia");
          while ($linha = $consulta->fetch()) {
        ?>

          <div class="haircut" data-aos="fade-up" data-aos-delay="150">
              <img src="<?=$linha['imgNoticia']?>" alt=""/>
              <div class="noticias">
                <strong><?=$linha['descricao']?></strong>
                <button>Veja mais</button>
              </div>
          </div>

          <?php
          }
          ?>

      </section>

  </section>
</body>
</html>