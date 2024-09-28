<?php
  session_start();
  include_once('acoes/verificar_logado.php');
  include_once('acoes/consultar_usuario.php');
  include_once('acoes/conexao.php');
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
    <a class="navbar-brand" href="#"><?= $_SESSION['nome']?> - Consultar Formações</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="nav navbar-nav d-flex justify-content-end" id="links">
        <li class="nav-item">
          <a class="nav-link" href="cadastro_formacoes.php">Cadastrar</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="atualizar_formacoes.php">Atualizar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="deletar_formacoes.php">Deletar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="consultar_formacoes.php">Consultar</a>
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
    <div class="container-fluid m-3">
    <form action="consultar_formacoes.php" method="POST">
        <div class="row">
            <div class="col-6 mt-2">
                <input type="text" name="nome_curso" id="nome_curso" class="form-control" placeholder="Nome do Curso">
                <div class="invalid-feedback">
                Digite o nome do curso
                </div>
            </div>
            <div class="col-6 mt-2">
                <input type="text" name="instituicao" id="instituicao" class="form-control" placeholder="Instituição">
                <div class="invalid-feedback">
                Digite a instituicao
                </div>
            </div>
            <div class="col-6 mt-2">
                <input type="text" name="nivel" id="nivel" class="form-control" placeholder="Nível">
                <div class="invalid-feedback">
                Digite o Nível
                </div>
            </div>
            <div class="col-md-6 mt-2">
                <select name="situacao" id="situacao" class="form-select">
                    <option value="concluido">Concluido</option>
                    <option value="Andamento">Andamento</option>
                </select>
            </div>
            <div class="col-4 mt-2">
                <input type="number" name="ano_inicio" id="ano_inicio" class="form-control" placeholder="Ano de Inicio">
                <div class="invalid-feedback">
                Digite o Ano de Início
                </div>
            </div>
            <div class="col-4 mt-2">
                <input type="number" name="ano_fim" id="ano_fim" class="form-control" placeholder="Ano de termino">
                <div class="invalid-feedback">
                Digite o Ano de Termino
                </div>
            </div>
            <div class="col-4 mt-2">
                <input type="number" step="0.01" name="valor" id="valor" class="form-control" placeholder="Valor">
                <div class="invalid-feedback">
                Digite o valor
                </div>
            </div>
            <div class="col-auto mt-2">
                <button type="submit" name="bt_pesquisar_atualizar" class="btn btn-primary mb-3">Pesquisar</button>
            </div>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Código</th>
              <th scope="col">Nome</th>
              <th scope="col">Nível</th>
              <th scope="col">Instituição</th>
              <th scope="col">Início</th>
              <th scope="col">Término</th>
              <th scope="col">Situação</th>
              <th scope="col">Valor</th>
            </tr>
          </thead>
          <tbody>
 <?php
    if(isset($_POST['bt_pesquisar_atualizar'])){
            $id_logado = $_SESSION['idusuario'];
            if($_POST['nome_curso'] == "" && $_POST['instituicao'] == "" && $_POST['nivel'] == "" && $_POST['ano_inicio'] == "" && $_POST['ano_fim'] == "" && $_POST['situacao'] == "" && $_POST['valor'] == ""){
                $_SESSION['mensagem'] = "Preencha pelo menos um dos campos";
                $_SESSION['status']   = "warning";
            }else{
                $nome_curso   = $_POST['nome_curso'];
                $instituicao  = $_POST['instituicao'];
                $situacao     = $_POST['situacao'];
                $nivel        = $_POST['nivel'];
                $somatorio    = 0;
                $sql          = "SELECT * FROM formacoes WHERE idusuario = $id_logado
                AND nome_curso LIKE '%$nome_curso%' AND instituicao LIKE '%$instituicao%' AND
                situacao = '$situacao' AND nivel LIKE '%$nivel%'";

              $resultado    =  mysqli_query($conexao, $sql);

              while($dados = mysqli_fetch_array($resultado)){
                  $idformacoes  = $dados['idformacoes'];
                  $nivel        = $dados['nivel'];
                  $nome_curso   = $dados['nome_curso'];
                  $instituicao  = $dados['instituicao'];
                  $ano_inicio   = $dados['ano_inicio'];
                  $ano_fim      = $dados['ano_fim'];
                  $situacao     = $dados['situacao'];
                  $valor        = $dados['valor'];
                  $somatorio    += $valor;

                  echo" <tr>
                  <td>$idformacoes</td>
                  <td>$nome_curso</td>
                  <td>$nivel</td>
                  <td>$instituicao</td>
                  <td>$ano_inicio</td>
                  <td>$ano_fim</td>
                  <td>$situacao</td>
                  <td>$valor</td>
                </tr>";
              }
              echo" <tr>
                  <td colspan='7'>Total</td>
                  <td>$somatorio</td>
                </tr>";
            }
    }
 ?>
         
          </tbody>
        </table>
      </div>
  </div>


<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/form-validation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
</body>
</html>