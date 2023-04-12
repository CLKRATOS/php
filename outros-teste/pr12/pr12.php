
<?php 

    $dbhost = "localhost";
    $dbnome = "root";
    $dbsenha = "";
    $dbbanco = "cadatro";

    $conexao = new mysqli( $dbhost ,$dbnome,$dbsenha,$dbbanco) or die ("erro");
    echo "bom";

    if(isset($_POST['btn']) && !empty($_POST['text']) ){

        $text = $_POST['text'];
        
        $conexao -> query("INSERT INTO texto VALUE (DEFAULT,'$text');");
        $query = $conexao -> query("SELECT * FROM texto;");
    }

    if (isset($_POST['btn2']) && !empty($_POST['nome']) ) {
        $nome = $_POST['nome'];

        $query = $conexao -> query("SELECT * FROM texto where texto like '%$nome%';");

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
  <style>
        header{
            display: flex;
            align-items: center;
            padding: 5px 20px;
            border: 1px solid;


        }
        header textarea{
            margin-left:200px ;
        }
        main{
            box-sizing: border-box;
            border: 1px solid ;
            height: 100vh;
            width: 50%;
            margin: auto;
            padding: 5px 29px;
        }
        main p {
            border: 1px solid;
            padding: 10px;
            background: black;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h2>LOGO</h2>
        <section>
            <form method="post">
                <textarea name="text" id="" cols="30" rows="10"></textarea>
                <button type="submit" name="btn">enviar</button>
            </form>
            <form method="post">
                <input type="text" name="nome">
                <button type="submit" name="btn2"></button>
            </form>
        </section>
    </header>
    <main>

        <?php
            if(isset($_POST['btn'])){
                    while($cont = mysqli_fetch_assoc($query)){
                    ?>
                        <p> <?php  echo $cont['texto'] ; ?></p>
                    <?php  
                }
            }
        
            if (isset($_POST['btn2'])) {
                ?>
                    <p> <?php  echo $cont['texto'] ; ?></p>
                <?php  
            }else{
                $query = $conexao -> query("SELECT * FROM texto;");
                while($cont = mysqli_fetch_assoc($quer)){
                    ?>
                        <p> <?php  echo $cont['texto'] ; ?></p>
                    <?php  
                }
            }
        ?>
        
    </main>
</body>
</html>