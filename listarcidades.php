<?php
require_once 'autentica.php';

//operador ternario

require_once 'DAO/Cidade.php';
$cidade = new Cidade();

if (isset($_POST["delete"])) {
    $cidade->deletar($_POST["delete"]);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CIDADES</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once 'cabecalho.php'; ?>
        <div class="container">
            <h3 class="text-center">LISTAGEM DE CIDADES:</h3>

            <form method="get" class="form-inline" style="margin-bottom: 10px">
                <a href="formcidades.php?acao=incluir" class="btn btn-success">
                    <span class="glyphicon glyphicon-plus"></span>
                    NOVA CIDADE
                </a>
            </form>
            <table class="table table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <th class="text-center">CEP</th>
                        <th class="text-center">CIDADE</th>
                        <th class="text-center">ATUALIZAR CIDADE</th>
                        <th class="text-center">DELETAR CIDADE</th>
                    </tr>
                </thead>
                <tbody>
                <form method="post">
                    <?php
                    $tabela = $cidade->encontrarTudoPorNome();

                    foreach ($tabela as $linha) {
                        echo '<tr>'
                        . '<td class="text-center">' .
                        $linha['cep']
                        . '</td>'
                        . '<td> '
                        . $linha['nome']
                        . '</td>'
                        . '<td class="text-center">'
                        . '<a href="formcidades.php?acao=editar&codcidade='
                        . $linha['codCidade']
                        . '"><span class="glyphicon glyphicon-pencil"></span></a>'
                        . '</td>'
                        . '<td class="text-center">'
                        . '<button type="submit" class="btn btn-link" name="delete" value="'
                        . $linha['codCidade']
                        . '" onclick="return confirm(\'Deseja realmente excluir a cidade de '. $linha['nome'].'\')">'
                        . '<span class="glyphicon glyphicon-trash"></span>'
                        . '</button>'
                        . '</td>'
                        . '</tr>' . "\n";
                    }
                    ?>
                </form>
                </tbody>
            </table>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>