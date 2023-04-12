<!DOCTYPE html>
<html lang="en">


<?php

    

    if(isset($_POST['btn'])){
        if(!empty($_POST['a']) || !empty($_POST['b']) || !empty($_POST['c']) ){
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            $r= $b**2-4*$a*$c;      
        }else{
            $r ='';
        }
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
    <div class="conteine">
        <form method="post">
            <label>numero A</label>
            <input type="number" name="a" required ><br>
            <label>numero b</label>
            <input type="number" name="b" required ><br>
            <label>numero c</label>
            <input type="number" name="c" required ><br>
            <input type="submit" value="enviar" name="btn" >
        </form>
        <p>
    
            <?php
                if(!empty($r)){
                    echo "O delta é: $r ";
                }else{
                    echo 'Coloque as informações ';
                }
            ?>
    
        </p>
    </div>
</body>
</html>