<?php
require_once 'autentica.php';
require_once 'DAO/Clientes.php';
require_once 'DAO/Cidade.php';

$cidade = new Cidade();
$clientes = new Clientes();

$acao = $_GET["acao"] ?? "";

//incluir
if ($acao == 'incluir' && isset($_POST['salvar'])) {
    $id = $clientes->inserir($_POST['nome'], $_POST['fone'], $_POST['dataNasc'], $_POST['cidade']);

    if ($id) {
        echo '<script> alert("' . $_POST["nome"]. ' incluído com sucesso!!"); </script>';
        echo "<script> window.location = 'formhabitosdiarios.php?id=". $id ."'; </script>"; 
        //header("Location: formhabitosdiarios.php?id=" . $id);
        exit();
    } else {
        echo '<script> alert("Não foi possível incluir o cliente '.$_POST['nome'] .', tente novamente!"); </script>';
    }
       
    
}
//editar
if ($acao == 'editar' && isset($_POST['salvar'])) {
    if ($clientes->atualizar($_GET['codCliente'], $_POST['nome'], $_POST['fone'], $_POST['dataNasc'], $_POST['cidade'])) {
        echo '<script> alert("Alteração efetuada com sucesso!!"); </script>';
        echo "<script> window.location = 'listarclientes.php'; </script>";
        exit();
    } else {
        echo '<script> alert("Não foi possível alterar o cliente, tente novamente!"); </script>';
    }
}
//listar os dados do cliente que esta sendo editado
if ($acao == 'editar' && isset($_GET['codCliente'])) {
    $linha = $clientes->encontrarPorCod($_GET['codCliente']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CLIENTE</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
<?php include_once 'cabecalho.php'; ?>
        <div class="container">
            <h3 class="text-center"><?php echo ($acao == "incluir" ? "DADOS DO NOVO " : "ALTERAR OS DADOS DO ") ?>CLIENTE:</h3>
            <form method="post" class="container">
                <div>
                    <label>Nome:</label>
                    <input type="text" 
                           name="nome" 
                           required="" 
                           autofocus="" 
                           class="form-control"
                           value="<?php if (isset($linha)) echo $linha['nome'] ?>"><br>
                </div>
                <div>
                    <label>Fone:</label>
                    <input type="tel" 
                           name="fone" 
                           required="" 
                           class="form-control"
                           value="<?php if (isset($linha)) echo $linha['fone'] ?>"><br>
                </div>
                <div>
                    <label>Data de Nascimento:</label>
                    <input type="date" 
                           name="dataNasc" 
                           required="" 
                           class="form-control"
                           value="<?php if (isset($linha)) echo $linha['dataNasc'] ?>"><br>
                </div>
                <div>
                    <label>Cidade:</label>
                    <select name="cidade" id="cidade" class="form-control">
                        <option value="<?php if (isset($linha)) echo $linha['codCidade'] ?>" ><?php echo (isset($linha)) ? $linha['nomeCid'] : "Escolha uma cidade"; ?> </option>
<?php                                                                                         
$tabela = $cidade->encontrarNomeCodCidade();
foreach ($tabela as $linha) {
    echo '<option value="'
    . $linha['codCidade']
    . '">' . $linha['nome']
    . '</option>';
}
?>
                    </select><br>
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


