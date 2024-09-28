<?php
        session_start();
        include_once("verificar_logado.php");
        include_once("conexao.php");

        if(isset($_POST['bt_cadformacao'])){
                //Pegando os Dados

                $nome_curso     = mysqli_real_escape_string($conexao, $_POST['nome_curso']);
                $nivel          = mysqli_real_escape_string($conexao, $_POST['nivel']);
                $instituicao    = mysqli_real_escape_string($conexao, $_POST['instituicao']);
                $ano_inicio     = mysqli_real_escape_string($conexao, $_POST['ano_inicio']);
                $ano_fim        = mysqli_real_escape_string($conexao, $_POST['ano_fim']);
                $situacao       = mysqli_real_escape_string($conexao, $_POST['situacao']);
                $valor          = mysqli_real_escape_string($conexao, $_POST['valor']);
                $idusuario      = mysqli_real_escape_string($conexao, $_SESSION['idusuario']);

                $sql = "INSERT INTO formacoes (nome_curso, nivel, instituicao, ano_inicio, ano_fim, situacao, valor, idusuario) VALUES ('$nome_curso', '$nivel', '$instituicao', '$ano_inicio', '$ano_fim', '$situacao', '$valor', '$idusuario')";


                if(mysqli_query($conexao, $sql)){
                        $_SESSION['mensagem'] = "Cadastro de formações realizado com sucesso!";
                        $_SESSION['status']   = "success";
                        header('Location:../cadastro_formacoes.php');
                }else{
                        $_SESSION['mansagem'] = "Não foi possível realizar o cacastro de formações!";
                        $_SESSION['status']   = "danger";
                        header('Location:../cadastro_formacoes.php');
                }
                mysqli_close($conexao);
        }

?>