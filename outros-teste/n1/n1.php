<?php 

    function ola(&$valor,$o){
        $valor = $valor + $o;
    }
    $a = 5;
    $b = 10;
    echo "$a<br>";
    echo "$b<br>";
    ola($a,$b);
    echo $a;


?>