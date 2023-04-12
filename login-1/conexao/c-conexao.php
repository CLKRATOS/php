<?php 
    include_once("conexao.php");
    if(isset($_POST['cadrastra']) && !empty($_POST['nome_completo'])  && !empty($_POST['nome_usuario'])  && !empty($_POST['email'])  && !empty($_POST['senha'])){
        $nome_completo = $conexao ->real_escape_string( $_POST['nome_completo']);
        $nome_usuario = $conexao ->real_escape_string( $_POST['nome_usuario']);
        $email = $conexao ->real_escape_string($_POST['email']);
        $senha = $conexao ->real_escape_string(  $_POST['senha']);
        $conexao -> query("INSERT INTO acesso value (default,'$nome_completo','$nome_usuario','$email','$senha');");
        header("location:../login.php");
    }

?>