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
    
        $nome = "Cleyton";
        $idade = 17;
        $curso = "informatica";
        $nota1 = 7;
        $nota2 = 9;
        $nota3 = 10;
        $nota4 = 5;
        $notaFinal = ($nota1+$nota2+$nota3+$nota4)/4;
        if($notaFinal >= 6){
            echo "Ola, $nome a sua nota é $notaFinal e você esta Aporvador";
        }elseif($notaFinal < 6 && $notaFinal >=3 ){
            echo "Ola, $nome a sua nota é $notaFinal e você esta Recuperação";
        }else {
            echo "Ola, $nome a sua nota é $notaFinal e você esta Reprovador";
        }
    
    ?>
</body>
</html>