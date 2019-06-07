<?php
require_once 'autentica.php';

//operador ternario
$q = (isset($_GET["q"]) ? $_GET["q"] : "");
require_once 'DAO/Clientes.php';
$clientes = new Clientes();

if (isset($_POST["delete"])) {
    $clientes->deletar($_POST["delete"]);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CLIENTES</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once 'cabecalho.php'; ?>
        <div class="container">
            <h3 class="text-center">LISTAGEM DE CLIENTES</h3>

            <form method="get" class="form-inline" style="margin-bottom: 10px">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Pesquisar" name="q" value="<?php echo $q; ?>">
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button> 
                    </span>
                </div>
                <a href="formclientes.php?acao=incluir" class="btn btn-success">
                    <span class="glyphicon glyphicon-plus"></span>
                    Novo cliente
                </a>
            </form>
            <table class="table table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Código</th>
                        <th class="text-center">Nome</th>
                        <th class="text-center">Nova Consulta</th>
                        <th class="text-center">Atualizar Informações</th>
                        <th class="text-center">Deletar Cliente</th>
                    </tr>
                </thead>
                <tbody>
                <form method="post">
                    <?php
                    $tabela = $clientes->encontrarPorNome($q);

                    foreach ($tabela as $linha) {
                        echo '<tr>'
                        . '<td class="text-center">' .
                        $linha['codCliente']
                        . '</td>'
                        . '<td><a href="fichaclientes.php?nome='
                        . $linha['nome']
                        . '&cod='.$linha['codCliente']
                        . '">'
                        . $linha['nome']
                        . '</a></td>'
                        . '<td class="text-center">'
                        . '<a href="formconsulta.php?id='.$linha['codCliente']
                        . '"><span class="glyphicon glyphicon-briefcase"></span></a>'
                        . '</td>'
                        . '<td class="text-center">'
                        . '<a href="formclientes.php?acao=editar&codCliente='
                        . $linha['codCliente']
                        . '"><span class="glyphicon glyphicon-pencil"></span></a>'
                        . '</td>'
                        . '<td class="text-center">'
                        . '<button type="submit" class="btn btn-link" name="delete" value="'
                        . $linha['codCliente']
                        . '" onclick="return confirm(\'Deseja realmente excluir o cliente '. $linha['nome'].', mais toda sua ficha histórica e consultas?\')">'
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