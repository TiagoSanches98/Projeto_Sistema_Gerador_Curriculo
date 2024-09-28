<?php
    session_start();
    if(!isset($_SESSION['idusuario']) || !isset($_SESSION['email'])){
        header('Location:../index.php');
    }
    include_once("conexao.php");

    if(isset($_POST['bt_cadastrar'])){
        $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha1']);
        $senhabase64 = base64_encode($senha);

        $sql = "INSERT INTO usuario (nome, email, senha) VALUES('$nome', '$email', '$senhabase64')";


        if(mysqli_query($conexao, $sql)){
            $_SESSION['mensagem'] = "cadastro realizado com sucesso";
            $_SESSION['status']   = "success";
            header('Location:../index.php');
        }else{
            $_SESSION['mensagem'] = "Não foi possível cadastrar";
            $_SESSION['status']   = "danger";
            header('Location:../index.php');
        }
        }
?>