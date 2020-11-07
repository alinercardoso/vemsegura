<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "vemsegura";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("A conexão com o BD falhou: " . mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['cpf']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['senha'])  ){
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "insert into tb_cadastros (nome, cpf, endereco, telefone, email, senha) values ('$nome', '$cpf', '$endereco', '$telefone', '$email', '$senha')";
        $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Denuncia</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/CSS" href="./CSS/estilo.css">
  <script src="../js/script.js"></script>

</head>

<header>
  <nav class="menu">
    <a href="index.html">home</a>
    <a href="leis.html">seus direitos</a>
    <a href="denuncia.php">denúncia</a>
    <a href="contato.html">contato</a>
    <a href="cadastro.php" id="active">cadastre-se</a>
  </nav>
</header>

<body id="body-denuncia">
   <br><br>

   
    
     <div  class="container">
        <div class="row">
           <div class="col-4 mx-auto pt-4 container-login">
               <h3 id="titulo-denuncia" class="mb-4">Cadastrar</h3>       
               <form action="" role="form" method="post">
                  <div class="form-group-sm">   
                    <label for="nome">Nome:</label>
                    <input type="test" name="nome" class="form-control" id="nome" placeholder="Nome do denunciante" onkeyup="valida_campos()">      
                  </div> 

                  <div class="form-group-sm">           
                    <label class="label-form" for="cpf">Cpf:</label>
                    <input class="form-control" type="text" name="cpf" id="cpf"  placeholder="000.000.000-00"  onkeyup="valida_campos()">
                  </div>

                  <div class="form-group-sm">           
                    <label class="label-form" for="endereco">Endereco:</label>
                    <input class="form-control" type="text" name="endereco" id="endereco"  placeholder="Rua nº,Bairro,Cidade-UF" onkeyup="valida_campos()">
                  </div>
                  
                  <div class="form-group-sm">           
                    <label class="label-form" for="telefone">Telefone:</label>
                    <input class="form-control" type="text" name="telefone" id="telefone"  placeholder="(00) 00000-0000"   onkeyup="valida_campos()">
                  </div>

                  <div class="form-group-sm">           
                    <label class="label-form" for="email">Email:</label>
                    <input class="form-control" type="text" name="email" id="email" aria-describedby="ajudaEmail" placeholder="email" onkeyup="valida_campos()">
                  </div>

                  <div class="form-group-sm">           
                    <label class="label-form" for="senha">Senha:</label>
                    <input class="form-control" type="password" name="senha" id="senha"  placeholder="Senha" onkeyup="valida_campos()">
                  </div> 
                  <br>
                  <center>
                  <button type="submit" name="cadastrar" class="btn btn-secondary-color-dark mb-4" id="cadastrar_usuario"> Enviar </button> 
                  </center>     
               </form>
   
            </div>
         </div>
      </div>
  <footer class="rodape2">
    <img id="logo-footer" src="./images/Logo.png" alt="">
  </footer>
</body>


