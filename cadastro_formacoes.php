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
    <title>Formações</title>
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
    <a class="navbar-brand" href="#"><?= $_SESSION['nome']?> - Cadastrar Formações</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="nav navbar-nav d-flex justify-content-end" id="links">
        <li class="nav-item active">
          <a class="nav-link text-dark" href="cadastro_formacoes.php">Cadastrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="atualizar_formacoes.php">Atualizar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deletar_formacoes.php">Deletar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="consultar_formacoes.php">Consultar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="painel.php">Sair</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container-fluid">
      <?php include_once("acoes/notificacao.php");  ?>
    </div>
<div class="teste container-fluid text-center">
    
    <form action="acoes/criar_formacoes.php" method="POST" class="needs-validation container" novalidate>
    <div class="row">
    <div class="col-12">
        <label for="nome_curso" class="form-label">Nome Curso</label>
        <input type="text" name="nome_curso" id="nome_curso" class="form-control" placeholder="Digite seu nome completo" required>
        <div class="invalid-feedback">
          Digite o nome do curso
        </div>
    </div>
    <div class="col-md-6">
        <label for="nivel" class="form-label">Nível</label>
        <input type="text" name="nivel" id="nivel" class="form-control" placeholder="Digite seu nome completo" required>
        <div class="invalid-feedback">
          Digite o nível
        </div>
    </div>
    <div class="col-md-6">
        <label for="instituicao" class="form-label">Instituição</label>
        <input type="text" name="instituicao" id="instituicao" class="form-control" placeholder="Digite seu nome completo" required>
        <div class="invalid-feedback">
          Digite a instituição
        </div>
    </div>
    <div class="col-md-6">
        <label for="ano_inicio" class="form-label">Ano Início</label>
        <input type="text" name="ano_inicio" id="ano_inicio" class="form-control" placeholder="Digite seu nome completo" required>
        <div class="invalid-feedback">
          Digite o ano de início do curso
        </div>
    </div>
    <div class="col-md-6">
        <label for="ano_fim" class="form-label">Ano Termino</label>
        <input type="text" name="ano_fim" id="ano_fim" class="form-control" placeholder="Digite seu nome completo" required>
        <div class="invalid-feedback">
          Digite o ano de termino do curso
        </div>
    </div>
    <div class="col-md-6">
        <label for="situacao" class="form-label">Situação</label>
        <select name="situacao" id="situacao" class="form-select" required>
        <option value="concluido">Concluido</option>
        <option value="Andamento">Andamento</option>
    </select>
        <div class="invalid-feedback">
          Informe a situação do curso
        </div>
    </div>
    <div class="col-md-6">
        <label for="valor" class="form-label">Valor do Curso</label>
        <input type="number" name="valor" step="0.01" id="valor" class="form-control" placeholder="Digite seu nome completo" required>
        <div class="invalid-feedback">
          Digite o valor do curso
        </div>
    </div>
    </div>
   
    <div>
        <button class="m-4 btn btn-primary" name="bt_cadformacao" type="submit">Cadastrar</button>
    </div>
    </form>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/form-validation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</body>
</html>