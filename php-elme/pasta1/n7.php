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
        echo "Valor do A:$n1<br>";
        echo "Valor de B:$n2<br>";


        $n3 = $n1;
        $n1  = $n2;
        $n2 = $n3;
        echo "Valor de A trocador com B: $n1<br>";
        echo "Valor de B trocador com A:$n2";

    ?>
</body>
</html>