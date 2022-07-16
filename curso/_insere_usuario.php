<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$email = $_POST['emailusuario'];
$senha = sha1($_POST['senhausuario']);
$nivel = $_POST['nivelusuario'];
$status = 'Ativo';

$sql = "INSERT INTO usuarios ( nomeusuario,emailusuario,senhausuario,nivelusuario,status) VALUES ('$nomeusuario','$email','$senha' ,$nivel,'$status')";


$inserir = mysqli_query($conexao, $sql);

?>

<script>
    window.location.href = "cadastro_usuario.php";
</script>
