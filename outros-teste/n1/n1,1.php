<?php 

    function re($n){
        if($n == 1){
            return $n;
        }else{
            return $n * re($n - 1);
        }

    }
    $t = re(5);
    echo $t;


?>