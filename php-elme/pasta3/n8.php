<?php

    $codigo = 2;
    switch($codigo){
        case 1:
            echo " A sua escolha foi o Caderno" ;
        break;
        case 2:
            echo "A sua escolha foi o Lapís";
        break;
        case 3:
            echo "A sua escolha foi a caneta ";
        break;
        case 4:
            echo "A sua escolha foi o corretivo";
        break;
        case 5:
            echo "A sua escolha foi a borracha ";
        break;
        default:
            echo "Material não Cadastrado.";
        break;
    }

?>