<?php 
    session_start();
    if((!isset($_SESSION['nome']) == true) && (!isset($_SESSION['senha']) == true) ){
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header("location:../index.php");
        echo "ola";
    }
    include_once("../conexao/conexao.php");
    if(!empty($_GET['pusca'])){
        $pusca = $conexao -> real_escape_string( $_GET['pusca']);
        $sql_query = $conexao -> query("SELECT * FROM editoras where
                                         cod_editora like '%$pusca%' or 
                                         nome_editora like '%$pusca%' or
                                         cidade like '%$pusca%';");

    }else{
        $sql_query = $conexao -> query("SELECT * FROM editoras;");
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
        .box-sistema .li{
            background-color: black; 
            color:aliceblue; 
            border-radius: 10px; 
        }
        .box-sistema .li:hover{
            background-color: rgba(0, 0, 0, 0.754);
            color:white;

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
                <div class="box-nome" style="  align-items: center; gap:10px;">
                    <i class="fa-sharp fa-regular fa-user fa-xl"></i>
                    <p>Olá,<?php echo $_SESSION['nome']; ?></p>
                </div>
                <div class="box-sair">
                    <a href="../conexao/sair.php"> Sair</a>
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
                    <li class="li">Editora</li>
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
                <h2>Editoras</h2>
                <a href="../cadratro/c-editora.php">Novo +</a>
            </div>
            <div class="box-pes">
                <form>
                    <input type="text" name="pusca"> 
                    <button type="submit" style="background-color: transparent;"> <i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
    
        </div>
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>nome_editora</th>
                    <th>cidade</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if($sql_query -> num_rows == 0 ){
                        ?>
                            <td colspan="10" style="font-size: 1.3em; font-weight: 800;">Descuper mas não temos essas opção</td>
                        <?php
                    }else{
                        while($cont = mysqli_fetch_assoc($sql_query)){
                            ?>
                            <tr>
                                <td><?php echo $cont['cod_editora'];?></td>
                                <td><?php echo $cont['nome_editora'];?></td>
                                <td><?php echo $cont['cidade'];?></td>
                                <td>
                                    <a href="../edit/e-editora.php?id='<?php echo $cont['cod_editora'];?>'"  style="background-color: black; padding: 9px;  border-radius: 5px; color:white;">
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                            <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                        </svg>
                                    </a>
                                    <a href="../del/d-editora.php?id='<?php echo $cont['cod_editora'];?>'"style="background-color: black; padding: 9px;  border-radius: 5px; color:white; margin-left: 5px;">
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>                     
                            <?php
                        }
                    }
                ?>
            </tbody>
        </table>
    </main>

</body>
</html>