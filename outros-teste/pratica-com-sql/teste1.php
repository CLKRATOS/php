<?php 

$dbhome = "localhost";
$dbnome = "root";
$dbsenha = "admin";
$dbbanco = "cadastro";

$conexao = @mysqli_connect($dbhome,$dbnome,$dbsenha,$dbbanco) or die("conexão não deu certo");
echo "conexão boa<br><hr>";

$table = "SELECT * FROM gafanhotos ORDER BY id;";

$resut = mysqli_query($conexao,$table);
//print_r($resut); você poder verificar ser deu certo ser aparecer um numero no num_rows

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin: auto;
            text-align: center;
        }
        table th,td{
            padding:5px 10px;
        }
    </style>
</head>
<body>
    <table border="1">
        <thead>
            <th>id</th>
            <th>nome</th>
            <th>profissao</th>
            <th>nascimento</th>
            <th>sexo</th>
            <th>peso</th>
            <th>altura</th>
            <th>nacionalidade</th>
             
        </thead>
        <tfoot>
            <tr>
                <th colspan="10">ESSA PORRA DEU CERTO CARAI!!!!!!!!!!!!!!!!!!</th>
            </tr>
            <tr>
                <th colspan="10">kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk</th>

            </tr>
        </tfoot>
        <tbody>
            <?php 
            
                while ($cont = mysqli_fetch_assoc($resut)) {
                    echo "<tr>";
                    echo "<td>".$cont['id'];
                    echo "<td>".$cont['nome'];
                    echo "<td>".$cont['profissao'];
                    echo "<td>".$cont['nascimento'];
                    echo "<td>".$cont['sexo'];
                    echo "<td>".$cont['peso'];
                    echo "<td>".$cont['altura'];
                    echo "<td>".$cont['nacionalidade'];
                    echo "</tr>";
                    
                    
                    
                }
            
            ?>
        </tbody>
    </table>
</body>
</html>