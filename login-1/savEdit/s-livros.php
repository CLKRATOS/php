<?php 

    session_start();
    if((!isset($_SESSION['name']) == true) && (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['name']);
        unset($_SESSION['sennha']);
        header("location:../index.php");
    }
    require_once("../conexao/conexao.php");
    if(isset($_POST['salva'])){
        $id = $conexao -> real_escape_string($_POST['id']);
        $nome_livro = $conexao -> real_escape_string($_POST['nome_livro']);
        $editora_cod = $conexao -> real_escape_string($_POST['editora']);
        $autor = $conexao -> real_escape_string($_POST['autor']);
        $lancamento = $conexao -> real_escape_string($_POST['lancamento']);
        $quantidade = $conexao -> real_escape_string($_POST['quantidade']);
        $conexao -> query("UPDATE livros SET nome_livro = '$nome_livro', editora_cod = '$editora_cod', autor = '$autor', lancamento = '$lancamento', quantidade = '$quantidade' where id_livro = $id ");
        header("location:../sistema/livro.php");
    }

?>