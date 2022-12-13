<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/cadastro.css">
  <title>Cadastro</title>
</head>
<body>
  <div class="container"> 
    <div class="image-form"> <!--DIV DA IMAGEM DO FORM-->
      <img src="img/undraw_personal_info_re_ur1n.svg" alt="login">
    </div>
    <div class="form"> <!--TODO O CONEUDO DO FORM-->
        <form action="controller/servidor.php" method="POST">
          <div class="form-cadastro-cabecalho">

            <div class="titulo-cadastro">
              <h1>Cadastrar</h1>
            </div>

            <div class="login-btn-cad">
              <button><a href="login.php">Login</a></button>
            </div>     

          </div>  
          
          <div class="input-group"> <!--DIV com todos os Inputs-->
            <div class="input-box">
              <label for="nome">Nome:</label>
              <input id="nome" type="text" name="nome" placeholder="Digite seu nome" required>
            </div>
            
            <div class="input-box">
              <label for="sobrenome">Sobrenome:</label>
              <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
            </div>
            
            <div class="input-box">
              <label for="email">Email:</label>
              <input id="email" type="email" name="email" placeholder="Digite seu email" required>
            </div>
            
            <div class="input-box">
              <label for="telefone">Telefone:</label>
              <input id="Telefone" type="tel" name="telefone" placeholder="(XX) XXXXX-XXXX" required>
            </div>            
                     
            <div class="input-box">
              <label for="Gênero">Gênero:</label>
              <input id="Gênero" type="tel" name="CPF" placeholder="Masc/Femin/Outro" required>
            </div>
            
            <div class="input-box">
              <label for="usuario">Usuario:</label>
              <input id="usuario" type="text" name="usuario" placeholder="Escolha seu usuario" >
            </div>

            <div class="input-box">
              <label for="senha">Senha:</label>
              <input id="senha" type="password" name="senha" placeholder="Digite sua senha" >
            </div>

            <div class="input-box">
              <label for="csenha">Confime a senha:</label>
              <input id="csenha" type="password" name="csenha" placeholder="Confirme sua senha" required>
            </div>


            
            
          </div>

          <div class="cadastro-btn">
            <button>Cadastrar</button>
          </div>
       </form>

       
        
        
        
        
    </div>
  </div>
</body>
</html>