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
    
        $salarioBruto = 2700;
        $desconto = ($salarioBruto*30)/100;
        $prestação = 800;
        if($prestação < $desconto){
            echo "Você poder pegar a prestação";
        }else{
            echo "você não poder pegar a prestação.";
        }
    ?>
</body>
</html>