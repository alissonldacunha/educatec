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
     $query=mysqli_query($con, "insert into supervisor (nome,email, senha, tipo_de_supervisor) value('$nome','$email', '$senha', '$tipo_de_supervisor' )");
    if ($query) {
    echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script > document.location ='../cadastrodesupervisor/index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>

