<?php 

    $array = ["cleyton" => "12" ,"kratos" => "23" ,"geison" => "11","caua" => "22"];
    // $nome = $_POST["nome"];
    // $senha = $_POST["senha"];
    include_once("va.php");
    
    foreach ($array as $usu => $senh) {
        $login = ($usu === $nome && $senh === $senha)?true:false;
        if($login == true )break;
    }


?>