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
    
        $nomeVendedor = "Kratos";
        $numroDaMesa = 12;
        $valor = 200;
        $comissao = $valor + ($valor * 10 )/100;
        echo "Nome do vendedor:$nomeVendedor<br>";
        echo "Numero da mesa:$numroDaMesa<br>";
        echo "Valor da mesa:$valor<br>";
        echo "Valor da mesa com a comissão:$comissao";
        
    
    ?>
</body>
</html>