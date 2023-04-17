<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            background-image:linear-gradient( 50deg, rgb(0, 117, 172),rgb(0, 200, 10));
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

        }

        main .box-input input:focus ~label,
        main .box-input input:valid ~label{
            top:8px;
            left: 7px;
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
        main .box-btn a {
            text-align: left;
            border: 1px solid;
            text-decoration: none;
            margin: 10px;
            color: black;
        }
    </style>
</head>
<body>
    <main>
        <form action="c-usuario.php" method="post">
            <h1>Fazer Login</h1>
            <div class="box-input">
                <input type="text" name="nome_usuario" required >
                <label for="nome">Nome do usuario</label>
            </div>
            <div class="box-input">
                <input type="text" name="cidade" required >
                <label for="nome">cidade</label>
            </div>
            <div class="box-input">
                <input type="text" name="endereco" required >
                <label for="nome">Endereço</label>
            </div>
            <div class="box-input">
                <input type="email" name="email" required >
                <label for="nome">Email</label>
            </div>
            <div class="box-btn">
                <input type="submit" value="cadrastra" name="cadrastra">
                <a href="../sistema/usuario.php">volta</a>
            </div>
        </form>
    </main>
</body>
</html>