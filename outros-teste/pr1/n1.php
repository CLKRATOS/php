<?php 

$array = [
    "nome" => array("um"=>1,"dois"=>2,"tres"=>3,"quarto"=>4),
    "nome1" => array(11,22,33,44),
    "dados"=> ["um"=>1,"dois"=>2,"tres"=>3,"quarto"=>4]
];
foreach ($array["dados"] as $key => $value) {
    echo " $key :$value <br>";
}
foreach($array["nome1"] as $dados => $h ){
    echo "$dados:$h<br>";
}



?>