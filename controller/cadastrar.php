<?php
session_start();
include("conexao.php");

$nome = $mysqli -> real_escape_string(trim($_POST['nome']));
$sobrenome = $mysqli -> real_escape_string(trim($_POST['sobrenome']));
$email = $mysqli -> real_escape_string(trim($_POST['email']));
$telefone = $mysqli -> real_escape_string(trim($_POST['telefone']));
$genero = $mysqli -> real_escape_string(trim($_POST['genero']));
$usuario = $mysqli -> real_escape_string(trim($_POST['usuario']));
$senha = $mysqli -> real_escape_string(trim($_POST['senha']));
$rsenha = $mysqli -> real_escape_string(trim($_POST['rsenha']));
$sql = "SELECT COUNT(*) AS total FROM usuarios WHERE usuario = '$usuario'";
$resultado = mysqli_query($mysqli,$sql);
$row = mysqli_fetch_assoc($resultado);

  if($row['total']==1){
    $_SESSION['usuario_em_uso'];
    header('Location: ../cadastro.php');
    exit();
  }

$sql = "INSERT INTO usuarios (nome,sobrenome,email,telefone,genero,usuario,senha,rsenha,data_cadastro)
 VALUES ('$usuario','$sobrenome','$email','$telefone','$genero','$usuario','$senha','$rsenha',NOW())";

  if($mysqli->query($sql)===true){
    $_SESSION['status_cadastro']= true;
  }

  $mysqli->close();
  header('Location:../login.php');
  exit();
  
?>