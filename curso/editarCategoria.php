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
                <td><a class="btn btn-warning btn-sm" href="index.php" role="button"><i class="fa-solid fa-home"></i> Tela Inicial</a></td>
                <td><a class="btn btn-warning btn-sm" href="listarCategoria.php" role="button"><i class="fa-solid fa-pen"></i>Listar Categoria</a></td>
            </tr>

            <form action="_atualizar_categoria.php" method="post" style="margin-top: 20px" >
                 
                <?php
                     
                    $sql = "SELECT * FROM categoria WHERE  id_categoria = $id ";
                    $buscar = mysqli_query($conexao,$sql);
                    while ($array =     mysqli_fetch_array($buscar)){
                    $id_categoria = $array['id_categoria'];
                    $descricao_categoria = $array['descricao_categoria'];
              
                   
                    ?>
                
                <div class="form-group">
                    <label>Número Categoria</label>
                    <input type="number" class="form-control" name="id_categoria" value="<?php echo $id_categoria?>" disabled>
                    <input type="number" class="form-control" name="id_categoria" value="<?php echo $id_categoria?>" style="display: none">
                </div>
                <div class="form-group">
                    <label>Descrição Categoria</label>
                    <input type="text" class="form-control" name="descricao_categoria" value="<?php echo $descricao_categoria?>">
                </div>
               
                    <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
                </div>
                    <?php } ?>
            </form>
        </div>

        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>