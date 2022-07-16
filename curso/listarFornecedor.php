<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Listagem de Fornecedores</title>
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
        <div class="container" style="margin-top: 40px">
            <h4>Listagem de Fornecedor</h4>   
            <br>
            <table>
                <tr>
                    <td><a class="btn btn-warning btn-sm" href="principal.php" role="button"><i class="fa-solid fa-home"></i> Tela Inicial</a></td>
                     <td><a class="btn btn-warning btn-sm" href="cadastro_fornecedor.php" role="button"><i class="fa-solid fa-pen"></i> Cadastrar Fornecedor</a></td>
                </tr>
            </table>
            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>

                <?php
                include 'conexao.php';
                $sql = 'SELECT * FROM fornecedor';
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_fornecedor  = $array['id_fornecedor'];
                    $nome_fornecedor = $array['nome_fornecedor'];
                    echo '<tr>';
                    echo '<td>' .  $id_fornecedor . '</td>';
                    echo '<td>' . $nome_fornecedor . '</td>';
                    //Chama tela de edição passando id por parametro
                    echo '<td><a class="btn btn-warning btn-sm" href="editarFornecedor.php?id=' . $id_fornecedor . '" role="button"><i class="fa-solid fa-pen"></i> Editar</a></td>';
                    echo '<td><a class="btn btn-warning btn-sm" href="excluirFornecedor.php?id=' . $id_fornecedor . '" role="button"><i class="fa-solid fa-pen"></i> Excluir</a></td>';
                    echo'</tr>';
                }
                ?>

            </table>
        </div>

        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>