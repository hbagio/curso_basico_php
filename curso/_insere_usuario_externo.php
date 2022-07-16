<?php
include 'conexao.php';
include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$email = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
//$nivel = $_POST['nivelusuario'];
$status = 'Inativo';

$sql = "INSERT INTO usuarios ( nomeusuario,emailusuario,senhausuario,status) VALUES ('$nomeusuario','$email',sha1('$senha') ,'$status')";


$inserir = mysqli_query($conexao, $sql);

?>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    
    <div class="container" style="width: 400px">
        <center>
            <h3>Usuário cadastrado com sucesso, esperando aprovação</h3>
            <div style="margin-top: 10px">
                <a href="cadastro_usuario_externo.php" class="btn btn-warning btn-sm" style="color: #fff">Voltar</a>
            </div>
            
        </center>
    </div>