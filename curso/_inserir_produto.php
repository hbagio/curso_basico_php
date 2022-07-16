<?php
include 'conexao.php';

$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO estoque ( nomeproduto, categoria, quantidade, fornecedor) " .
        "VALUES ('$nomeproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<script>
    window.location.href = "principal.php";
</script>
