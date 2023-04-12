<?php 


    $nome ; 
    if(!isset($nome)){
        echo 'tem <br> ';
    }else{
        echo 'não tem <br> ';
    };

    
    $jogo = @$_GET['k'];
    echo $jogo;
?>