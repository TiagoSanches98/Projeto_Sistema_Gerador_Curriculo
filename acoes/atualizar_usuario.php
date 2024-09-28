<?php
    session_start();
    include_once("conexao.php");

    if(isset($_POST['bt_atualizar'])){
        $idusuario      =   $_SESSION['idusuario'];
        $nome           =   mysqli_real_escape_string($conexao, $_POST['nome']);
        $nacionalidade  =   mysqli_real_escape_string($conexao, $_POST['nacionalidade']);
        $estado_civil   =   mysqli_real_escape_string($conexao, $_POST['estado_civil']);
        $data_nasc      =   mysqli_real_escape_string($conexao, $_POST['data_nasc']);
        $endereco       =   mysqli_real_escape_string($conexao, $_POST['endereco']);
        $email          =   mysqli_real_escape_string($conexao, $_POST['email']);
        $celular        =   mysqli_real_escape_string($conexao, $_FILES['foto']['name']);
        $tipo           =   $_FILES['foto']['tmp_name'];

        //trabalhar com imagens
        include_once('upload.php');
        //trabalhar na atualização das informações
        $sql = "UPDATE usuario SET
            nome                = '$nome',
            nacionalidade       = '$nacionalidade',
            estado_civil        = '$estado_civil',
            data_nasc           = '$data_nasc',
            endereco            = '$endereco',
            email               = '$email',
            celular             = '$celular',
            foto                = '$foto'
            WHERE idusuario = '$idusuario'";


        if(mysqli_query($conexao, $sql)){
            $_SESSION['mensagem'] = "Perfil atualizado com sucesso";
            $_SESSION['status']   = "success";
            header('Location:../perfil.php');
        }else{
            $_SESSION['mensagem'] = "Não foi possivel atualizar o perfil";
            $_SESSION['status']   = "Danger";
            header('Location:../perfil.php');
        }

    }

?>