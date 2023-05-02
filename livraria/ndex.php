<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/indx.css ">
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
            background-color:rgba(255, 255, 255, 0.875);
            width: 300px;
            border: 1px solid black;
            text-align: center;
            padding: 15px;
            display: flex;
            flex-direction: column;
            align-items: center ;
            border-radius:10px;
            font-weight: 800;
            box-shadow: 0 5px 10px black, inset 1px 1px 4px black;
        }
        main a{
            display: block;
            margin: 10px 0;
            padding:10px 15px;
            border:1px solid;
            width: 200px;
            text-decoration: none;
            text-transform: uppercase;
            color:white;
            background-color:black;
            border-radius:10px;
            border:none

        } 
        main a:hover{
            background-color: rgba(0, 0, 0, 0.841);
            box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.839);
            border:none;
            
        }
    </style>
</head>
<body>
    <main>
        <h1>Escolha uma das formas de loga</h1>
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadrata</a>
    </main>
</body>
</html>