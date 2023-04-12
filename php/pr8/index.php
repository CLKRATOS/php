
<!DOCTYPE html>
<html lang="en">
<?php 
// session_start();
        
//         if(isset($_POST['btn'])){
//             $teste = strip_tags($_POST['nome']);
            
//             if(!isset($_SESSION['test'])){
//                 $_SESSION['test'] = array();
//                 $_SESSION['test'][] = $teste; 
//             }else{
//                 $_SESSION['test'][] = $teste;
//             };
//         };  


    session_start();

    if(isset($_POST['btn'])){
        $tex = $_POST['nome'];

        if(!isset($_SESSION['tes'])){
            $_SESSION['tes'] = array();
            $_SESSION['tes'][] = $tex;
        }else{
            $_SESSION['tes'][] = $tex;
        };
    };



?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" >
        <input type="submit" value="envi" name="btn">
    </form>
    <?php 
        foreach($_SESSION['tes'] as $d => $o){
            echo $o;
        };
    ?>
</body>
</html>