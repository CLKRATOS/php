<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
        $nome = "cleyton";
        $aulas = 12;
        $horas = 31;
        $vt = (3.50 * 2)*$aulas;
        $va = 10 * $aulas;
        $dd = $va + $vt;
        $salarioBruto = $aulas * $dd ;
        $dvt = ($salarioBruto * 6)/100;
        $dva = ($salarioBruto * 1 )/100;
        $dir = ($salarioBruto * 5)/100;
        $inss = ($salarioBruto * 8)/100;
        $salLiquido = $salarioBruto - ($dva + $dvt + $dir + $inss );

        echo "Nome:$nome<br>";
        echo "dias de aulas:$aulas<br>";
        echo "Horas de aulas:$horas<br>";
        echo "Salario bruto:$salarioBruto<br>";
        echo "Salario liquido:$salLiquido<br>";



        
    
    ?>
</body>
</html>