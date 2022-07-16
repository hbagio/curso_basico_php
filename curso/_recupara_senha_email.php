<?php

include 'conexao.php';

$email_usuario = $_POST['emailusuario'];

$sql = "select 1 from usuarios where emailusuario = '$email_usuario' ";

$retorno = mysqli_num_rows(mysqli_query($conexao, $sql));

echo($retorno);

if ($retorno == 0) {
    header("Location: email_nao_encontrado.php");
} else {
    echo('Achou');

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $emailRemetente = "bagiohn@gmail.com";
    $emailDestinatario = $email_usuario;
    $emailAssunto = "Recuperação de Senha";
    $emailMensagem = "Email para recuperação de Senha. \n A partir de agora sua senha será 12345";
    $emailCabecalho = 'From: seuemail@gmail.com' . "\r\n" .
            'Reply-To: bagiohn@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    if (mail($emailDestinatario, $emailAssunto, $emailMensagem, $emailCabecalho)) {
        echo "Email Enviado";
    } else {
        echo "Email sending failed";
    }
}
?>

