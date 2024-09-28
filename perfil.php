<?php
  session_start();
  include_once('acoes/verificar_logado.php');
  include_once('acoes/consultar_usuario.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <!--Uso do Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/form-validation.css">
</head>
<body>
    <!--Menu de navegação-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><?= $_SESSION['nome']?></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="nav navbar-nav d-flex justify-content-end" id="links">
        <li>
          <a href="painel.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="teste container-fluid text-center">
    <h3>Quem sou eu?</h3>
    <img src="<?php
      if($_SESSION['foto'] == "" || $_SESSION['foto'] == null){
        echo "img/foto-perfil.jpg";
      }else{
        echo "fotos/".$_SESSION['foto'];
      }
    
     ?>" alt="Foto de Perfil" width="200" class="img-fluid img-redonda">
    <form action="acoes/atualizar_usuario.php" enctype="multipart/form-data" method="POST" class="needs-validation container" novalidate>
    <input type="file" name="foto" id="foto">
    <div class="row">
    <div class="col-sm-12">
        <label for="nome" class="form-label">Nome Completo</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?= $_SESSION['nome']?>" placeholder="Digite seu nome completo" required>
        <div class="invalid-feedback">
          Informe o seu nome completo
        </div>
    </div>
    <div class="col-sm-4">
        <label for="nacionalidade" class="form-label">Nacionalidade</label>
        <input type="text" name="nacionalidade" id="nacionalidade" value="<?= $_SESSION['nacionalidade']?>" class="form-control" required>
        <div class="invalid-feedback">
          Informe sua nacionalidade
        </div>
    </div>
    <div class="col-sm-4">
    <label for="estado_civil" class="form-label">Estado Civil</label>
    <select name="estado_civil" id="estado_civil" class="form-select" required>
        <option value="<?= $_SESSION['estado_civil']?>"><?= $_SESSION['estado_civil']?></option>
        <option value="solteiro">Solteito(a)</option>
        <option value="casado">Casado(a)</option>
        <option value="Divorciado">Divorciado(a)</option>
    </select>
    </div>
    <div class="col-sm-4">
      <label for="data" class="form-label">Data Nascimento</label>
      <input type="date" name="data" id="data" value="<?= $_SESSION['data_nasc']?>" class="form-control" required>
      <div class="invalid-feedback">
          Informe sua idade
        </div>
    </div>
    <div class="col-sm-12">
    <label for="endereco" class="form-label">Endereço Completo</label>
    <input type="text" name="endereco" id="endereco" value="<?= $_SESSION['endereco']?>" class="form-control" placeholder="Bairro: X, Rua: Y, Número: Z, Cidade: ..." required>
    <div class="invalid-feedback">
          Informe o seu Endereço
        </div>
    </div>
    <div class="col-sm-6">
    <label for="celular" class="form-label">Celular</label>
    <input type="text" name="celular" id="celular" value="<?= $_SESSION['celular']?>" class="form-control" placeholder="(99) 99999-9999" required>
    <div class="invalid-feedback">
          Informe o seu telefone
        </div><!--Importando o jquery direto do site através dos links-->
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <script type="text/javascript">
          $("#celular").mask("(00) 00000-0000");
        </script>
    </div>
    <div class="col-sm-6">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" name="email" id="email" value="<?= $_SESSION['email']?>" class="form-control" placeholder="fulano@provedor.com" required>
    <div class="invalid-feedback">
          Digite  o seu email atualizado
        </div>
    </div>
    </div>
   
    <div>
        <button class="m-4 btn btn-primary" name="bt_atualizar" type="submit">Atualizar</button>
    </div>
    </form>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/form-validation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</body>
</html>