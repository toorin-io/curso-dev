<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Parabéns por se inscrever para participar da aula ao vivo!</title>
  <?php
include("chunks/head/tags-head.php");
include("chunks/head/meta-imersao.php");
?>
  <link rel="stylesheet" type="text/css" href="css/vire-dev.css" />
</head>

<body>
  <?php
include("chunks/body/tags-body.php");
?>
  <main class="hero hero-dark-blue">
    <div class="hero-overlay content">
      <h2 class="text-white title text-center">
        Você está inscrito para a aula que acontecerá na <span class="text-center title text-primary">segunda-feira, às
          7 horas da noite!</span></h2>
      <div class="video-box">
        <iframe width="100%" src="https://www.youtube.com/embed/uH91xgjUumE" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
      </div>
    </div>
  </main>

  <section class="container-dark-blue">
    <div class="content flex-wrapper">
      <a href="https://www.viredev.com.br/whatsapp-grupo-ao-vivo">
        <div class="icon-box-v">
          <h3 class="subtitle text-primary">Passo 1</h3>
          <i class="fa-brands fa-whatsapp text-white"></i>
          <p class="text text-gray-200">
            Não esqueça da aula! Receba o link no seu WhatsApp <span class="text-primary text">clicando aqui!</span>
          </p>
        </div>
      </a>
      <a href="https://www.viredev.com.br/aula">
        <div class="icon-box-v">
          <h3 class="subtitle text-primary">Passo 2</h3>
          <i class="fa-solid fa-bullhorn text-white"></i>
          <p class="text text-gray-200">
            Assista agora à aula com a <span class="text-primary text">estratégia dos 3 passos</span> para começar sua
            carreira como dev!
          </p>
        </div>
      </a>
    </div>
  </section>
  <?php
include("chunks/body/vire-dev/fale-conosco.php");
include("chunks/body/vire-dev/footer.php");
?>
</body>

</html>