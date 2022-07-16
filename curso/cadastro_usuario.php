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
        <?php
        session_start();

        if ((!isset($_SESSION['usuario']) == true) and ( !isset($_SESSION['senhausuario']) == true)) {
            header('location:index.php');
        }

        $logado = $_SESSION['usuario'];
        ?>
        <div class="container" style="width: 400px; margin-top:40px">
            <h4>Cadastro de Usuário</h4>
            <tr>
                <td><a class="btn btn-warning btn-sm" href="principal.php" role="button"><i class="fa-solid fa-home"></i> Tela Inicial</a></td>
                <td><a class="btn btn-warning btn-sm" href="listarUsuarios.php" role="button"><i class="fa-solid fa-home"></i> Consulta de Usuários</a></td>

            </tr>
            <form action="_insere_usuario.php" method="post">
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
                    <input type="password" onBlur="validaSenhaSegura(this);" id ="senhausuario" name="senhausuario" class="form-control" placeholder="Senha do Usuário" autocomplete="off" required="">
                </div>
                <div class="form-group">
                    <label>Repetir Senha </label>
                    <input type="password"  id ="senhausuario2" name="senhausuario2" oninput="validaSenhaIgual(this)" class="form-control" placeholder="Repetir Senha" autocomplete="off" required="">
                    <small>Precisar ser igual a senha digitada acima.
                </div>
                <br>
                <div class="form-group">
                    <labe>Nivel de Acesso</labe>
                    <select name="nivelusuario" class="form-control">

                        <option value="1">Administrador</option>
                        <option value="2">Funcionário</option>
                        <option value="3">Conferente</option>

                    </select>
                    <br>
                </div>

                <div style="text-align: right">
                    <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
                </div>

            </form>

        </div>

        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script>
                        function  validaSenhaIgual(input) {
                            var senha1 = document.getElementById('senhausuario').value;
                            var senha2 = document.getElementById('senhausuario2').value;

                            if (senha2 != senha1) {
                                input.setCustomValidity('Senha informada não é igual a anterior. Digite novamente');
                            } else {
                                input.setCustomValidity('');
                            }
                        }

                        function  validaSenhaSegura(input) {
                            var senha = document.getElementById('senhausuario').value;
                            var numeros = /([0-9])/;
                            var alfabeto = /([a-zA-Z])/;
                            var chEspeciais = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;

                            if (senha.length >= 6 && senha.match(numeros) && senha.match(alfabeto) && senha.match(chEspeciais))
                            {
                                input.setCustomValidity('');
                            } else {
                                input.setCustomValidity('Senha informada é Fraca! Deve conter Letras, Números e Caracteres Especiais e mais de 5 Caracateres');
                            }
                        }
                        

        </script>


    </body>

</html>