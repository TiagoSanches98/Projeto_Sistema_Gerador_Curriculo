<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Tiago Sanches da Silva">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Login</title>

    
    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <?php  
  session_start();
  include_once("acoes/notificacao.php");  
  ?>
  <form action="acoes/login.php" method="POST">
    <img class="mb-4" src="img/Icone-currículo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Site Currículo</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="senha" placeholder="Password">
      <label for="floatingPassword">Senha</label>
    </div>

    <div class="alert">
        Não tem Login? <a href="cadastrar_usuario.php">Cadastre-se</a>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="bt_entrar">Entrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; Code Class 2023</p>
  </form>
</main>


    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
