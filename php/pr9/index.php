<!DOCTYPE html>
<html lang="en">

<?php 
    
    if(isset($_POST['btn'])){
        

        if(!empty( $_POST['n1']) && !empty( $_POST['n2'])  ){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $op = $_POST['op'];
            
            if($op == "+" ){
                $r = $n1 + $n2 ;
            }elseif ($op == '-') {
                $r = $n1 - $n2;
            }elseif($op == '*'){
                $r = $n1 * $n2;
            }elseif($op == '/'){
                $r = $n1 / $n2;
            };
            
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
            <label>numero 1</label>
            <input type="number" name="n1" id=""><br>
            <select name="op">
                <option value="+" >+</option>
                <option value="-" >-</option>
                <option value="*" >*</option>
                <option value="/" >/</option>
            </select><br>
            <label>numero 2</label>
            <input type="number" name="n2" id=""><br>
            <input type="submit" value="enviar" name="btn" >
        </form>
       <p>
            
        <?php 

            if (!empty($r)){
                echo "O resutador do calculor $n1 $op $n2 = " .  number_format($r,2,"."); 
            }else{
                echo "Coloque as informações necessario";
            };
              
        ?>
       </p>
    </div>
</body>
</html>