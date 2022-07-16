<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Recuperar Senha</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script src="https://kit.fontawesome.com/812962ab98.js" crossorigin="anonymous"></script>

    </head>
    <body>

        <div class="container" style="width: 400px; margin-top:40px">
            <h4>Recuperação de Senha</h4>
            <br>
            <form action="_recupara_senha_email.php" method="post">
                <div class="form-group">
                    <label>Informe seu Email</label>
                    <br>

                    <input type="text" id="emailusuario" name="emailusuario" class="form-control" placeholder="Email do Usuário" autocomplete="off" required="">
                    <br>
                    <span>Ao confirmar uma senha temporaria será enviado para email informado</span>
                    <br>
                </div>


                <tr>
                    <td>
                        <button type="submit" class="btn btn-sm btn-success">Recuperar Senha</button>
                    </td>

                    <td>
                        <a class="btn btn-warning btn-sm" href="index.php" role="button"><i class="fa-solid fa-home"></i> Tela de Login</a>
                    </td>
                </tr>


            </form>

        </div>

        <script type="text/javascript" src="js/bootstrap.js"></script>



    </body>

</html>