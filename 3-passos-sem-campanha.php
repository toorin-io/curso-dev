<!DOCTYPE html>
<html lang="pt-BR">
<head>

	<title>Cadastre-se para receber mais materiais sobre como Conquistar Sua Vaga!</title>

	<?php
		include("chunks/head/tags-head.php");
		include("chunks/head/meta-aula-encerrada.php");
	?>
    
	<link rel="stylesheet" type="text/css" href="css/vire-dev.css" />		
  
</head>

<body>    
	<?php
	include("chunks/body/tags-body.php");
	?>

<main class="hero hero-dark-blue">
    <div class="hero-overlay hero-overlay-flex content">    
      <div>      
        <h2 class="text-white highlight">ACESSO À AULA GRATUITA ENCERRADO!</h2>    
        <h3 class="subheadline text-gray-400">Inscreva-se para ter acesso a mais materiais sobre como conquistar sua vaga</h3>                
      </div>

      <div>
				<?php
					include("chunks/body/ac-form-em-breve.php");
				?>
			</div>
    </div>
  </main>
	
  <?php        
    include("chunks/body/vire-dev/fale-conosco.php");      
    include("chunks/body/vire-dev/footer.php");    
  ?>     
    
</body>
</html>