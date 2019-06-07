<?php
require_once 'autentica.php';
require_once 'DAO/HistoricoClinico.php';
$historicoclinico = new HistoricoClinico();

$id = $_GET["id"] ?? "";

if (isset($_POST["salvar"])) {
    
    if($historicoclinico->inserir($id, $_POST["hi1"], $_POST["hi2"], $_POST["hi3"], $_POST["hi4"], $_POST["hi5"],
            $_POST["hi6"], $_POST["hi7"], $_POST["hi8"])){
        
        header("Location: formtmedicinaestetica.php?id=".$id);
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
        <title>HISTÓRICO CLÍNICO</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h3 class="text-center">INFORME SEU HISTÓRICO CLÍNICO:</h3>
            <form method="post">
                <table class="table table-bordered  table-hover text-center table-striped">
                    <tr>
                        <td> <label class="text-left">1. Tratamento médico atual?</label> </td>
                        <td> <label><input type="radio" name="hi1" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="hi1" value="0" required="">Não</label> </td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">2. Portador de marca passo?</label> </td>
                        <td> <label><input type="radio" name="hi2" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="hi2" value="0" required="">Não</label> </td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">3. Hipo/ Hipertenso?</label> </td>
                        <td> <label><input type="radio" name="hi3" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="hi3" value="0" required="">Não</label> </td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">4. Diabético?</label> </td>
                        <td> <label><input type="radio" name="hi4" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="hi4" value="0" required="">Não</label> </td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">5. Renal?</label> </td>
                        <td> <label><input type="radio" name="hi5" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="hi5" value="0" required="">Não</label> </td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">6. Circulatório?</label> </td>
                        <td> <label><input type="radio" name="hi6" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="hi6" value="0" required="">Não</label> </td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">7. Epilepsia?</label> </td>
                        <td> <label><input type="radio" name="hi7" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="hi7" value="0" required="">Não</label> </td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">8. Antecedentes oncológicos?</label> </td>
                        <td> <label><input type="radio" name="hi8" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="hi8" value="0" required="">Não</label> </td>
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


