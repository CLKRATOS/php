<?php 

    session_start();
    if((!isset($_SESSION['name']) == true) && (!isset($_SESSION['senha']) == true)){
        unset($_SESSION['name']);
        unset($_SESSION['sennha']);
        header("location:../index.php");
    }
    require_once("../conexao/conexao.php");
    if(isset($_POST['salva'])){
        $id = $_POST['id'];
        $nome_livro = $_POST['nome_livro'];
        $editora_cod = $_POST['editora'];
        $autor = $_POST['autor'];
        $lancamento = $_POST['lancamento'];
        $quantidade = $_POST['quantidade'];
        $conexao -> query("UPDATE livros SET nome_livro = '$nome_livro', editora_cod = '$editora_cod', autor = '$autor', lancamento = '$lancamento', quantidade = '$quantidade' where id_livro = $id ");
        header("location:../sistema/livro.php");
    }

?>