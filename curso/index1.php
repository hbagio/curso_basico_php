
<?php

include 'conexao.php';
session_start();
$usuario = trim($_POST['usuario']);
$senhausuario = sha1($_POST['password']);

$sql = "select emailusuario from usuarios where emailusuario = '$usuario' and senhausuario = '$senhausuario' and status = 'Ativo';";

$busca = mysqli_query($conexao, $sql);

$total = mysqli_num_rows($busca);


if ($total > 0) {

    $_SESSION['usuario'] = $usuario;
    $_SESSION['senhausuario'] = $senhausuario;
    header("Location: principal.php");
} else {
    unset($_SESSION['usuario']);
    unset($_SESSION['senhausuario']);
    header("Location: erro_login.php");
}
?>

