<?php

    $nome = $_POST["name"];
    $senha = $_POST["senha"];
    include_once('array.php');
    if($login == true){
        echo "<script>alert('deu bom');</script>";
        echo "ola,$nome conexão bem sucedida";
    }else{
        echo "<script>alert('deu ruim');</script>";
        echo '<script>window.location.href = window.location.href.substring(0, window.location.href.lastIndexOf("/")) +"/n.php"</script>';
    }