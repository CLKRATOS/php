  <?php 

    define("valo",100);
    echo valo,"<br>";
    $valo = array("valo","i","valo","i");
    var_dump($valo);
    echo gettype($valo);
?>

<form  method="get">
    <select name="o" id="o">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <input type="submit">
</form> 