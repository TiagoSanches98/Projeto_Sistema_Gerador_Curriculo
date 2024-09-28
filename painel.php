<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Tiago Sanches da Silva">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Meu Currículo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CV Online</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfil.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cadastro_formacoes.php">Formação</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="experiencia.php">Experiência</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Currículo</a>
          </li>
        </ul>
       <a href="index.php" class="btn btn-danger">Sair</a>
      </div>
    </div>
  </nav>
</header>

<main>
  <div class="container-fluid">
  <?php  
  session_start();
  include_once('acoes/verificar_logado.php');
  include_once("acoes/notificacao.php");
  ?>
  </div>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/img1.jpeg" alt="Imagem Dicas">

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Guia de Carreira</h1>
            <p>Mantenha-se atualizado no mercado de trabalho</p>
            <p><a class="btn btn-lg btn-primary" href="https://www.guiadacarreira.com.br">Visite o site</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="img/img2.jpeg" alt="Imagem Guia">

        <div class="container">
          <div class="carousel-caption">
            <h1>Dicas de currículo</h1>
            <p>Conheça as informações essenciais para elaborar um currículo de sucesso</p>
            <p><a class="btn btn-lg btn-primary" href="https://www.guiadacarreira.com.br/blog/10-dicas-para-um-curriculo-perfeito">Acesse</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
      <img src="img/img3.jpg" alt="Imagem Mantenha-se atualizado">

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Mantenha-se atualizado</h1>
            <p>Busque constantemente o crescimento profissional</p>
            <p><a class="btn btn-lg btn-primary" href="https://jrmcoaching.com.br/blog/7-dicas-para-ter-mais-constancia-nos-seus-resultados/">Acessar</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        

        <h2>Cadastro de Cursos</h2>
        <p>Cadastre aqui seus cursos profissionalizantes</p>
        <p><a class="btn btn-secondary" href="#">Cadastrar &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        

        <h2>Cadastro de Formações</h2>
        <p>Cadastre suas formações</p>
        <p><a class="btn btn-secondary" href="#">Cadastrar &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        

        <h2>Configuração</h2>
        <p>Faça aqui as configurações da sua conta</p>
        <p><a class="btn btn-secondary" href="#">Configurar &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Voltar ao topo</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
  </footer>
</main>


    <script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
