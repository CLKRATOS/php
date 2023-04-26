<?php 

    $dbhost = "localhost";
    $dbname = "root";
    $dbsenha = "admin";
    $dbbanco = "dblivraria";

    $conexao = mysqli_connect( $dbhost,$dbname,$dbsenha,$dbbanco ) or die ("conexão reuim");
    
?>