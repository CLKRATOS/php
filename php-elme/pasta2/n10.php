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
    
        $a = 12;
        $b = 11;
        $c = 10;
        $d = 9;

        if($a > $b && $a > $c && $a > $d ){
            echo "O numero $a é o maior<br>";
        }elseif ($a < $b && $a < $c && $a < $d ){
            echo "O numero $a é o menor";
        }

        if($b > $a && $b > $c && $a > $d ){
            echo "O numero $b é o maior<br>";
        }elseif ($b < $a && $b < $c && $b < $d ){
            echo "O numero $b é o menor";
        }

        if($c > $a && $c > $b && $c > $d ){
            echo "O numero $c é o maior<br>";
        }elseif ($c < $a && $c < $b && $c < $d ){
            echo "O numero $c é o menor";
        }

        if($d > $b && $d > $c && $d > $a ){
            echo "O numero $d é o maior<br>";
        }elseif ($d < $b && $d < $c && $d < $a ){
            echo "O numero $d é o menor";
        }



        



    ?>


</body>
</html>