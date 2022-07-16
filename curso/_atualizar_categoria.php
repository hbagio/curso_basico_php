<?php
require 'conexao.php';
$id_categoria= $_POST['id_categoria'];
$descricao_categoria = $_POST['descricao_categoria'];


 $sql = "UPDATE categoria SET descricao_categoria='$descricao_categoria' WHERE id_categoria  = $id_categoria";
 
mysqli_query($conexao, $sql);
 
?>
<script>
    window.location.href = "listarCategoria.php";
</script>



