<?php
 include('controller/validar.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel</title>
</head>
<body>
      <h1>Bem-Vindo, <?php echo $_SESSION['nome']; ?></h1>
      <a href="controller/logout.php">sair</a>
</body>
</html>