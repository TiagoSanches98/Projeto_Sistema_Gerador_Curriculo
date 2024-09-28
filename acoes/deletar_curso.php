<?php
    session_start();
    include_once('verificar_logado.php');
    include_once('conexao.php');
    echo $_POST['idModalCurso'];

    if(isset($_POST['bt_deletar'])){
        $id = $_POST['idModalCurso'];

        $sql = "DELETE FROM formacoes WHERE idformacoes = $id";

        if(mysqli_query($conexao, $sql)){
            $_SESSION['mensagem'] = "Registro deletado com sucesso";
            $_SESSION['status']   = "success";
            header('Location:../deletar_formacoes.php');
        }else{
            $_SESSION['mensagem'] = "Não foi possível deletar o registro";
            $_SESSION['status']   = "danger";
            header('Location:../deletar_formacoes.php');
        }
    }

?>