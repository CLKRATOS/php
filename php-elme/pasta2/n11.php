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
    
        $idade = 17;
        if ($idade == 5 || $idade == 6 || $idade == 7){
            echo "Infantio A";
        }elseif ($idade == 8 || $idade == 9 || $idade == 10){
            echo "Infantio B";
        }elseif($idade == 11 || $idade == 12 || $idade == 13){
            echo "Juvenil A";
        }elseif($idade == 14 || $idade == 15  || $idade == 17){
            echo "juvenil B";
        }else{
            echo "Senior";
        }
    ?>
</body>
</html>