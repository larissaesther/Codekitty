<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <title>Codekitty | Home</title>
</head>


<body>
<?php include('navUser.php')?>

      <main class="hero container" data-aos="fade-up" data-aos-delay="400">
        <div class="p"><h1>CODEKITTY I LIKE</p></div>
        <p>A Codekitty é uma platarforma voltada ao mundo da tecnologia, aqui você encontra notícias, dicas, feedbacks e muito mais! Venha fazer parte desse time!!</p>
        <a href="#services-content" class="button-contact" target="_blank">Notícias do mundo do T.I</a>
      </main>

<!-- ABOUT -->
  <section id="about">
      <div id="about-content">
        <div data-aos="zoom-in" data-aos-delay="100">
          <img src="images/linguagens.jpg" alt="Imagem sobre a barbearia"/>
        </div>

        <div id="about-description" data-aos="zoom-out-left" data-aos-delay="250">
          <h2>Linguagens</h2>
          <p>Quer saber quais linguagens de programação existem e o nível de dificuldades dela? Veja aqui qual linguagem de programação combina mais com você.</p>
          <p><a id="button" href="linguagens.php">Clique aqui</a></p>
        </div>
      </div>
  </section>
    <?php include('noticias.php')?>
    <?php include('map.php')?>
    <?php include('footer.php')?>

    <script src="js/script.js"></script>
</body>
</html>