<?php
    $servidor   = "localhost";
    $bd         = "curriculo";
    $usuario    = "root";
    $senha      = "";


    try{
        $conexao = new mysqli($servidor, $usuario, $senha, $bd);
    }catch(Exception $e){
        dir("Falha na conexão $e");
    }
   

?>