<?php

$id= $_POST['id'];
$nroproduto = $_POST['nroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

echo $sql = "UPDATE estoque SET nomeproduto='$nomeproduto',categoria='$categoria',quantidade=$quantidade,fornecedor='$fornecedor' 
    WHERE id_estoque = $id";
?>