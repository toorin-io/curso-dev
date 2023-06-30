
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Parabéns pela matrícula!</title>  

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
      <h2 class="text-white highlight text-center">
			Parabéns por se matricular na <span class="highlight text-primary">Imersão Vire Dev!</span>
      </h2>     
      
      <div class="video-box">
			<iframe width="100%" src="https://www.youtube.com/embed/L0AEa9XlZRY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </main>
    
	<?php
    include("chunks/body/vire-dev/fale-conosco.php");
    include("chunks/body/vire-dev/footer.php");
  ?>
</body>    

</html>
