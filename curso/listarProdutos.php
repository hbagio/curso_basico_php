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
        include './conexao.php';
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

        <div class="container" style="margin-top: 40px">
            <h4>Listagem de Produtos</h4>   
            <br>
            <table>
                <tr>
                    <td><a class="btn btn-warning btn-sm" href="principal.php" role="button"><i class="fa-solid fa-home"></i> Tela Inicial</a></td>
                    <td><a class="btn btn-warning btn-sm" href="cadastrarProduto.php" role="button"><i class="fa-solid fa-pen"></i> Cadastrar Protuto</a></td>
                </tr>
            </table>
            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Fornecedor</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>

                <?php
                include 'conexao.php';
                $sql = 'SELECT * FROM estoque';
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_estoque = $array['id_estoque'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];
                    echo '<tr>';
                    echo '<td>' . $id_estoque . '</td>';
                    echo '<td>' . $nomeproduto . '</td>';
                    echo '<td>' . $categoria . '</td>';
                    echo '<td>' . $quantidade . '</td>';
                    echo '<td>' . $fornecedor . '</td>';
                    //Chama tela de edição passando id por parametro
                    echo '<td><a class="btn btn-warning btn-sm" href="editarProduto.php?id=' . $id_estoque . '" role="button"><i class="fa-solid fa-pen"></i> Editar</a></td>';
                    if ($nivel == 1){
                        echo '<td><a class="btn btn-warning btn-sm" href="excluirProduto.php?id=' . $id_estoque . '" role="button"><i class="fa-solid fa-pen"></i> Excluir</a></td>';
                    };
                    echo'</tr>';
                }
                ?>

            </table>
        </div>

        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>