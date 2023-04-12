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

        $nomeVendedor = "kratos";
        $nomeCliente = "cleyton";
        $nomeProduto = "celualar";
        $valor = 1900;
        $valorComDesconto = ($valor * 5)/100;
        $valorComParcela = $valorComDesconto / 4;

        echo "Vendedor:$nomeVendedor<br>";
        echo "Cliente:$nomeCliente<br>";
        echo "Produto:$nomeProduto<br>";
        echo "Valor dor produto:$valor";
        echo "Produto com desconto:$valorComDesconto<br>";
        echo "Produto com desaconto:$valorComParcela<br>";


    ?>

</body>
</html>