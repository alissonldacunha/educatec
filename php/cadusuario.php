<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
?>
<?php 
//Databse Connection file
include("../inc/conexao.php");
 	//getting the post values
     session_start();
     $email_super = $_SESSION['email'];
     $nome = $_POST['nome'];
     $tipo_de_deficiencia = $_POST['possui_autismo'];
     $classe_escolar = $_POST['classe_escolar'];
     $temas = $_POST['temas'];
     $email = $email_super;
if(isset($_POST['submit']))
  {
 
    $result = $con->query("SELECT * from supervisor where email='$email_super'");
   $dado = mysqli_fetch_array($result);
   $id = $dado['idsupervisor'];
    // echo $id;
  // Query for data insertion
    $query=mysqli_query($con, "INSERT INTO aluno (nome, tipo_de_deficiencia, classe_escolar, temas, email) value('$nome', '$tipo_de_deficiencia', '$classe_escolar', '$temas', '$email' )");
    $idaluno = mysqli_insert_id($con);
   
    if ($query){
      $query=mysqli_query($con, "INSERT INTO supervisor_has_aluno (supervisor_idsupervisor, aluno_idaluno) value ('$id', '$idaluno')");
      if($query)
      {
        echo "<script>alert('Cadastro efetuado com sucesso!');</script>";
        echo "<script > document.location ='../usuario/index.php'; </script>";
      }
      else 
      {
        echo "<script>alert('Cadastro invalido. Por favor tente novamente');</script>";
        echo "<script > document.location ='../usuario/cadusuario.php'; </script>";
      }
    }
    else
    {
      echo "<script>alert('Cadastro invalido. Por favor tente novamente');</script>";
      echo "<script > document.location ='../usuario/cadusuario.php'; </script>";
    }
    
  }
  else
    {
      echo "<script>alert('Cadastro invalido. Por favor tente novamente');</script>";
      echo "<script > document.location ='../usuario/cadusuario.php'; </script>";
    }

?>