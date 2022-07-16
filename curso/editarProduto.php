<?php
include 'conexao.php';

 $id = $_GET['id'];
  
  
?>
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
            <h4>Formulário de Cadastro</h4>
            <tr>
                <td><a class="btn btn-warning btn-sm" href="principal.php" role="button"><i class="fa-solid fa-home"></i> Tela Inicial</a></td>
                <td><a class="btn btn-warning btn-sm" href="listarProdutos.php" role="button"><i class="fa-solid fa-pen"></i>Listar Produtos</a></td>
            </tr>

            <form action="_atualizar_produto.php" method="post" style="margin-top: 20px" >
                 
                <?php
                     
                    $sql = "SELECT * FROM estoque WHERE  id_estoque = $id ";
                    $buscar = mysqli_query($conexao,$sql);
                    while ($array =     mysqli_fetch_array($buscar)){
                    $id_estoque = $array['id_estoque'];
                    $nomeproduto = $array['nomeproduto'];
                    $categoria = $array['categoria'];
                    $quantidade = $array['quantidade'];
                    $fornecedor = $array['fornecedor'];                  
                   
                    ?>
                
                <div class="form-group">
                    <label>Número Produto</label>
                    <input type="number" class="form-control" name="nroproduto" value="<?php echo $id?>" disabled>
                    <input type="number" class="form-control" name="id" value="<?php echo $id?>" style="display: none">
                </div>
                <div class="form-group">
                    <label>Nome Produto</label>
                    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto?>">
                </div>
                <div class="form-group">
                    <label>Categoria</label>
                    <select class="form-control" name="categoria">
                        <option >Periférico</option>
                        <option>Hardware</option>
                        <option >Software</option>
                        <option >Celulares</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Quantidade</label>
                    <input type="number" name="quantidade" class="form-control" value="<?php echo $quantidade?>">
                </div>
                <div class="form-group">
                    <label>Fornecedor</label>
                    <select class="form-control" name="fornecedor">
                        <option >Fornecedor A</option>
                        <option >Fornecedor B</option>
                        <option >Fornecedor C</option>
                    </select>
                </div>
                <div style="text-align: right" >
               
                    <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
                </div>
                    <?php } ?>
            </form>
        </div>

        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>