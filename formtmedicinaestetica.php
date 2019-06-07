<?php
require_once 'autentica.php';
require_once './DAO/TMedicinaEstetica.php';
$tmedicinaestetica = new TMedicinaEstetica();

$id = $_GET["id"] ?? "";

if (isset($_POST["salvar"])) {
    
    if($tmedicinaestetica->inserir($id,$_POST["me1"],$_POST["me2"],$_POST["me3"],$_POST["me4"],$_POST["me5"],
            $_POST["me6"])){
        
        header("Location: formavaliacaofacial.php?id=".$id);
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
        <title>TRATAMENTO DA MEDICINA ESTÉTICA</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h3 class="text-center">INFORME SEUS TRATAMENTOS DA MEDICINA ESTÉTICA:</h3>
            <form method="post">
                <table class="table table-bordered  table-hover text-center table-striped">
                    <tr>
                        <td> <label class="text-left">1. Implante dentário?</label> </td>
                        <td> <label><input type="radio" name="me1" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="me1" value="0" required="">Não</label> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">2. Usa lente de contato?</label> </td>
                        <td> <label><input type="radio" name="me2" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="me2" value="0" required="">Não</label> </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">3. Tratamento detmatológico/estético?</label> </td>
                        <td> <label><input type="radio" name="me3" value="1" required="" onclick="document.getElementById('me4').disabled = false;">Sim</label> </td>
                        <td> <label><input type="radio" name="me3" value="0" required="" onclick="document.getElementById('me4').disabled = true;">Não</label> </td>
                        <td> <input class="form-control" disabled="" type="text" name="me4" id="me4" placeholder="Qual(is):"> </td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">4. Cirurgia Plástica Estética?</label> </td>
                        <td> <label><input type="radio" name="me5" value="1" required="" onclick="document.getElementById('me6').disabled = false;">Sim</label> </td>
                        <td> <label><input type="radio" name="me5" value="0" required="" onclick="document.getElementById('me6').disabled = true;">Não</label> </td>
                        <td> <input class="form-control" disabled="" type="text" name="me6" id="me6" placeholder="Qual(is):"> </td>
                    </tr>
                </table>

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


