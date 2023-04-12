<?php 

    session_start();
    if(!isset( $_SESSION['nome']) == true && !isset( $_SESSION['email']) == true && !isset( $_SESSION['senha']) == true){
        header("Location:teste4.php");
    }
    
    if(isset($_POST['btn'])){
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header("Location:teste4.php");
    }

?>
<form method="post">
    <input type="submit" name="btn" value="sair">
</form>
