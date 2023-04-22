<?php 
    session_start();
    if ((!isset($_SESSION['name']) == true) && (!isset($_SESSION['senha']))) {
        unset($_SESSION['name']);
        unset($_SESSION['senha']);
        header("location:../index.php");
    }
    require_once("../conexao/conexao.php");
    if(isset($_POST['salva'])){
        $id = $_POST['id'];
        $nome = $_POST['nome_editora'];
        $cidade = $_POST['cidade'];
        $conexao -> query("UPDATE editoras set nome_editora = '$nome',cidade = '$cidade' where cod_editora = $id ");
        header("location:../sistema/editora.php");

    }

?>