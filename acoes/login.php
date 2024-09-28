<?php
    session_start();
    include_once("conexao.php");

    if(isset($_POST['bt_entrar'])){
        //pegando os dados enviados no form
        $email = mysqli_real_escape_string($conexao, $_POST['email']);
        $senha = mysqli_real_escape_string($conexao, $_POST['senha']);


        //consultar na base de dados

        $sql = "SELECT * FROM usuario WHERE email = '$email'";

        $resultado = mysqli_query($conexao, $sql);

        if(mysqli_affected_rows($conexao) > 0){
            $dados = mysqli_fetch_array($resultado);

            $senhaBD = $dados['senha'];

            if(base64_decode($senhaBD) == $senha){
                $_SESSION['mensagem']  = "Usuário Logado com Sucesso";
                $_SESSION['status']    = "success";
                $_SESSION['idusuario'] = $dados['idusuario'];
                $_SESSION['email']     = $dados['email'];
                $_SESSION['foto']      = $dados['foto'];
                header('Location:../painel.php');
            }else{
                $_SESSION['mensagem']  = "Senha Incorreta";
                $_SESSION['status']    = "danger";
                header('Location:../index.php');
            }
            
            
        }else{
                $_SESSION['mensagem']  = "Erro no login! Email ou Senha Incorretos";
                $_SESSION['status']    = "danger";
                header('Location:../index.php');
            }
            mysqli_close($conexao);
    }

?>