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
            echo '0';
            for($n = 1; $n <= 10; $n++ ){
                echo (',' . $n);
            };
    

            $n1  ;
            if (!isset($n1)){
                echo"vaxio";
            }else{
                echo "tem";
            };
            include_once('../pr1 /index.php');
        ?>
    </div>
</body>
</html>