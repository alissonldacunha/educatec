<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <title>Usuario</title>
   <link rel="stylesheet" href="../css/index.css">
   <link rel="stylesheet" href="usuario.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
<body>

<?php
  session_start();
  $email_super = $_SESSION['email'];
  include("../inc/conexao.php");
  $result = $con->query("SELECT * from aluno where email='$email_super'");

?>
<div class="container">
<?php
while($row = $result->fetch_assoc())
  {?>
  <div class="col-sm">
  <h3>Escolha um usuario</h3>
  <p> <?php $row['nome'] ?> </p>
  <a class="btn btn-danger btn-xs" href="../jogos/index.php?idusuario=<?php echo $row['idaluno']; ?>"><p><?php ECHO $row['nome'] ?> </p></a>
  </div>
  <?php }?>
</div>
<br>
<hr>

<div class="container">
<h3>Ou cadastre um usuario</h3>
  <div class="row">
  <a class="btn btn-primary" href="cadusuario.php">Cadastrar usuario</a>
  </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>