<?php
include 'conexao.php';

$nomecategoria = $_POST['nomecategoria'];
$sql = "INSERT INTO categoria ( descricao_categoria) VALUES ('$nomecategoria')";

$inserir = mysqli_query($conexao, $sql);

?>

<script>
    window.location.href = "adiconar_categoria.php";
</script>
