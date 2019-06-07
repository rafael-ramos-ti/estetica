<?php
require_once './autentica.php';
require_once './DAO/Consulta.php';

$consulta = new Consulta();

if (isset($_POST["salvar"])) {
    if ($consulta->inserir($_GET["id"], $_POST["descricao"], $_POST["tipo"])) {
        header("Location: listarClientes.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CONSULTA</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once 'cabecalho.php'; ?>
        <div class="container">
            <h3 class="text-center">CONSULTA</h3>
            <form method="post">
                <div>
                    <label>Descrição:</label><br>
                    <textarea name="descricao" rows="15" cols="159" placeholder="Descrição......" required=""></textarea><br>
                </div>
                <div class="form-control checkbox">
                    <label>Tipo de consulta:</label>
                    <label><input type="radio" name="tipo" value="0" required="">Facial</label>
                    <label><input type="radio" name="tipo" value="1" required="">Corporal</label>
                </div>
                <!-- não implementado no momento
                <div class="img-responsive">
                    <label>Caregar Imagem:</label>
                    <input type="file" name="img">
                </div> -->
                <div class="form-group">
                    <button type="submit" name="salvar" class="btn btn-success">
                        <span class="glyphicon glyphicon-ok"></span>
                        Salvar
                    </button>
                </div>
        </div>
    </form>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>