<!DOCTYPE html>
<html lang="en">
    <?php 
        session_start();
        
        if(isset($_POST['btn'])){
            $teste = strip_tags($_POST['nome']);
            
            if(!isset($_SESSION['test'])){
                $_SESSION['test'] = array();
                $_SESSION['test'][] = $teste; 
            }else{
                $_SESSION['test'][] = $teste;
            };
        };  
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
            <input type="text" name="nome">
            <input type="submit" value="enviar" name="btn">
        </form>
    <?php 
        foreach($_SESSION['test'] as $h => $g){
            echo $h . ''. $g;
        };
    ?>
 
    </div>

</body>
</html>