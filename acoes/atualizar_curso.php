<?php
    session_start();
    include_once("verificar_logado.php");
    include_once("conexao.php");


    if(isset($_POST['bt_atualizar_formacao'])){
        //pegar os dados enviados via post
        $idformacoes        = mysqli_real_escape_string($conexao, $_POST['idformacoes']);
        $nome_curso         = mysqli_real_escape_string($conexao, $_POST['nome_curso']);
        $nivel              = mysqli_real_escape_string($conexao, $_POST['nivel']);
        $instituicao        = mysqli_real_escape_string($conexao, $_POST['instituicao']);
        $ano_inicio         = mysqli_real_escape_string($conexao, $_POST['ano_inicio']);
        $ano_fim            = mysqli_real_escape_string($conexao, $_POST['ano_fim']);
        $situacao           = mysqli_real_escape_string($conexao, $_POST['situacao']);
        $valor              = mysqli_real_escape_string($conexao, $_POST['valor']);
        $idusuario          = mysqli_real_escape_string($conexao, $_SESSION['idusuario']);

        $sql = "UPDATE formacoes SET nome_curso = '$nome_curso', nivel  = '$nivel', 
        instituicao = '$instituicao', ano_inicio = '$ano_inicio', ano_fim = '$ano_fim', situacao = '$situacao',
        valor = '$valor' WHERE idformacoes = '$idformacoes'";

        if(mysqli_query($conexao, $sql)){
            $_SESSION['mensagem'] = "Atualização realizada com sucesso!";
            $_SESSION['status']   = "success";
            header('Location:../atualizar_formacoes.php');
        }else{
            $_SESSION['mensagem'] = "Não foi possível atualizar os dados!";
            $_SESSION['status']   = "danger";
            header('Location:../atualizar_formacoes.php');
        }
    }
?>