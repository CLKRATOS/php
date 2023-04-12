<?php
//essa é a ordem para verificar o seu acessor ao banco de dados
    $host = "localhost";//onder esta o servidor 
    $usuario = "root";//nome do usuario
    $senha = "";// senhar 
    $name = "cadastro";// nome do seu banco de dados 

    $sql = @mysqli_connect($host,$usuario,$senha,$name)  or die( ' Erro na conexão ' );// Aqui vai fazer a conexão do banco de dados 

    # @ = ele vai não vai deixar as coisa estralha na tela quando da errado
    # mysqli_connect = ele vai fazer a conexão com o banco de dados 
    # or die = ele vai cancelar o resto do comandor ser a conexão não de bem e vai aparece a mensagem que quero

    echo "conexão bem ";




    // if ($sql -> connect_errno) {
    //     echo "falha";
    // }else{
    //     echo "certo";
    // }
    
?>