<?php 

$dbhome = "localhost"; //onde esta o banco de dados como por exemplo: pc proprio como o meu agora
$dbname = "root"; // nome do usuario do banco de dados como o 'root' do mysql que da como padrão 
$dbsenha = ""; // A senha do mysql que estiver como por exemplo o mosso que é vazio como padrão
$dbbanco = "cadastro"; // O nome do seu banco de dados que você vai usa 

$conexao = mysqli_connect($dbhome,$dbname,$dbsenha,$dbbanco) ;

$table = "SELECT * FROM gafanhotos ORDER BY id  ";//Aqui ele vai guarda o comando sql em uma varialvel 

$resut = mysqli_query($conexao,$table);//Aqui ele vai verifica a conexão e efetua eles ao mesmo tempo
 
echo "conexão bem ";

// print_r($resut);


//Aqui ele vai cria um loop com uma variavel por exemplo '$con' que vai receber as informações da variavel $resut que tem as informações do banco de dados
//A função mysqli_fetch_assoc () é usada para retornar uma matriz que vai pegar os dados da variavel deteminada  
while ($con = mysqli_fetch_assoc($resut)) {

    echo "<p>id:". $con['id'] ."<p>";
    echo "<p>nome:". $con['nome'] ."<p>";
    echo "<p>Profissao:". $con['profissao'] ."<p>";
    echo "<p>nascimento:". $con['nascimento'] ."<p>";
    echo "<p>sexo:". $con['sexo'] ."<p>";
    echo "<p>peso:". $con['peso'] ."<p>";
    echo "<p>altura:". $con['altura'] ."<p>";
    echo "<p>nacionalidade:". $con['nacionalidade'] ."<p>";
    echo "<hr>";
    // Aqui vai mostra todas as informações do banco de dados como por exemplo os nomes e as profisao, e para selecinar elas precisa colocar  '$con' a variavel e a tabela que você vai quere mostra exemplo: $con['nome da tabela'] como esta acontecendo em cima 


}

?>

