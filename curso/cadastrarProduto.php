<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Formulário de Cadastro</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

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

            <h4>Formulário de Cadastro de Produto</h4>
            <a href ="listarProdutos.php"  role="button"  class="btn btn-warning btn-sm">Voltar</a>
            <form action="_inserir_produto.php" method="post" style="margin-top: 20px" >

                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" placeholder="Nome do Produto" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                        <?php
                        include 'conexao.php';
                        $sql = 'SELECT * FROM categoria';
                        $busca = mysqli_query($conexao, $sql);

                        while ($array = mysqli_fetch_array($busca)) {
                            $id_categoria = $array['id_categoria'];
                            $descricao_categoria = $array['descricao_categoria'];

                            echo ('<option >' . $descricao_categoria . '</option>');
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" name="quantidade" class="form-control" placeholder="Quantidade do Produto">
                </div>
                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                       <?php
                        include 'conexao.php';
                        $sql = 'SELECT * FROM fornecedor';
                        $busca = mysqli_query($conexao, $sql);

                        while ($array = mysqli_fetch_array($busca)) {
                            $id_fornecedor = $array['id_fornecedor'];
                            $nome_fornecedor = $array['nome_fornecedor'];

                            echo ('<option >' .  $nome_fornecedor . '</option>');
                        }
                        ?>
                    </select>
                </div>
                <div style="text-align: right" >
                    <br>
                    <button type="submit" id="botao" class="btn btn-warning btn-sm">Cadastrar Produto</button>
                    <a href ="adiconar_categoria.php"  role="button"  class="btn btn-warning btn-sm">Cadatrar Categoria</a>
                    <a href ="cadastro_fornecedor.php"  role="button"  class="btn btn-warning btn-sm">Cadatrar Fornecedor</a>
                </div>
            </form>
        </div>

        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>