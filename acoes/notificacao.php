<?php
    //session_start();
    if(isset($_SESSION['mensagem'])){
        echo "
        <div class='alert alert-".$_SESSION['status']." alert-dismissible fade show' role='alert'>
        <strong>".$_SESSION['mensagem']."</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
        ";
    }
    if(isset($_SESSION['msg_upload'])){
        echo "
        <div class='alert alert-".$_SESSION['status']." alert-dismissible fade show' role='alert'>
        <strong>".$_SESSION['msg_upload']."</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
        ";
    }
    unset($_SESSION['msg_upload']);
    unset($_SESSION['mensagem']);
?>