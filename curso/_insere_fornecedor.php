<?php
include 'conexao.php';

$nomefornecedor = $_POST['nomefornecedor'];
$sql = "INSERT INTO fornecedor ( nome_fornecedor) VALUES ('$nomefornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<script>
    window.location.href = "cadastro_fornecedor.php";
</script>
