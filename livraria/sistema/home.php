<?php 
session_start();
if((!isset($_SESSION['nome']) == true) && (!isset($_SESSION['senha']) == true) ){
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header("location:../index.php");
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
 
    <script src="https://kit.fontawesome.com/73a6f8e3a4.js" crossorigin="anonymous"></script>
    <style>
         @import url('https://fonts.googleapis.com/css2? family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
             
            font-family:  'Roboto', sans-serif;
        }
        body{
            height: 100vh;
            font-family: sans-serif;
            
        }
        .box-header{
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 20px;
            background-color: rgb(0, 157, 197);
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
        .box-nome{
            position: absolute;
            right: 100px;
            width: 230px;
        }
        .box-favorito{
            position: absolute;
            right: 200px;
            width: 370px;
        }
        .box-sistema {
            margin: auto;
            text-align: center;
        
            
        }
        .box-sair{
            border:none;
            border-radius:5px ;
            padding:10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color:rgb(234, 81, 21);
            margin: 0px 30px  0 0 ;
            
            
        }
        .box-sair:hover{
            box-shadow: 0px 1px 5px 2px rgb(0, 0, 0, 0.3);
            color: blue;
            
        }
        .box-sair i{
            color: white;
            
        }
        .box-sair:hover i{
            color: rgb(0, 0, 255, 0.579);
            
        }
        .box-sair a{
            color: white;
            text-decoration: none;
        }
        .box-sair:hover a{
            color: rgb(0, 0, 255, 0.579);
            
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
            font-size: 1.1em;
            font-weight: 700;
            border: 0;
        }
        .box-sistema ul li:hover{
            
            color: darkcyan;
            padding:5px 10px;
            
            
        }
        .box-sistema ul  a{
            text-decoration: none;
            color: black;
            border: none;

        }
        .box-sistema .li{
            background-color: black; 
            color:aliceblue; 
            border-radius: 10px; 
        }
        .box-sistema .li:hover{
            background-color: rgba(0, 0, 0, 0.754);
            color:white;

        }

        main{
            width: 500px;
            margin: 60px auto;
            padding: 10px;
            text-align: center;
            border:1px solid rgba(0, 0, 0, 0.454);
        }
        main p {
            text-align: justify;
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
                <div class="box-favorito">
                    <i class="fa-solid fa-not-equal"></i>
                    <p>milha listas</p>
                </div>
                <div class="box-nome" style="  align-items: center; gap:10px;">
                    <i class="fa-sharp fa-regular fa-user fa-xl"></i>
                    <p>Olá,<?php echo $_SESSION['nome']; ?></p>
                </div>
                <div class="box-sair">
                    <a href="../conexao/sair.php">Sair</a>
                </div>
            </div>
        </div>
         
        <div class="box-sistema">
            <ul>
                <a href="home.php">
                    <li class="li">inicio</li>
                </a>
                <a href="usuario.php">
                    <li>Usuário</li>
                </a>
                <a href="editora.php">
                    <li>Editora</li>
                </a>
                <a href="livro.php">
                    <li>Livro</li>
                </a>
                <a href="aluguel.php">
                    <li>Aluguel</li>
                </a>
                
            </ul>
        </div>
                
             
    </header>
    <main>
        <h1>vamos começa o teste</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quis minima enim veritatis, rem fuga id est quas deleniti qui cupiditate omnis! Doloribus, minus enim explicabo iste consequuntur rem quas? Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, tenetur, blanditiis quidem, illum ab et corporis sit quibusdam exercitationem aperiam optio voluptatem quasi est doloremque quia libero aut voluptates perspiciatis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quis minima enim veritatis, rem fuga id est quas deleniti qui cupiditate omnis! Doloribus, minus enim explicabo iste consequuntur rem quas? Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, tenetur, blanditiis quidem, illum ab et corporis sit quibusdam exercitationem aperiam optio voluptatem quasi est doloremque quia libero aut voluptates perspiciatis Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius quis minima enim veritatis, rem fuga id est quas deleniti qui cupiditate omnis! Doloribus, minus enim explicabo iste consequuntur rem quas? Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, tenetur, blanditiis quidem, illum ab et corporis sit quibusdam exercitationem aperiam optio voluptatem quasi est doloremque quia libero aut voluptates perspiciatis</p>
    </main>
  
   

</body>
</html>