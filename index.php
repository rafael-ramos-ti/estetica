<?php
// isset informa se a variável foi iniciada
if (isset($_POST["logar"])) {
    //se classe Usuaros ja foi incluido nao sera incluido novemente
    require_once 'DAO/Usuarios.php';
    $usuarios = new Usuarios();
    $usr = $usuarios->localizarPorLogin($_POST['login']);
    //verifica se o password coresponde com o hash
    if ($usr && password_verify($_POST["senha"], $usr["senha"])) {
        //inicia nova sessao ou carega existente
        session_start();
        $_SESSION["login"] = $usr["login"];
        //envia um cabeçalho, redireciona para menu.php
        header("LOCATION: menu.php");
        //termina a execuçao do script
        exit();
    } else {
        $msg = "Usuário ou senha inválidos";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">

        <title>Login</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="signin.css" rel="stylesheet">
        <style>
        body {
            background: #F8E0F7;
        }
        </style>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div class="container">

            <form class="form-signin" method="post">
                <h2 class="form-signin-heading">Informe o login:</h2>
                <div>
                    <label>Usuário:</label>
                    <input name="login" type="text" class="form-control" placeholder="Usuário" required="" autofocus><br>
                </div>
                <div>
                    <label for="inputPassword" class="sr-only">Senha:</label>
                    <input name="senha" type="password" id="inputPassword" class="form-control" placeholder="Senha" required=""><br>
                </div>
                <div>
                    <button name="logar" class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
                </div>
            </form>
            
            <?php
                //se variavel msg foi iniciada
                if(isset($msg))
                    echo '<div class="alert alert-danger' . $msg . '</div>';
            ?>

        </div> <!-- /container -->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
