<?php 

    $valor = 2;
    $numero1 = 22;
    $numero2 = 2;

    switch ($valor){
        case 1:
            $somar = $numero1 + $numero2;
            echo "A somar dos numeros $nuemro1 e $numero2 é:$somar";
        break;
        case 2:
            $subtraçao = $numero1 - $numero2;
            echo "A Subtração dos numeros $nuemro1 e $numero2 é:$subtraçao";
        break;
        case 3:
            $mutiplicaçao = $numero1 * $numero2;
            echo "A Mutiplicação dos numeros $nuemro1 e $numero2 é:$mutiplicaçao";
        break;
        case 4:
            $divisao = $numero1 / $numero2;
            echo "A Divisão dos numeros $nuemro1 e $numero2 é:$divisao";
        break;
        default:
            echo "O valor que você colocou não tem.";
        break;
    }

?>