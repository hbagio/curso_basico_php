<?php
require 'conexao.php';
$id_fornecedor= $_POST['id_fornecedor'];
$nome_fornecedor = $_POST['nome_fornecedor'];


 $sql = "UPDATE fornecedor SET nome_fornecedor='$nome_fornecedor' WHERE id_fornecedor  = $id_fornecedor";
 
mysqli_query($conexao, $sql);
 
?>
<script>
    window.location.href = "listarFornecedor.php";
</script>



