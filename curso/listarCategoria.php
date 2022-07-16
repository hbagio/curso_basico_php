<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Listagem de Categorias</title>
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
            <h4>Listagem de Categoria</h4>   
            <br>
            <table>
                <tr>
                    <td><a class="btn btn-warning btn-sm" href="principal.php" role="button"><i class="fa-solid fa-home"></i> Tela Inicial</a></td>
                     <td><a class="btn btn-warning btn-sm" href="adiconar_categoria.php" role="button"><i class="fa-solid fa-pen"></i> Cadastrar Categoria</a></td>
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
                $sql = 'SELECT * FROM categoria';
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_categoria = $array['id_categoria'];
                    $descricao_categoria = $array['descricao_categoria'];
                    echo '<tr>';
                    echo '<td>' .  $id_categoria . '</td>';
                    echo '<td>' . $descricao_categoria . '</td>';
                    //Chama tela de edição passando id por parametro
                    echo '<td><a class="btn btn-warning btn-sm" href="editarCategoria.php?id=' . $id_categoria . '" role="button"><i class="fa-solid fa-pen"></i> Editar</a></td>';
                    echo '<td><a class="btn btn-warning btn-sm" href="excluirCategoria.php?id=' . $id_categoria . '" role="button"><i class="fa-solid fa-pen"></i> Excluir</a></td>';
                    echo'</tr>';
                }
                ?>

            </table>
        </div>

        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>