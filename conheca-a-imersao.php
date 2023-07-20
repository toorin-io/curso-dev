<?php
$utm_source = isset($_GET['utm_source'])?$_GET['utm_source'] : null;
$utm_medium = isset($_GET['utm_medium'])?$_GET['utm_medium'] : null;
$utm_campaign = isset($_GET['utm_campaign'])?$_GET['utm_campaign'] : null;
$utm_term = isset($_GET['utm_term'])?$_GET['utm_term'] : null;
$utm_content = isset($_GET['utm_content'])?$_GET['utm_content'] : null;
?>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, viewport-fit=cover"
  />

  <title>Descubra os 3 passos para ser o dev desejado pelo mercado!</title>
  <?php
    include("chunks/head/tags-head.php");
    include("chunks/head/meta-aula.php");
  ?>
  <link rel="stylesheet" type="text/css" href="css/vire-dev.css" />
</head>

<body>
  <?php
    include("chunks/body/tags-body.php");
  ?>

  <main id="cadastro" class="hero hero-dark-blue">
    <div class="hero-overlay hero-overlay-conheca content">
    
      <div>      
        <h2 class="text-white highlight">
          SE CADASTRE PARA RECEBER MEUS CONTEÚDOS PARA <span class="text-primary highlight">COMEÇAR SUA CARREIRA COMO DEV!</span>          
        </h2>    

        <h3 class="subheadline text-gray-400">Inscreva-se agora para assistir à aula ao vivo gratuita!</h3>

        <div>
          <?php
						include("chunks/body/ac-form-em-breve.php");
					?>
        </div>
        
      </div>

      <div>
        <img src="images/pedromarins-transparent.png">
      </div>
    </div>
  </main>

  <section class="container-blue text-gray-200">
    <div class="content">
      
      <h2 class="highlight text-white">Pare de achar que vagas não são para você...</h2>
      <p class="subheadline text-gray-400">
      Você precisa descobrir os maiores erros que impedem desenvolvedores em formação de conseguir sua vaga no mercado!
      </p>

      <a href="#cadastro" class="cta-button">
        Eu quero
      </a>
    </div>
  </section>

  <section class="container-light-gray text-gray-200">
  <div class="content">    
    <h2 class="title text-primary">Quando Vira Dev, você:</h2>
    <div class="icon-boxes">
      <div class="icon-box-v">
        <i class="fa-solid fa-comments-dollar text-gray-700"></i>
        <span class="text-xl text-gray-800">Para de enviar currículos sem nunca receber respostas!</p>
      </div>
      
      <div class="icon-box-v">
        <i class="fas fa-laptop-code text-gray-700"></i>
        <span class="text-xl text-gray-800">
          Sabe como ser contratado como dev sem nunca ter trabalhado na área!
        </p>
      </div>
      <div class="icon-box-v">
        <i class="fas fa-graduation-cap text-gray-700"></i>
        <span class="text-xl text-gray-800">
        Descobre os segredos do mercado que os cursos não ensinam!
        </p>
      </div>
      
    </div>
  </div>
</section>

  <section class="container-white text-gray-800">
  <i class="fa-solid fa-code text-gray-400 text-3xl"></i>
  <div class="content">    
    <div class="flex-wrapper">
      <img class="expert-avatar" src="images/pedromarins.jpg" />
      <div class="expert-right text-gray-800">
        <h2 class="title">Faaaaala! Eu sou o <span class="title text-primary">Pedro Marins!</span></h2>
        <p class="text">
        Comecei a trabalhar como dev <strong class="text">há 15 anos</strong> e hoje também atuo como professor na Alura e no Ibmec.
        <strong class="text">Sou MBA em Gestão de Conhecimento e Negócios pela COPPE/UFRJ,</strong> e tenho minha empresa de desenvolvimento de software, onde sou criador de negócios inovadores.
        </p>

        <p class="text">
        Depois de trabalhar em uma centena de projetos, montar dezenas de equipes e entrevistar mais de mil pessoas, chegou a hora de mostrar como eu construí minha carreira e ajudar você a conquistar sua vaga também!
        </p>

        <p class="text">
          <strong class="text">Minha missão</strong> é ajudar quem <strong class="text">deseja começar na carreira de dev</strong> a se preparar para <strong class="text text-primary">se transformar em um dev desejado pelo mercado!</strong>
        </p>
      </div>
    </div>

    <a href="#cadastro" class="cta-button">
      Eu quero
    </a>
  </div>
</section>

  <?php        
    include("chunks/body/vire-dev/fale-conosco.php");      
    include("chunks/body/vire-dev/footer.php");    
  ?>     



</body>
</html>
