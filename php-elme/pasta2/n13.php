<?php 

    $salario = 500;
    if($salario <= 500){
        echo "O seu salario é $salario <br> E tera nenhum credito";
    }elseif($salario >= 501 && $salario <= 1000){
        $saldo = ($salario * 30)/100;
        echo "O seu salario é $salario <br> E tera 30% de credito que ficara com $saldo de creditos";
    }elseif ($salario >= 1001 && $salario <= 3000) {
        $saldo = ($salario * 40)/100;
        echo "O seu salario é $salario <br> E tera 40% de credito que ficara com $saldo de creditos";
    }else{
        $saldo = ($salario * 50)/100;
        echo "O seu salario é $salario <br> E tera 50% de credito que ficara com $saldo de creditos";
    }

?>