<?php
require_once 'autentica.php';
require_once 'DAO/HabitosDiarios.php';

$habitos = new HabitosDiarios();

$id = $_GET["id"] ?? "";

if (isset($_POST["salvar"])) {
    if($habitos->inserir($id, $_POST["ha1"], $_POST["ha2"], $_POST["ha3"], $_POST["ha4"],$_POST["ha5"],
                      $_POST["ha6"], $_POST["ha7"], $_POST["ha8"], $_POST["ha9"], $_POST["ha10"],$_POST["ha11"],
                      $_POST["ha12"], $_POST["ha13"], $_POST["ha14"], $_POST["ha15"], $_POST["ha16"])){
       
        header("Location: formhistoricoclinico.php?id=".$id);
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
        <title>HÁBITOS DIÁRIOS</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h3 class="text-center">HÁBITOS DIÁRIOS:</h3>
            <form method="post">
                <table class="table table-bordered table-hover text-center table-striped">
                    <tr>
                        <td> <label class="text-left">1. Antecedentes Alérgicos?</label> </td>
                        <td> <label><input type="radio" name="ha1" value="1" required="" onclick="document.getElementById('ha2').disabled = false;">Sim</label> </td>
                        <td> <label><input type="radio" name="ha1" value="0" required="" onclick="document.getElementById('ha2').disabled = true;">Não</label> </td>
                        <td colspan="2"> <input class="form-control" disabled="" type="text" name="ha2" id="ha2" placeholder="Qual(is):"> </td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">2. Já fez algum tratamento estético anterior?</label> </td>
                        <td> <label><input type="radio" name="ha3" value="1" required="" onclick="document.getElementById('ha4').disabled = false;">Sim</label> </td>
                        <td> <label><input type="radio" name="ha3" value="0" required="" onclick="document.getElementById('ha4').disabled = true;">Não</label> </td>
                        <td colspan="2"> <input class="form-control" disabled="" type="text" name="ha4" id="ha4" placeholder="Qual(is):"> </td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">3.Faz uso de álcool?</label> </td>
                        <td> <label><input type="radio" name="ha5" required="" value="1">Sim</label> </td>
                        <td> <label><input type="radio" name="ha5" required="" value="0">Não</label> </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">4. Consumo de água?</label> </td>
                        <td> <label><input type="radio" name="ha6" value="1" required="" onclick="document.getElementById('ha7').disabled = false;">Sim</label> </td>
                        <td> <label><input type="radio" name="ha6" value="0" required="" onclick="document.getElementById('ha7').disabled = true;">Não</label> </td>
                        <td colspan="2"> <input class="form-control" disabled="" type="number" name="ha7" id="ha7" placeholder="Quantos ml ao dia:"> </td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">5. Usa anticoncepcional?</label> </td>
                        <td> <label><input type="radio" name="ha8" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="ha8" value="0" required="">Não</label> </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">6. Gestante?</label> </td>
                        <td> <label><input type="radio" name="ha9" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="ha9" value="0" required="">Não</label> </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">7. Utiliza cosmético?</label> </td>
                        <td> <label><input type="radio" name="ha10" value="1" required="" onclick="document.getElementById('ha11').disabled = false;">Sim</label> </td>
                        <td> <label><input type="radio" name="ha10" value="0" required="" onclick="document.getElementById('ha11').disabled = true;">Não</label> </td>
                        <td colspan="2"> <input class="form-control" disabled="" type="text" name="ha11" id="ha11" placeholder="Qual(is):">
                    </tr>
                    <tr>
                        <td> <label class="text-left">8. Tabagista?</label> </td>
                        <td> <label><input type="radio" name="ha12" value="1" required="">Sim</label> </td>
                        <td> <label><input type="radio" name="ha12" value="0" required="">Não</label> </td>
                        <td colspan="2"></td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">9. Pratica atividades físicas?</label> </td>
                        <td> <label><input type="radio" name="ha13" value="1" required="" onclick="document.getElementById('ha14').disabled = false;">Sim</label> </td>
                        <td> <label><input type="radio" name="ha13" value="0" required="" onclick="document.getElementById('ha14').disabled = true;">Não</label> </td>
                        <td colspan="2"> <input class="form-control" disabled="" type="text" name="ha14" id="ha14" placeholder="Qual(is): frequência/semana"> </td>
                    </tr>
                    <tr>
                        <td> <label class="text-left">10. Qualidade do sono?</label> </td>
                        <td> <label><input type="radio" name="ha15" value="1" required="" onclick="document.getElementById('ha16').disabled = false;">Boa</label> </td>
                        <td> <label><input type="radio" name="ha15" value="2" required="" onclick="document.getElementById('ha16').disabled = false;">Regular</label> </td>
                        <td> <label><input type="radio" name="ha15" value="3" required="" onclick="document.getElementById('ha16').disabled = false;">Péssima</label> </td>
                        <td> <input class="form-control" disabled="" type="time" name="ha16" id="ha16" placeholder="Horas"> </td>
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
