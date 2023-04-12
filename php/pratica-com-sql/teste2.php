<?php 

    $dbhost = "localhost";
    $dbnome = "root";
    $dbsenha = "";
    $dbbanco = "cadastro";

    $conexao = @mysqli_connect($dbhost,$dbnome,$dbsenha,$dbbanco) or die("conexão ruim");
    echo "conexão boa<hr>";

    
     

    

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
    
    <form method="get">
        <input type="text" name="buscar">
        <button type="submit">enviar</button><br><hr>
        <?php 

            if (!isset($_GET['buscar'])) {
                 echo "não deu certo";
            
            }else{
                $ps = mysqli_real_escape_string($conexao,$_GET['buscar']);
                $p = "SELECT * FROM gafanhotos WHERE nome like '%$ps%';";

                $resut = mysqli_query($conexao,$p);



                while($cont = mysqli_fetch_array($resut)){
                echo $cont['nome'];
                echo "<hr>";
                }
               
            }
            
        
        ?>
    </form>

</body>
</html>