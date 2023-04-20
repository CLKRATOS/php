<?php 
    session_start();
    if((!isset($_SESSION['nome']) == true) && (!isset($_SESSION['senha']) == true) ){
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header("location:../index.php");
        echo "ola";
    }
    include_once("../conexao/conexao.php");
    $sql_query = $conexao -> query("SELECT * FROM usuarios; ");
    if(!empty($_GET['pusca'])){
        $pusca = $_GET['pusca'];
        $sql_query = $conexao -> query("SELECT * FROM usuarios where
                                         id_usuario like '%$pusca%' or 
                                         nome_usuario like '%$pusca%' or
                                         cidade_usuario like '%$pusca%' or 
                                         endereco like '%$pusca%' or 
                                         email like '%$pusca%' ;");

    }else{
        $sql_query = $conexao -> query("SELECT * FROM usuarios;");
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/header.css">
    <script src="https://kit.fontawesome.com/73a6f8e3a4.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2? family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        *{
            font-family:  'Roboto', sans-serif;
             
        }
        main{
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 40px;
        }
        main table{
            width: 1000px;
            color:rgb(255,255, 255);
            border-bottom-left-radius: 5px ;
            border-bottom-right-radius: 5px ;
            background-color: rgb(0,0,0,0.9);
        }  
        main table td{
            padding:8px 10px ;
            text-align: center;
            text-transform: capitalize;
        }  
        main table th {
            background-color: rgb(0,0 , 0);
            padding: 8px 10px ;
            text-transform: capitalize;
        }
        .box-amostra{
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 1000px;
            background-color: rgb(183, 171, 155);
            

            
        }
        .box-logo{
            display: flex;
            gap:    20px;
            align-items: center;
            padding: 10px;
            
        }
        .box-logo a {
            text-decoration:none;
            text-transform: uppercase;
            padding: 10px 15px;
            background-color: aqua;
            color: black;
            border-radius: 5px;
        }
        .box-logo a:hover{
            color: white;
            background-color: black;
        }
        .box-pes{
            margin-right: 50px;
            position: relative;
        }
        .box-pes input{
            border: none;
            outline: none;
            padding: 5px 10px;
            padding-right: 30px;
            border-radius: 5px;
        }
        .box-pes button{
            border: none;
            position: absolute;
            right: 10px;
            top: 5px;
        }
    </style>
</head>
<body>
    
    <header>
        <div class="box-header">
            <h2>Livraria CL</h2>
            <div class="box-pesquisa">
                <input type="text" name="pesquisa">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="box-usuario">
                <div class="box-favorito">
                    <i class="fa-solid fa-not-equal"></i>
                    <p>milha listas</p>
                </div>
                <div class="box-nome" style="align-items: center; gap:10px;">
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
                    <li>inicio</li>
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
        <div class="box-amostra">
            <div class="box-logo">
                <h2>Usuarios</h2>
                <a href="../cadratro/c-usuario.php">Novo +</a>
            </div>
            <div class="box-pes">
                <form>
                    <input type="text" name="pusca"> 
                    <button type="submit"> <i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
 
        </div>
        <div class="box-table ">
            <table class="table-bg ">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nome_usuario</th>
                        <th>cidade_usuario</th>
                        <th>endereco</th>
                        <th>email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($cont = mysqli_fetch_assoc($sql_query)){
                            ?>
                            <tr>
                                <td><?php echo $cont['id_usuario'];?></td>
                                <td><?php echo $cont['nome_usuario'];?></td>
                                <td><?php echo $cont['cidade_usuario'];?></td>
                                <td><?php echo $cont['endereco'];?></td>
                                <td><?php echo $cont['email'];?></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

</body>
</html>