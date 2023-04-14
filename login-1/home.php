<?php 
session_start();
if((!isset($_SESSION['nome']) == true) && (!isset($_SESSION['senha']) == true) ){
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header("location:index.php");
        echo "ola";
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/73a6f8e3a4.js" crossorigin="anonymous"></script>
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
        .box-header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 38px 20px;
            background-color: rgb(0, 157, 172);
            color: white;
        }

        .box-pesquisa{
            padding: 10px;
            width: 350px;
            position: relative;
            margin-right: 140px;
        }
        .box-pesquisa input{
            width: 100%;
            font-size: 1.1em;
            padding: 10px 10px;
            padding-right:30px ;
            border: none;
            outline: none;
            border-radius: 3px;
            color: rgba(0, 0, 0, 0.554);
            
        }
        .box-pesquisa i{
            position: absolute;
            right: 20px;
            top:23px;
            color:black;
           
        }

        .box-usuario{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5px;
            text-align: center;
            color:black;
            font-weight: 700;
            position: relative;
        }
        .nome{
            position: absolute;
            right: 140px;
            width: 200px;
        }
        .box-sistema {
            margin: auto;
            text-align: center;
           
            
        }
        .box-sistema ul{
            display: flex;
            gap: 80px;
            list-style: none;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid rgba(0, 0, 0, 0.454);
            padding: 10px;
            text-transform: capitalize;
            

        }
        .box-sistema ul li{
            padding:5px 10px;
        }
        .box-sistema ul li:hover{
            
            color: darkcyan;
            padding:5px 10px;
            border-radius:4px;
            transition: .5s all linear;
        }
       

    </style>
</head>
<body>
    <header>
        <div class="box-header">
            <h1>Livraria CL</h1>
            <div class="box-pesquisa">
                <input type="text" name="pesquisa">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="box-usuario">
                <div class="nome">
                    <i class="fa-sharp fa-solid fa-circle-user fa-2xl" style="color:black; "></i><br><br>
                    <p>Olá , sejá bem vindo</p>
                    <p><?php echo $_SESSION['nome']; ?></p>
                </div>
                <div class="box-sair">
                    <a href="conexao/sair.php">
                        <i class="fa-solid fa-right-to-bracket fa-2xl"></i>
                        sair
                    </a>
                </div>
            </div>
        </div>
        <div class="box-sistema">
            <ul>
                <li>inicio</li>
                <li>Usuário</li>
                <li>Edito</li>
                <li>Livro</li>
                <li>Aluguel</li>
                
            </ul>
        </div>
    </header>
  
   

</body>
</html>