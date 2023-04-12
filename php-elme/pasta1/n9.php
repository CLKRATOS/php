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
    
        $nomeCliente = "cleyton";
        $numeroDaConta = 300013;
        $numeroDaagencia = 120000;
        $valorDoDeposito = 200;
        $juros = 12;
        $valorComJuros = $valorDoDeposito + (($valorDoDeposito * $juros)/100);
        echo "nome do Cliente:$nomeCliente<br>";
        echo "Numero da conta:$numeroDaConta<br>";
        echo "Numero da agencia:$numeroDaagencia<br>";
        echo "Valor do deposito:$valorDoDeposito<br>";
        echo "Valor de juros da conta:$juros<br>";
        echo "Valor do deposito com juros:$valorComJuros";
    
    ?>
</body>
</html>