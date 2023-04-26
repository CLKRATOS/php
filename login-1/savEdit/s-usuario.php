<?php 
    session_start();
    require_once("../conexao/conexao.php");
    if((!isset($_SESSION['name']) == true ) && (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['name']);
        unset($_SESSION['senha']);
        header("location:../index.php");
    }
    if(isset($_POST['salva'])){
        $id = $_POST['id'];
        $nome = $_POST['nome_usuario'];
        $cidade =  $_POST['cidade'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $conexao -> query("UPDATE usuarios SET nome_usuario = '$nome', cidade_usuario = '$cidade' , endereco = '$endereco' , email = '$email' where id_usuario = $id; ");
        header("location:../sistema/usuario.php");
    }
?>