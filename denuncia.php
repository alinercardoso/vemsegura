<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "vemsegura";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("A conexão com o BD falhou: " . mysqli_connect_error());
}

if (isset($_POST['nome']) && isset($_POST['vitima']) && isset($_POST['localizacao']) && isset($_POST['vagao']) && isset($_POST['descricao']) && isset($_POST['telefone'])) {
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/CSS" href="./CSS/estilo.css">
  <script src="../js/script.js"></script>

</head>

<header>
  <nav class="menu">
    <a href="index.html">home</a>
    <a href="leis.html">seus direitos</a>
    <a href="denuncia.php" id="active">denúncia</a>
    <a href="contato.html">contato</a>
    <a href="cadastro.php">cadastre-se</a>
  </nav>
</header>

<body id="body-denuncia">
  <br><br>



  <div class="container">
    <div class="row">
      <div class="col-4 mx-auto pt-4 container-login">
        <h3 id="titulo-denuncia" class="mb-4">Denunciar</h3>
        <form method="post" role="form" action="">
          <div class="form-group-sm">
            <label class="label-form" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome do Denunciante" onkeyup="validar()">
          </div>

          <div class="form-group-sm">
            <label class="label-form" for="vitima">Vítima:</label>
            <input class="form-control" type="text" name="vitima" id="vitima" placeholder="Ex: Eu ou Outros" onkeyup="validar()">
          </div>

          <div class="form-group-sm">
            <label class="label-form" for="localizacao">Localização:</label>
            <input class="form-control" type="text" name="localizacao" id="localizacao" placeholder="Onde ocorreu?" onkeyup="validar()">
          </div>

          <div class="form-group-sm">
            <label class="label-form" for="vagao">Vagão:</label>
            <input class="form-control" type="text" name="vagao" id="vagao" placeholder="Nº do vagão(Opcional)" onkeyup="validar()">
          </div>

          <div class="form-group-sm">
            <label class="label-form" for="descricao">Descrição:</label>
            <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descreva o ocorrido..." onkeyup="validar()">
          </div>

          <div class="form-group-sm">
            <label class="label-form" for="telefone">Telefone:</label>
            <input class="form-control" type="text" name="telefone" id="telefone" placeholder="(00) 00000-0000" onkeyup="validar()">
          </div>

          <br>

          <center>
            <button  type="submit" name="enviar" class="btn btn-secondary-color-dark mb-4" id="enviar_denuncia"> Enviar </button>
          </center>
          

        </form>

      </div>
    </div>
  </div>
  <footer class="rodape2">
    <img id="logo-footer" src="./images/Logo.png" alt="">
  </footer>
</body>

</html>