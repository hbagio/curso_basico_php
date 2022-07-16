<?php
require 'conexao.php';
$id= $_GET['id'];


 $sql = "delete from categoria WHERE id_categoria = $id";
 
 mysqli_query($conexao, $sql);
 
?>

<script>
    window.location.href = "listarCategoria.php";
</script>
