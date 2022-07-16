<?php
require 'conexao.php';
$id= $_GET['id'];


 $sql = "delete from estoque WHERE id_estoque = $id";
 
 $atualizar = mysqli_query($conexao, $sql);
 
?>

<script>
    window.location.href = "listarProdutos.php";
</script>
