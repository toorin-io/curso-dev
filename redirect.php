<!DOCTYPE html>
<html lang="en">
  <head>
      <?php
include("chunks/head/tags.php");

include("chunks/head/meta.php");
?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="1; url = '
                                           <?php
print($link);
?>'" />
    <title>Redirect - Conquiste sua vaga</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  </head>
  <body class="redirect-body">
      <?php
include("chunks/body/tags.php");
include("chunks/body/mautic-pixel.php");
?>
    <section class="redirect">
      <div class="redirect-loading">
        <div></div>
        <div></div>
        <div></div>
      </div>
      <h1 class="redirect-page-title">Você está sendo redirecionado...</h1>
      <img
        class="redirect-image"
        src="images/illustrations/hand-coding.svg"
        alt="ilustração de uma pessoa usando um notebook"
      />
      <p>
        Caso a página não carregue automaticamente, <a href="
<?php
print($link);
?>"
          >clique aqui para acessar</a
        >!
      </p>
    </section>
    <footer class="redirect-footer">
      2023 | CoDe by Pedro Marins
    </footer>
  </body>
</html>
