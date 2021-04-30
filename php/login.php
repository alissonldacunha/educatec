<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
?>
<?php
//Databse Connection file
include("../inc/conexao.php");

$email= $_POST['email'];
$senha = $_POST['senha'];

if(isset($_POST['submit']))
  {
 
    if ($result = $con->query("SELECT * from supervisor where email='$email' AND senha='$senha'")){
        /* determine number of rows result set */
    $row_cnt = $result->num_rows;

    session_start();
    $_SESSION['email'] = $email;
    echo "<script > document.location ='../usuario/index.php'; </script>";
    }
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }

?>

