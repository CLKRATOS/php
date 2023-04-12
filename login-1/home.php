<?php 
session_start();
if((!isset($_SESSION['nome']) == true) && (!isset($_SESSION['senha']) == true) ){
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header("location:../index.php");
    }

?>
<!DOCTYPE html>
<html lang="py-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            height: 100vh;
            font-family: sans-serif;
            
        }
        header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px 20px;
            background-color: red;
            color: white;
        }
        ul{
            display: flex;
            gap: 30px;

            list-style: none;
            border: 1px solid;

        }


    </style>
</head>
<body>
    <header>
        <h1>logo cl</h1>
        <ul>
            <li>inicio</li>
            <li>Usuário</li>
            <li>Edito</li>
            <li>Livro</li>
            <li>Aluguel</li>
            <li>sair</li>
        </ul>
    </header>
    <p>ola <?php echo $_SESSION['nome'];?></p>

</body>
</html>