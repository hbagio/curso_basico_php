<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Adicionar Categoria</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script src="https://kit.fontawesome.com/812962ab98.js" crossorigin="anonymous"></script>
        <style type="text/css">
            #tamanhoCotainer{
                width: 500px;
            }
            #botao{
                background-color: #CC546F; /*Cor do Fundo*/
                color: #ffffff; /*Cor da Letra*/
            }
        </style>

    </head>
    <body>
  <?php
        session_start();

        if ((!isset($_SESSION['usuario']) == true) and ( !isset($_SESSION['senhausuario']) == true)) {
            header('location:index.php');
        }

        $logado = $_SESSION['usuario'];
        ?>
        <div class="container" id="tamanhoCotainer" style="margin-top: 40px">
            <h4>Formulário de Cadastro de Catagoria</h4>
            <tr>
                <td><a class="btn btn-warning btn-sm" href="principal.php" role="button"><i class="fa-solid fa-home"></i> Tela Inicial</a></td>
                <td><a class="btn btn-warning btn-sm" href="listarCategoria.php" role="button"><i class="fa-solid fa-pen"></i> Listagem de Categoria</a></td>
            </tr>
            <form action="_inserir_categoria.php" method="post" style="margin-top: 20px" >

                <div class="form-group">
                    <label>Nome Categoria</label>
                    <input type="text" class="form-control" name="nomecategoria" placeholder="Nome da Categoria" autocomplete="off" required>
                </div>
                <div style="text-align: right" >
                    <br>
                    <button type="submit" id="botao" class="btn btn-warning btn-sm">Cadastrar</button>
                </div>
            </form>
        </div>

        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>