<?php

    if($_FILES['foto']['name'] != "" || $_FILES['foto']['name'] != null){
        $tipos_permitidos = ['image/jpg', 'image/jpeg' ,'image/png'];
        $extensao = mime_content_type($tipo);
        $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

        if(in_array($extensao, $tipos_permitidos)){
            $pasta = "../fotos/";
            $temporario = $_FILES['foto']['tmp_name'];
            $novo_nome = uniqid().".$ext";


            //fazer upload dos arquivos

            if(move_uploaded_file($temporario, $pasta.$novo_nome)){

            }
        }else{
            $foto = $_SESSION['foto'];
            $_SESSION['msg_upload'] = "Foto em formato $extensao Inváliado";
        }

    }

?>