<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <title>Educatec</title>
   <link rel="stylesheet" href="css/index.css">
  </head>
<body>
   
   
<div class="sidenav">
   <div class="login-main-text">
      <h2>Educatec<br> Login</h2>
   <p>Entre ou registre-se para acessar a plataforma</p>
   </div>
</div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
            <h2>Entrar<br> </h2>
               <form action="php/login.php" method="post">
                  <div class="form-group">
                     <label>E-Mail</label>
                     <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                  </div>
                  <div class="form-group">
                     <label>Senha</label>
                     <input type="password" class="form-control" placeholder="Senha" name="senha" required>
                  </div>
                  <input type="submit" value="Entrar" name="submit" class="btn btn-primary">

                  <br>
                  <a href="cadastrodesupervisor/" class="btn btn-link">Não tem uma conta? Registre-se</a>
               </form>
            </div>
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