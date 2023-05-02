<?php 
    include_once("conexao/conexao.php");
    $sql = $conexao -> query('SELECT * FROM aluga ');
    while($cont = mysqli_fetch_assoc($sql)){
        ?>
        <tr>
            <td><?php echo $cont['livro_cod'];?></td>
            <td><input type="hidden" value="<?php echo $cont['livro_cod'];?>" class="h"></td>
            
        </tr>                     
        <?php
    }
?>
<script>
    
    let n = document.querySelectorAll(".h");
    console.log(n.value)
    n.forEach(e => {
        
        if(e.value == 1){
            console.log("ola")
        }
    });

</script>