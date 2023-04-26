<?php 

    include_once("conexao.php");
    session_start();
    // echo $_POST['nome_usuario'];
    // echo $_POST['senha'];
    if(isset($_POST['login']) && !empty($_POST['nome_usuario']) && !empty($_POST['senha'])){
        $name = $conexao -> real_escape_string($_POST['nome_usuario']);
        $senha = $conexao -> real_escape_string($_POST['senha']);
       

        $sql_query = $conexao -> query("SELECT * FROM acesso where nome_usuario = '$name' and senha = '$senha' ;"); 
        // print_r($sql_query);

        if(mysqli_num_rows($sql_query) == 1){
            $_SESSION['nome'] =  $name = $_POST['nome_usuario'];
            $_SESSION['senha'] =  $name = $_POST['senha'];
            header("location:../sistema/home.php");
        }else{
            header("location:../login.php");
            unset($_SESSION['nome']);
            unset($_SESSION['senha']);
        }

    }else{
        header("location:../login.php");
    }

?>