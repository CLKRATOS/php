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
        
          
                for($e = 1; $e <= 10; $e++){
                    
                    for($j = 1; $j <= $e; $j++ ){
                        echo '*';
                    };
                    echo '/n<br>' ;
                };
                
             

        ?>
    </div>


</body>
</html>