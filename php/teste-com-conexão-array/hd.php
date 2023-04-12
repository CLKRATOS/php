<?php 

    $d = ["cleyton","ola","nw"];

    foreach ($d as $key) {
        $nome = $key == "cleyton"? "cleyton s": "false";
        echo $nome;
        break;
    }

?>