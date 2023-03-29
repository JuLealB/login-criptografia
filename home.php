<?php

  require "./ler.php";

  $usuarios = realizarLeitura();
  $usuarios = json_decode($usuarios);
  
?>

<!DOCTYPE>
<html>
  <head>
    <title>Logado!</title>
    <link rel='stylesheet' type='text/css' href='./style.css'>
  </head>
  <body><div class="bloco">
         <?php if (isset($_POST['login'])): ?>
  <h1 class="titulo">Bem-vindo(a) <?php echo $_POST['login']; ?>!</h1>
    <?php endif; ?>
<p class="token">
  Token de acesso: <?php echo $_POST["token"]; ?>
</p>
<div class="h1">



  </div>
  </div>
  </body>
</html>


