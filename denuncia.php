<?php
    $servername = "localhost";
    $username = "root";
    $password = "027359";
    $database = "vemsegura";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("A conexão com o BD falhou: " . mysqli_connect_error());
    }

    if(isset($_POST['nome']) && isset($_POST['vitima']) && isset($_POST['localizacao']) && isset($_POST['vagao']) && isset($_POST['descricao']) && isset($_POST['telefone'])){
        $nome = $_POST['nome'];
        $vitima = $_POST['vitima'];
        $localizacao = $_POST['localizacao'];
        $vagao = $_POST['vagao'];
        $descricao = $_POST['descricao'];
        $telefone = $_POST['telefone'];

        $sql = "insert into tb_denuncia (nome, vitima, localizacao, vagao, descricao, telefone) values ('$nome', '$vitima', '$localizacao', '$vagao', '$descricao', '$telefone')";
        $result = $conn->query($sql);
    }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Denuncia</title>
    <link rel="stylesheet" type="text/css" href="../css/estilo.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="../js/script.js"></script>

<body>
   <br><br>

   
    
     <div  class="container">
        <div class="row">
           <div class="col-4 mx-auto pt-4 container-login">
               <h3 class="mb-4">Denunciar</h3>       
               <form method="post" role="form" action="">
                  <div class="form-group-sm">           
                    <label class="label-form" for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome" placeholder="nome do denunciante"  onkeyup="validar()">
                  </div> 

                  <div class="form-group-sm">           
                    <label class="label-form" for="vitima">Vítima:</label>
                    <input class="form-control" type="text" name="vitima" id="vitima" placeholder="Ex:Eu ou Outros"  onkeyup="validar()">                   
                  </div>

                  <div class="form-group-sm">           
                    <label class="label-form" for="localizacao">Localização:</label>
                    <input class="form-control" type="text" name="localizacao" id="localizacao"  placeholder="Onde ocorreu?" onkeyup="validar()">
                  </div>
                  
                  <div class="form-group-sm">           
                    <label class="label-form" for="vagao">Vagão:</label>
                    <input class="form-control" type="text" name="vagao" id="vagao"  placeholder="nº do vagão(Opcional)"   onkeyup="validar()">
                  </div>

                  <div class="form-group-sm">           
                    <label class="label-form" for="descricao">Descrição:</label>
                    <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descreva o ocorrido..." onkeyup="validar()">
                  </div>

                  <div class="form-group-sm">           
                    <label class="label-form" for="telefone">Telefone:</label>
                    <input class="form-control" type="text" name="telefone" id="telefone"  placeholder="(00) 00000-0000" onkeyup="validar()">
                  </div> 

                  <br>  
                  <button type="submit" name="enviar" class="btn btn-success mb-4" id="enviar_denuncia"> Enviar </button>
                  
               </form>
   
            </div>
         </div>
      </div>
</body>