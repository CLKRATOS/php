<?php 

    $dbhost = "localhost";
    $dbnome = "root";
    $dbsenha = "";
    $dbbanco = "cadastro";

    $conexao = mysqli_connect($dbhost,$dbnome,$dbsenha,$dbbanco) or die ("Conexão ruim". mysqli_errno($conexao));


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            
            align-items: center;
            flex-direction: column;
        }
        table{
            margin: 20px 0px;
            text-align: center;
        }
        table th,td{
            padding:5px 30px;
        }
    </style>
</head>
<body>
    <h1>Pesquise um nome </h1>
    <form>
        <input type="text" name="busca" >
        <button type="submit">enviar</button>
    </form>
    <table border="1">
        <thead>
            <td></td>
            <th>NOME</th>
        </thead>
        <tbody>
            <?php 
            
                if(!isset($_GET['busca'])){
                    ?>
                    <tr>
                        <td></td>
                        <td>pesquise</td>
                    </tr>
                <?php 
                }else{
                    $busca = mysqli_real_escape_string($conexao,$_GET['busca']);

                    $pesquisa = "SELECT * FROM gafanhotos WHERE NOME LIKE '%$busca%' or id = '$busca';";

                    $resut = mysqli_query($conexao,$pesquisa);

                    if(mysqli_num_rows($resut) == 0 ){
                        ?>
                        <tr>
                            <td>1</td>
                            <td>Nao tem</td>
                        </tr>

                    <?php 
                    }else {
                        while ($cont = mysqli_fetch_assoc($resut)) {
                            ?>
                                <tr>
                                    <td><?php echo $cont['id'] ?></td>
                                    <td><?php echo $cont['nome'] ?></td>
                                </tr>
                            <?php 
                        }
                    }

                }
            
            ?>
        </tbody>
    </table>

</body>
</html>