<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
?>
<?php 
//Databse Connection file
include("../inc/conexao.php");
 	//getting the post values
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $senha = $_POST['senha'];
     $tipo_de_supervisor = $_POST['tipo_de_supervisor'];
if(isset($_POST['submit']))
  {
 
   
  // Query for data insertion
     $query=mysqli_query($con, "INSERT INTO supervisor (nome,email, senha, tipo_de_supervisor) value('$nome','$email', '$senha', '$tipo_de_supervisor' )");
    if ($query) {
    echo "<script>alert('Cadastro efetuado com sucesso!');</script>";
    echo "<script > document.location ='../usuario/index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Cadastro invalido. Por favor tente novamente');</script>";
    }
}
?>

