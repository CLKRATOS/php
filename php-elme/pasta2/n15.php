<?php 

    $idade = 17;
    if($idade < 18){
        echo "Menor de idade";
    }elseif($idade >=18 && $idade <=65){
        echo "Maior de idade";
    }else{
        echo "Idade avançada";
    }

?>