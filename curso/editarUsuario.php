<?php
include 'conexao.php';

$id = $_GET['id'];
?>
<head>
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Alteração de Usuário</title>
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
        <h4>Alterar Usuário</h4>
        <tr>
            <td><a class="btn btn-warning btn-sm" href="principal.php" role="button"><i class="fa-solid fa-home"></i> Tela Inicial</a></td>
            <td><a class="btn btn-warning btn-sm" href="listarUsuarios.php" role="button"><i class="fa-solid fa-pen"></i>Listagem de Usuário</a></td>
        </tr>

        <form action="_atualizar_usuario.php?operacao=editar&id" method="post" style="margin-top: 20px" >

            <?php
            $sql = "SELECT * FROM usuarios WHERE  id_usuario  = $id ";
            $buscar = mysqli_query($conexao, $sql);
            while ($array = mysqli_fetch_array($buscar)) {
                $id_usuario = $array['id_usuario'];
                $nomeusuario = $array['nomeusuario'];
                $emailusuario = $array['emailusuario'];
                $senhausuario = $array['senhausuario'];
                $nivelusuario = $array['nivelusuario'];
                ?>

                <div class="form-group">
                    <label>Código do Usuários</label>
                    <input type="number" class="form-control" name="id_usuario" value="<?php echo $id_usuario ?>" disabled>
                    <input type="number" class="form-control" name="id_usuario" value="<?php echo $id_usuario ?>" style="display: none">
                </div>
                <div class="form-group">
                    <label>Nome usuáro</label>
                    <input type="text" class="form-control" name="nomeusuario" value="<?php echo $nomeusuario ?>" autocomplete="off" required="">
                </div>
                <div class="form-group">
                    <label>Email do Usuário</label>
                    <input type="text" class="form-control" name="emailusuario" value="<?php echo $emailusuario ?>" autocomplete="off" required="">
                </div>

            
               <div class="form-group">
                    <labe>Nivel de Acesso</labe>
                    <select name="nivelusuario" class="form-control">
                        
                       <?php 
                         if ($nivelusuario == 1) {
                       ?> 
                        <option value="1">Administrador</option>
                        <option value="2">Funcionário</option>
                        <option value="3">Conferente</option>
                         <?php } elseif ($nivelusuario == 2) {
                       ?> 
                        <option value="2">Funcionário</option>
                        <option value="1">Administrador</option>
                        <option value="3">Conferente</option> 
                         <?php } else {
                       ?> 
                        <option value="3">Conferente</option> 
                        <option value="1">Administrador</option>
                        <option value="2">Funcionário</option>
                        <?php } ?>
                        
                        

                    </select>
               </div>

            
                    <br>
                <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
        </div>
    <?php } ?>
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