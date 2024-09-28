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
    <title>Cadastro de Usuário</title>

    
    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">

  <form action="acoes/criar_usuario.php" method="POST" class="needs-validation container" novalidate onsubmit="return validarSenha()">
    <img class="mb-4" src="img/Icone-currículo.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Cadastre-se</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="nome" placeholder="Nome Completo" required>
      <label for="floatingInput">Nome</label>
    </div>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" name="email" placeholder="user@server.com" required>
      <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="senha1" name="senha1" placeholder="Password" required>
      <label for="senha1">Digite uma senha</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="senha2" name="senha2" placeholder="Password" required>
      <label for="senha2">Digite novamente</label>
    </div>

    <button class="w-100 btn btn-lg btn-primary" type="submit" name="bt_cadastrar">Cadastrar</button>
    <p class="mt-5 mb-3 text-muted">&copy; Code Class 2023</p>
  </form>
</main>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/form-validation.js"></script>
    <script>
      function validarSenha(){
        var senha1 = document.getElementById('senha1');
        var senha2 = document.getElementById('senha2');
        var texto  = document.getElementById('senha1').value;
        var n = texto.length;
        if(n < 6){
            alert("A senha tem apenas " + n + "caracteres, precisa ter 8 ou mais");
            return false;
        }else if(senha1.value != senha2.value){
            alert("As senhas são diferentes");
              return false;
        }else{
          return true;
        }
      }
    </script>
  </body>
</html>
