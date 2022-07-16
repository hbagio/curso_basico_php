<?php
require 'conexao.php';
$id= $_POST['id'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

 $sql = "UPDATE estoque SET nomeproduto='$nomeproduto',categoria='$categoria',quantidade=$quantidade,fornecedor='$fornecedor' 
    WHERE id_estoque = $id";
 
 $atualizar = mysqli_query($conexao, $sql);
 
?>

<script>
    window.location.href = "listarProdutos.php";
</script>
