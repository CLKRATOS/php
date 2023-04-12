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
        <form method="get">
            <input type="number" name="n1" placeholder="numero 1">
            <input type="number" name="n2" placeholder="numero 2">
            <input type="submit" value="enviar">
        </form>
        
            <?php
                $n1 = $_GET['n1'];
                $n2 = $_GET['n2'];
                $somar = $n1 + $n2;
                $subtração = $n1 - $n2;
                $mutiplicação = $n1 * $n2;
                $divisão = $n1 / $n2;
                echo('A somatoria dos numeros é '. $somar .'<br>');
                echo('A subtrasão dos numeros é '. $subtração .'<br>' );
                echo('A mutiplicação dos numeros é '. $mutiplicação .'<br>');
                echo('A divisão dos numeros é '. $divisão .'<br>');

                if (empty($n2)) {
                    header('Location:ç.html');
                };

            ?>
    </div>
</body>
</html>