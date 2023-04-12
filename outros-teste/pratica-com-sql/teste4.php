<?php 

    $dbhost = "localhost";
    $dbnome = "root";
    $dbsenha  = '';
    $dbbanco = "cadatro";

    $conexao = new mysqli($dbhost,$dbnome,$dbsenha,$dbbanco) or die ("conexão ruim". $conexao->error);

    session_start();

    if(isset($_POST['btn']) && !empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) ){

        $nome = mysqli_real_escape_string($conexao,$_POST['nome']);
        $email = mysqli_real_escape_string($conexao,$_POST['email']);
        $senha = mysqli_real_escape_string($conexao,$_POST['senha']);

        $resut = $conexao -> query("SELECT * FROM pessoas where nome = '$nome' and email = '$email' and senha = '$senha' ");
        print_r($resut);
        if(mysqli_num_rows($resut) == 1 ){
            $_SESSION['nome'] = $nome;
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location:teste4,1.php');
        }else{
            
            header('Location:teste4.php');
        }

    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h1>login</h1>
        <input type="text" name="nome" placeholder="nome"><br>
        <input type="text" name="email" placeholder="email"><br>
        <input type="text" name="senha" placeholder="senha" ><br>
        <button type="submit" name="btn">enviar</button>
    </form>
</body>
</html>

