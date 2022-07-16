<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro de Usuário</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script src="https://kit.fontawesome.com/812962ab98.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container" style="width: 400px; margin-top:40px">
            <h4>Cadastro de Usuário</h4>
            <tr>
                <td><a class="btn btn-warning btn-sm" href="Index.php" role="button"><i class="fa-solid fa-home"></i> Tela Inicial</a></td>
    
            </tr>
            <form action="_insere_usuario_externo.php" method="post">
                <div class="form-group">
                    <label>Nome do Usuário</label>
                    <input type="text" id="nomeusuario" name="nomeusuario" class="form-control" placeholder="Nome do Usuário" autocomplete="off" required="">
                </div>
                <div class="form-group">
                    <label>Email do Usuário</label>
                    <input type="" id="emailusuario" name="emailusuario" class="form-control" placeholder="Email do Usuário" autocomplete="off" required="">
                </div>
                <div class="form-group">

                    <label>Senha do Usuário</label>
                    <input type="password" id ="senhausuario" name="senhausuario" class="form-control" placeholder="Senha do Usuário" autocomplete="off" required="">
                </div>
                <div class="form-group">
                    <label>Repetir Senha </label>
                    <input type="password"  id ="senhausuario2" name="senhausuario2" oninput="validasenha(this)" class="form-control" placeholder="Repetir Senha" autocomplete="off" required="">
                    <small>Precisar ser igual a senha digitada acima.
                </div>
                <br>
                

                <div style="text-align: right">
                    <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
                </div>

            </form>

        </div>
    

    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>
        function  validasenha(input) {
            var senha1 = document.getElementById('senhausuario').value;
            var senha2 = document.getElementById('senhausuario2').value;

            if (senha2 != senha1) {
                input.setCustomValidity('Senha informada não é igual a anterior. Digite novamente');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>


</body>

</html>