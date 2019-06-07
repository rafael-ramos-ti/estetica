<?php
//se a classe Usuarios ja foi inclusa não sera incluida novamente
require_once 'autentica.php';
require_once 'DAO/Usuarios.php';
//informa se a variavel foi iniciada
if (isset($_POST["cadastrar"])) {
    if ($_POST["senha"] == $_POST["repsenha"]) {
        
        $usuarios = new Usuarios();

        if ($usuarios->inserir($_POST["login"], $_POST["senha"])) {
            //redireciona para menu.php
            header("Location: menu.php");
            exit();
        } else {
            $msg = "Não inseriu usuário\n";
        }
    } else {
        $msg = "As senhas não conferem";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cadastro</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once 'cabecalho.php'; ?>
        <div class="container">
            <h3 class="text-center">CADASTRAR USUÁRIO</h3>
            <form method="post" class="container">
                <div>
                    <label>Usuário:</label>
                    <input type="text" name="login" required="" autofocus="" class="form-control"><br>
                </div>
                <div>
                    <label>Senha:</label>
                    <input type="password" name="senha" required="" class="form-control"><br>
                </div>
                <div>
                    <label>Repita a Senha:</label>
                    <input type="password" name="repsenha" required="" class="form-control"><br>
                </div>
                <div>
                    <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success">
                </div>
            </form>
        </div>

        <?php
        if (isset($msg))
            echo '<div class="alert alert-danger">' . $msg . '</div>';
        ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
