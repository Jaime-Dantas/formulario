<?php
  include('controller/conexao.php');
    if(isset($_POST['usuario']) || isset($_POST['senha'])){
      if(isset($_POST['usuario']) == 0){
        echo('Preencha seu usuario!');
      }else if(isset($_POST['senha']) == 0){
        echo('Preencha sua senha');
      } else {
        $usuario = $mysqli -> real_escape_string($_POST['usuario']);
        $senha = $mysqli -> real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die('falha na conexão SQL' . $mysqli->error);

        $quantidade = $sql_query -> num_rows;

          if($quantidade == 1){
            $usuario = $sql_query -> fetch_assoc();
              if(!isset($_SESSION)){
                session_start();
              }
              $_SESSION['usuario'] = $usuario['usuario'];
              $_SESSION['nome'] = $usuario['nome'];
              header('Location: painelusuario.php');

          }else{
            echo 'Falha ao logar';
          }
      }
    } 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/estilos.css">
  <title>Login</title>
</head>
<body>
  <div class="container"> 
    <div class="image-form"> <!--DIV DA IMAGEM DO FORM-->
      <img src="img/undraw_login_re_4vu2.svg" alt="login">
    </div>
    <div class="form"> <!--TODO O CONEUDO DO FORM-->
        <form action="" method="POST">
          <div class="form-login-cabecalho">
            <div class="titulo-login">
              <h1>Login</h1>
            </div>            
          </div>  
          
          <div class="input-group"> <!--DIV com todos os Inputs-->
            <div class="input-box">
              <input id="usuario" type="text" name="usuario" placeholder="Entre com o usuario" >
            </div>
            
            <div class="input-box">
              <input id="senha" type="password" name="senha" placeholder="digite sua senha" >
            </div>
            
            <div class="input-box">
              <input id="confirm" type="checkbox" name="lembrar">
              <label for="senha">Continuar logado</label>
            </div>
          </div>

          <div class="login-btn">
            <button>Entrar</button>
          </div>
       </form>

       <div class="footer">
        
        
        
        <div class="btn-cadastro">
          <span>Não possue uma conta?</span>
          <br>
          <button><a href="cadastro.php">Cadastre-se</a></button>
        </div>
        </div>
    </div>
  </div>
  

</body>
</html>