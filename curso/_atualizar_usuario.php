<?php

require 'conexao.php';
include 'script/password.php';

$operacao = $_GET['operacao'];


if ($operacao == 'ativo') {
    $id_usuario = (int)$_GET['id'];
    $sql = "UPDATE usuarios SET  status ='Ativo'  WHERE id_usuario   = $id_usuario";

    
}elseif($operacao == 'desativo'){
    $id_usuario = (int)$_GET['id'];
    $sql = "UPDATE usuarios SET  status ='Desativo'  WHERE id_usuario   = $id_usuario";

}else if ($operacao == 'editar') {
    $id_usuario = (int)$_POST['id_usuario'];
    $nomeusuario = trim($_POST['nomeusuario']);
    $emailusuario = trim($_POST['emailusuario']);
    $nivelusuario = $_POST['nivelusuario'];
    $sql = "UPDATE usuarios SET nomeusuario='$nomeusuario', emailusuario = '$emailusuario', nivelusuario = '$nivelusuario'  WHERE id_usuario   = $id_usuario";
    
} else if ($operacao == 'deletar') {

   $id_usuario = (int)$_GET['id'];
    $sql = "delete from usuarios WHERE id_usuario   = $id_usuario";
}


//echo $sql;
mysqli_query($conexao, $sql);
//Redireciona para a pagina principal
header("Location: listarUsuarios.php")

?>





