<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content=" initial-scale=1.0, user-scalable=no">
        <title>Tela de Login</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script src="https://kit.fontawesome.com/812962ab98.js" crossorigin="anonymous"></script>
        <style>
            #tamnhoContainer{
                width: 350px;
                margin-top: 100px;
                border-radius: 10px;
                border: 3px solid #f3f3f3;
                -webkit-box-shadow: 10px 14px 30px -7px rgba(0,0,0,0.75);
                -moz-box-shadow: 10px 14px 30px -7px rgba(0,0,0,0.75);
                box-shadow: 10px 14px 30px -7px rgba(0,0,0,0.75);            }

        </style>

    </head>
    <body>
        <div class="container" id="tamnhoContainer">
            <center>
                <img src="imagem/cadeado.png" width="125px" height="125px">
            </center>
            <form action="index1.php" method="post">
                <label>Login</label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required="">
         
                <label>Senha</label>
                <input type="password" name="password" class="form-control" placeholder="Senha" autocomplete="off" required="">
      
            <br>
            <div style="text-align: right">
                <button  class="btn btn-sm btn-success" type="submit">Entrar</button>
            </div> 
             </form>
            <br>
        </div>
        <div style="margin-top: 20px">
 <center>
     <small>Esqueceu a Senha? Clique <a href="recuperacao_senha.php">aqui!</a></small> 
     <br>
     <small> Você não possui Cadastro? Clique <a href="cadastro_usuario_externo.php">aqui!</a></small> 
        
    </center>  
        </div>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>