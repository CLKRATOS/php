
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de login | teste 1</title>
    <style>
        *{
            margin: 0;
            padding:0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: sans-serif;
            background-image:linear-gradient( 50deg, rgb(0, 157, 172),rgb(0, 157, 123));
        }
        main{
            background-color: rgba(255, 255, 255, 1.875);
            width: 344px;
            border: 1px solid black;
            text-align: center;
            padding: 10px 20px;   
            align-items: center;
            border-radius: 10px;
            box-shadow: 0 5px 10px black, inset 1px 1px 4px black; 

        }

        main h1{
            margin: 25px;
        }
        main .box-input{
            margin: 10px 0;
            padding:15px 5px;
            position: relative;
        }
        main .box-input input{
            width:100%;
            font-size: 1em;
            border: none;
            border-radius: 3px;
            outline: none;
            padding:12px 13px;
            background-color: rgba(255, 255, 255, 0.875);
            border: 1px solid rgba(0, 0, 0, 0.596);
            transition: 0.2s linear;
        }
        main .box-input label{
            position: absolute;
            top: 29px;
            left: 19px;
            transition: 0.2s linear;
            color: rgba(0, 0, 0, 0.715);
            pointer-events: none;

        }

        main .box-input input:focus ~label,
        main .box-input input:valid ~label{
            top:8px;
            left:7px;
            font-size: 0.8em;
            padding-right: 4px;
            padding-left: 4px;
            background-color:  rgba(255, 255, 255, 0.875);
            transition: 0.2s linear;

        }
        main .box-input input:focus{
            border:1px solid black;
            color: black;
        }
        main .box-input input:focus ~ label{
            color: black;

        }
        main .box-btn input{
            width: 100%;
            font-size: 1.3em;
            padding: 10px 30px;
            background-image: linear-gradient(to right, blue,rgb(47, 0, 255));
            border: none;
            outline: none;
            color: white;
            text-transform: uppercase;
            letter-spacing: 2px;
            border-radius: 10px;
            box-shadow: 2px 1px 10px black;
        }
        main .box-btn input:hover{
            box-shadow: 2px 3px 5px black;
            text-shadow: 2px 3px 3px black;
        }
        main .box-btn ol{
            list-style: none;
            display: flex;
            justify-content: space-between;
            padding: 5px 10px ;
            
        }
        main .box-btn ol li a{
            text-decoration: none;
            font-weight: 700;
            color: black;
        }
        main .box-btn ol li a:hover{

            color: rgba(0, 0, 0, 0.726);
        }
    </style>
</head>
<body>
    <main>
        <form action="conexao/L-conexao.php" method="POST">
            <h1>Fazer Login</h1>
            <div class="box-input"> 
                <input type="text" name="nome_usuario" required >
                <label for="nome">Nome</label>
            </div>
            <div class="box-input">
                <input type="password" name="senha" required >
                <label for="nome">Senha</label>
            </div>
            <div class="box-btn">
                <input type="submit" value="login" name="login">
                <ol>
                    <li><a href="index.php">volta</a></li>
                    <li><a href="cadastro.php">fazer Cadrastro</a></li>
                </ol>
            </div>
        </form>
    </main>
</body>
</html>