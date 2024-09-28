<?php
    include_once("conexao.php");

    $id_logado = $_SESSION['idusuario'];

    $sql = "SELECT * FROM usuario WHERE idusuario = '$id_logado'";

    $resultado = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($resultado);

    $idusuario     = $dados['idusuario'];
    $nome          = $dados['nome'];
    $nacionalidade = $dados['nacionalidade'];
    $estado_civil  = $dados['estado_civil'];
    $data_nasc     = $dados['data_nasc'];
    $endereco      = $dados['endereco'];
    $email         = $dados['email'];
    $celular       = $dados['celular'];
    $foto          = $dados['foto'];

    $_SESSION['nome']               = $nome;
    $_SESSION['nacionalidade']      = $nacionalidade;
    $_SESSION['estado_civil']       = $estado_civil;
    $_SESSION['data_nasc']          = $data_nasc;
    $_SESSION['endereco']           = $endereco;
    $_SESSION['email']              = $email;
    $_SESSION['celular']            = $celular;
    $_SESSION['foto']               = $foto;

?>