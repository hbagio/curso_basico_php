<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Listagem de Usuários</title>
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
            <h4>Listagem de Usurários</h4>   
            <br>
            <table>
                <tr>
                     <td><a class="btn btn-warning btn-sm" href="principal.php" role="button"><i class="fa-solid fa-home"></i> Tela Inicial</a></td>
                     <td><a class="btn btn-warning btn-sm" href="cadastro_usuario.php" role="button"><i class="fa-solid fa-pen"></i> Cadastrar Usuário</a></td>
                </tr>
            </table>
            <table class="table">

                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome Usuários</th>
                        <th scope="col">Email</th>
                        <th scope="col">Nivel Usuário</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>

                <?php
                include 'conexao.php';
                $sql = 'SELECT * FROM usuarios';
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_usuario  = $array['id_usuario'];
                    $nomeusuario = $array['nomeusuario'];
                    $emailusuario = $array['emailusuario'];
                    $nivelusuario = $array['nivelusuario'];
                    $status = $array['status'];
                    if ($nivelusuario == 1){
                        $nivelusuariotexto = 'Administrador' ;
                    } elseif ($nivelusuario == 2){
                        $nivelusuariotexto = 'Funcionário' ;
                    }elseif ($nivelusuario == 3){
                        $nivelusuariotexto = 'Conferente' ;
                    };
                    
                    echo '<tr>';
                    echo '<td>' . $id_usuario . '</td>';
                    echo '<td>' . $nomeusuario . '</td>';
                    echo '<td>' . $emailusuario . '</td>';
                    echo '<td>' . $nivelusuariotexto . '</td>';
                    echo '<td>' . $status . '</td>';
                    //Chama tela de edição passando id por parametro
                    echo '<td><a class="btn btn-warning btn-sm" href="editarUsuario.php?id=' . $id_usuario . '" role="button"><i class="fa-solid fa-pen"></i> Editar</a></td>';
                    if ( $status == 'Desativo'){
                    echo '<td><a class="btn btn-warning btn-sm" href="_atualizar_usuario.php?id=' . $id_usuario . '&operacao=ativo" role="button"><i class="fa-solid fa-pen"></i> Ativar</a></td>';
                    } else{
                        echo '<td><a class="btn btn-warning btn-sm" href="_atualizar_usuario.php?id=' . $id_usuario . '&operacao=desativo" role="button"><i class="fa-solid fa-pen"></i> Desativar</a></td>';
                    }
                    echo '<td><a class="btn btn-warning btn-sm" href="_atualizar_usuario.php?id=' . $id_usuario . '&operacao=deletar" role="button"><i class="fa-solid fa-pen"></i> Excluir</a></td>';
                    echo'</tr>';
                }
                ?>

            </table>
        </div>

        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>