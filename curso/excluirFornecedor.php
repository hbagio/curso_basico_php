<?php
require 'conexao.php';
$id= $_GET['id'];


 $sql = "delete from fornecedor WHERE id_fornecedor = $id";
 
 mysqli_query($conexao, $sql);
 
?>

<script>
    window.location.href = "listarFornecedor.php";
</script>
