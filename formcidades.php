<?php
require_once 'autentica.php';
require_once 'DAO/Cidade.php';

$cidade = new Cidade();
$acao = $_GET["acao"] ?? "";

//incluir
if ($acao == 'incluir' && isset($_POST['salvar'])) {
    if($cidade->inserir($_POST["nome"], $_POST["cep"])){
        echo '<script> alert("' . $_POST["nome"]. ' incluído com sucesso!!"); </script>';
        echo "<script>window.location = 'listarcidades.php';</script>"; 
        //header("Location: menu.php");
        exit();
    } else {
        echo '<script> alert("Não foi possível incluir a cidade, tente novamente!"); </script>';
    }
}
//editar
if ($acao == 'editar' && isset($_POST['salvar'])) {
    if($cidade->atualizar($_GET["codcidade"],$_POST["nome"], $_POST["cep"])){
        echo '<script> alert("Alterado para ' . $_POST["nome"].' com sucesso!!"); </script>';
        echo "<script>window.location = 'listarcidades.php';</script>"; 
        //header("Location: listarcidades.php");
        exit();
    } else {
        echo '<script> alert("Não foi possível alterar os dados da cidade, tente novamente!"); </script>';
    }
}
//listar os dados do cliente que esta sendo editado
if ($acao == 'editar' && isset($_GET['codcidade'])) {
    $linha = $cidade->encontrarPorCod($_GET['codcidade']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NOVA CIDADE</title>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once 'cabecalho.php'; ?>
        <div class="container">
            <h3 class="text-center"><?php echo ($acao == "incluir" ? "CADASTRO DE" : "ALTERAR DADOS DA") ?> CIDADE:</h3>
            <form method="post" class="container">
                <div>
                    <label>Nome da cidade:</label>
                    <input type="text" name="nome" required="" autofocus="" class="form-control" value="<?php if (isset($linha)) echo $linha['nome'] ?>"><br>
                </div>
                <div>
                    <label>Cep:</label>
                    <input type="number" name="cep" required="" class="form-control" value="<?php if (isset($linha)) echo $linha['cep'] ?>"><br>
                </div>

                <div class="form-group">
                    <button type="submit" name="salvar" class="btn btn-success">
                        <span class="glyphicon glyphicon-ok"></span>
                        Salvar
                    </button>
                </div>
            </form>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>



