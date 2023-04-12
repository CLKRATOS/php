<?php 

    $dbhost = "localhost";
    $dbnome = "root";
    $dbsenha = "";
    $dbbanco = "cadatro";

    $conexao = @mysqli_connect($dbhost,$dbnome,$dbsenha,$dbbanco) or die("conexão ruim");
    // echo "conexão boa<hr>";

    if(isset($_POST['dados']) && !empty($_POST['name'])){
        echo "<script>alert('os dados foi enviador');</script>";
        $nome =  $_POST['name'];
        $conexao -> query("INSERT INTO nome value(default,'$nome');");
        $query = $conexao -> query("SELECT * FROM nome ;");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <form method="post">
        <h1>enviar dados</h1>
        <input type="text" name="name" value="<?php echo @$_POST['name'];?>"><br><br>
        <input type="submit" value="enviar" name="dados">
    </form><br>
    <table border="1" style="width: 200px; text-align: center;">
        <tr>
            <th>id</th>
            <th>nome</th>
        </tr>
        <?php 
            if (!empty($_POST['name'])) {
                
                while($cont = @mysqli_fetch_assoc($query)){
                    ?> 
                        <tr>
                            <td><?php echo $cont['id'];?></td>
                            <td><?php echo $cont['nome'];?></td>
                        </tr>
                    <?php 
                }
            }else{
                $query = $conexao -> query("SELECT * FROM nome ;");
                while($cont = @mysqli_fetch_assoc($query)){
                    ?> 
                        <tr>
                            <td><?php echo $cont['id'];?></td>
                            <td><?php echo $cont['nome'];?></td>
                        </tr>
                    <?php 
                }
            }
        
        ?>
    </table>
</body>
</html>