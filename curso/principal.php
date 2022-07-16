<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Listagem de Produtos</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script src="https://kit.fontawesome.com/812962ab98.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <?php
        include 'conexao.php';
        session_start();

        if ((!isset($_SESSION['usuario']) == true) and ( !isset($_SESSION['senhausuario']) == true)) {
            header('location:index.php');
        }

        $usuario = $_SESSION['usuario'];

        $sql = "select nivelusuario from usuarios where emailusuario = '$usuario' and status = 'Ativo ' ";
        $buscar = mysqli_query($conexao, $sql);
        $array_retorno = mysqli_fetch_array($buscar);
        $nivel = $array_retorno['nivelusuario'];
        ?>
        <div class="container" style="margin-top: 100px"   >
            <div class="row">
<?php
if (($nivel == 1) || ($nivel == 2)) {
    ?>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastros de Produtos</h5>
                                <p class="card-text">Acessar a Listagem e o Cadastro de Produtos</p>
                                <a href="listarProdutos.php" class="btn btn-primary">Acessar</a>
                            </div>
                        </div>
                    </div>
<?php } ?>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro de Categorias</h5>
                            <p class="card-text">Acessar a Listagem e o Cadastro de Categorias</p>
                            <a href="listarCategoria.php" class="btn btn-primary">Acessar</a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cadastro de Fornecedores</h5>
                            <p class="card-text">Acessar a Listagem e o Cadastro de Fornecedores</p>
                            <a href="listarFornecedor.php" class="btn btn-primary">Acessar</a>
                        </div>
                    </div>
                </div>
                <?php
                    if ($nivel == 1) {
                 ?>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Cadastro de Usuário</h5>
                                <p class="card-text">Acessar a Listagem e o Cadastro de Usuários</p>
                                <a href="listarUsuarios.php" class="btn btn-primary">Acessar</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>