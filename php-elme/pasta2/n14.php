<?php 

    $nome = "Geilson";
    $idade = 17
    ;

    if($idade < 16){
        echo "não poder vota, menor de idade";
    }elseif($idade >= 16 && $idade <=18 || $idade > 65){
        echo "Voto obsional";
    }else{
        echo "Voto obrigatorio";
    }


?>