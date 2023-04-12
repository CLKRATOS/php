<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="conteine">
        <?php 
            echo 'Valor Absoluto = abs()/'.abs(-99.88).'<br>';
            echo 'ponteciação = pow()/ '.pow(2,4)."<br>";
            echo 'Raiz quadrada = aqrt()/ '.sqrt(133).'<br>';
            echo 'formatação = number_format()/ '.number_format(1000,2,".",",").'<br>';
            echo 'arredondamento = round()/ '. round(2.30).'<br>';
            echo 'arredondamento para cima(ceil) é para baixo(floor) = '. ceil(2.30).'||'. floor(2.30);
        ?>
    </div>
</body>

</html>