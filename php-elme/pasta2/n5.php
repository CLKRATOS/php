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
    
        $n1 = 12;
        $n2 = 10;
        $n3 = $n1 + $n2;
        if($n3 > 20){
            $n4 =$n3 +8;
            echo "Os numeros $n1 somador com $n2 é maior que 20 <br> resutador das somar mais 8 é:$n4";
        }else{
            echo "Os numeros $n1 somador com $n2 é menor que 20 <br> resutador das somar mais -5 é:$n4";
        }
    
    ?>
</body>
</html>