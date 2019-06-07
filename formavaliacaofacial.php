<?php
require_once './autentica.php';
require_once 'DAO/AvaliacaoFacial.php';

$avaliacao = new AvaliacaoFacial();
$id = $_GET["id"] ?? "";

if (isset($_POST["salvar"])) {
    $av = array(); 
    $i = 1;
    while ($i <= 52){
        if(isset($_POST["av" . $i])){
            $av[$i] = $_POST["av" . $i];                   
        } else {
            $av[$i] = null;
        }
        $i++;
    }
    /*
     * if($avaliacao->inserir($id, $_POST["av1"],$_POST["av2"], $_POST["av3"], $_POST["av4"], $_POST["av5"], 
            $_POST["av6"], $_POST["av7"], $_POST["av8"], $_POST["av9"], $_POST["av10"], $_POST["av11"], $_POST["av12"],
            $_POST["av13"], $_POST["av14"], $_POST["av15"], $_POST["av16"], $_POST["av17"], $_POST["av18"],
            $_POST["av19"], $_POST["av20"], $_POST["av21"], $_POST["av22"], $_POST["av23"], $_POST["av24"],
            $_POST["av25"], $_POST["av26"], $_POST["av27"], $_POST["av28"], $_POST["av29"], $_POST["av30"],
            $_POST["av31"], $_POST["av32"], $_POST["av33"], $_POST["av34"], $_POST["av35"], $_POST["av36"],
            $_POST["av37"],$_POST["av38"], $_POST["av39"], $_POST["av40"], $_POST["av41"], $_POST["av42"], 
            $_POST["av43"],$_POST["av44"], $_POST["av45"], $_POST["av46"], $_POST["av47"], $_POST["av48"],
            $_POST["av49"],$_POST["av50"], $_POST["av51"], $_POST["av52"])){
     * 
     */
    if($avaliacao->inserir($id, $av[1], $av[2], $av[3], $av[4], $av[5], $av[6], $av[7], $av[8], $av[9], $av[10],
                                $av[11], $av[12], $av[13], $av[14], $av[15], $av[16], $av[17], $av[18], $av[19],
                                $av[20], $av[21], $av[22], $av[23], $av[24], $av[25], $av[26], $av[27], $av[28], 
                                $av[29], $av[30], $av[31], $av[32], $av[33], $av[34], $av[35], $av[36], $av[37], 
                                $av[38], $av[39], $av[40], $av[41], $av[42], $av[43], $av[44], $av[45], $av[46],
                                $av[47], $av[48], $av[49], $av[50],  $av[51], $av[52])){
          
        header("Location: listarclientes.php");
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
        <title>AVALIAÇÃO FACIAL</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h3 class="text-center">AVALIAÇÃO FACIAL:</h3>
            <form method="post">
                <div class="text-primary">
                    <label>1. BIOTIPO CUTÂNEO</label><br>
                    <label><input type="radio" name="av1" value="0" required="">Eudérmica/Normal</label> 
                    <label><input type="radio" name="av1" value="1" required="">Lipídica/Oleosa</label>
                    <label><input type="radio" name="av1" value="2" required="">Alípdica/Seca</label>
                    <label><input type="radio" name="av1" value="3" required="">Mista</label>
                    <hr>
                </div>
                <div class="text-warning">
                    <label>2. ESTADO CUTÂNEO</label><br>
                    <label><input type="radio" name="av2" value="0" required="">Normal</label> 
                    <label><input type="radio" name="av2" value="1" required="">Desidratado</label>
                    <label><input type="radio" name="av2" value="2" required="">Sensibilizado</label>
                    <label><input type="radio" name="av2" value="3" required="">Acnéico</label>
                    <label><input type="radio" name="av2" value="4" required="">Seborreico</label>
                    <hr>
                </div>
                <div class="text-primary">
                    <label>3. TEXTURA</label><br>
                    <label><input type="radio" name="av3" value="0" required="">Lisa</label> 
                    <label><input type="radio" name="av3" value="1" required="">Áspera</label>
                    <label><input type="radio" name="av3" value="2" required="">Normal</label>
                    <hr>
                </div>
                <div class="text-danger">
                    <label>4. ESPESSURA</label><br>
                    <label><input type="radio" name="av4" value="0" required="">Fina</label> 
                    <label><input type="radio" name="av4" value="1" required="">Muito Fina</label>
                    <label><input type="radio" name="av4" value="2" required="">Espessa</label>
                    <label><input type="radio" name="av4" value="3" required="">Normal</label>
                    <hr>
                </div>
                <div class="text-primary">
                    <label>5. ÓSTIOS</label><br>
                    <label><input type="radio" name="av5" value="0" required="">Dialatados na zona T</label> 
                    <label><input type="radio" name="av5" value="1" required="">Dilatados em toda Face</label>
                    <label><input type="radio" name="av5" value="2" required="">Contraidos</label>
                    <hr>
                </div>
                <div class="text-warning">
                    <label>6. ACNE</label><br>
                    <label><input type="radio" name="av6" value="0" required="">Grau I</label> 
                    <label><input type="radio" name="av6" value="1" required="">Grau II</label>
                    <label><input type="radio" name="av6" value="2" required="">Grau III</label>
                    <label><input type="radio" name="av6" value="3" required="">Grau IV</label>
                    <label><input type="radio" name="av6" value="4" required="">Grau V</label>
                    <hr>
                </div>
                <div class="text-primary">
                    <label>7. INVOLUÇÃO CUTÂNEA</label><br>
                    <label><input type="checkbox" name="av7" value="1" onclick="document.getElementById('av8').disabled = false;">Linhas de Espressão</label>
                    <label><input class="form-control" type="text" name="av8" placeholder="Local:" id="av8" placeholder="Descrição:" disabled=""></label><br>
                    <label><input type="checkbox" name="av9" value="1" onclick="document.getElementById('av10').disabled = false;">Sulcos</label>
                    <label><input class="form-control" type="text" name="av10" placeholder="Local:" id="av10" placeholder="Descrição:" disabled=""></label><br>
                    <label><input type="checkbox" name="av11" value="1" onclick="document.getElementById('av12').disabled = false;">Rugas</label>
                    <label><input class="form-control" type="text" name="av12" placeholder="Local:" id="av12" placeholder="Descrição:" disabled=""></label><br>
                    <label><input type="checkbox" name="av13" value="1" onclick="document.getElementById('av14').disabled = false;">Elastose/Enrugamento da pele pela exposição solar</label>
                    <label><input class="form-control" type="text" name="av14" placeholder="Local:" id="av14" placeholder="Descrição:" disabled=""></label><br>
                    <label><input type="checkbox" name="av15" value="1" onclick="document.getElementById('av16').disabled = false;">Ptose/Queda pálpebra Superior</label>
                    <label><input class="form-control" type="text" name="av16" placeholder="Local:" id="av16" placeholder="Descrição:" disabled=""></label>
                    <hr>
                </div>
                 <div class="text-success">
                    <label>8. FOTOTIPO CUTÂNEO FITZPATRICK - TIPO:</label><br>
                    <label><input type="radio" name="av17" value="0" required="">I</label> 
                    <label><input type="radio" name="av17" value="1" required="">II</label>
                    <label><input type="radio" name="av17" value="2" required="">III</label>
                    <label><input type="radio" name="av17" value="3" required="">IV</label>
                    <label><input type="radio" name="av17" value="4" required="">V</label>
                    <hr>
                </div>
                 <div class="text-primary">
                    <label>9. FOTOENVELHECIMENTO ESCALA DE GLOGAU - TIPO:</label><br>
                    <label><input type="radio" name="av18" value="0" required="">I</label> 
                    <label><input type="radio" name="av18" value="1" required="">II</label>
                    <label><input type="radio" name="av18" value="2" required="">III</label>
                    <label><input type="radio" name="av18" value="3" required="">IV</label>
                    <label><input type="radio" name="av18" value="4" required="">V</label>
                    <hr>
                </div>
                <div class="text-danger">
                    <label>10. MANCHAS PIGMENTADAS (MELANINA)</label><br>
                    <label><input type="checkbox" name="av19" value="1">Falta de cor na pele/Acromia-Vitiligo</label><br> 
                    <label><input type="checkbox" name="av20" value="1">Sardas/Efélides mais escuras</label><br>
                    <label><input type="checkbox" name="av21" value="1">Hipocromia/Manchas mais brancas</label><br>
                    <label><input type="checkbox" name="av22" value="1">Hipercromia/Manchas</label><br>
                    <label><input type="checkbox" name="av23" value="1" onclick="document.getElementById('av24').disabled = false;">Melanose Solar</label>
                    <label><input class="form-control" type="text" name="av24" id="av24" placeholder="Descrição:" disabled=""></label>
                    <hr>
                </div>
                <div class="text-primary">
                    <label>11. ALTERAÇÕES VASCULARES</label><br>
                    <label><input type="checkbox" name="av25" value="1">Equimose/Estravasamento de sangue - batida</label><br>
                    <label><input type="checkbox" name="av26" value="1">Petéquias/Plontos Vermelhos</label><br>
                    <label><input type="checkbox" name="av27" value="1">Telangectasias/Vasinhos Sanguíneos</label><br>
                    <label><input type="checkbox" name="av28" value="1">Nevo Rubi/Manchas vermelhas salientes</label><br>
                    <label><input type="checkbox" name="av29" value="1">Rosácea</label>
                    <hr>
                </div>
                <div class="text-warning">
                    <label>12. LESÕES DE PELE</label><br>
                    <label><input type="checkbox" name="av30" value="1">Comendões</label><br>
                    <label><input type="checkbox" name="av31" value="1">Millium</label><br>
                    <label><input type="checkbox" name="av32" value="1">Pápula</label><br>
                    <label><input type="checkbox" name="av33" value="1">Pústula</label><br>
                    <label><input type="checkbox" name="av34" value="1">Cisto</label><br>
                    <label><input type="checkbox" name="av35" value="1">Nódulo</label> 
                    <hr>
                </div>
                <div class="text-primary">
                    <label>13. CICATRIZ</label><br>
                    <label><input type="checkbox" name="av36" value="1">Hipertrófica/Rente a pele</label><br> 
                    <label><input type="checkbox" name="av37" value="1">Atrófica/Acne</label><br>
                    <label><input type="checkbox" name="av38" value="1">Queloides/Acima de pele</label><br>
                    <label><input type="checkbox" name="av39" value="1">Retrátil/Diminuição de pele</label><br>
                    <label><input type="checkbox" name="av40" value="1">Hipercrômica/Cor escura-pele</label><br>
                    <label><input type="checkbox" name="av41" value="1">Hipercrômica/Cor mais clara-pele</label> 
                    <hr>
                </div>
                <div class="text-success">
                    <label>14. PELOS</label><br>
                    <label><input type="checkbox" name="av42" value="1">Hirsutismo/Aumento de pelos</label><br>
                    <label><input type="checkbox" name="av43" value="1">Hipertricose/Toda a pele coberta</label><br>
                    <label><input type="checkbox" name="av44" value="1">Alopécia/perda de pelos em formas redondas</label><br>
                    <label><input type="checkbox" name="av45" value="1">Folicultive/Encravados</label>
                    <hr>
                </div>
                <div class="text-primary">
                    <label>15. OLHEIRAS</label><br>
                    <label><input type="checkbox" name="av46" value="1">Hiperpigmentadas/Roxa, Marrom</label><br>
                    <label><input type="checkbox" name="av47" value="1">Profundas/anatomia dos olhos</label><br>
                    <label><input type="checkbox" name="av48" value="1">Edematosas/Inchadas</label>
                    <hr>
                </div>
                <div class="text-danger">
                    <label>16. FLACIDEZ</label><br>
                    <label><input type="checkbox" name="av49" value="1">Muscular</label> 
                    <label><input type="radio" name="av50" value="0">+leve</label>
                    <label><input type="radio" name="av50" value="1">++moderado</label>
                    <label><input type="radio" name="av50" value="2">+++intenso</label>
                    <label><input type="radio" name="av50" value="3">++++grave</label><br>
                    
                    <label><input type="checkbox" name="av51" value="1">Pele</label>
                    <label><input type="radio" name="av52" value="0">+leve</label>
                    <label><input type="radio" name="av52" value="1">++moderado</label>
                    <label><input type="radio" name="av52" value="2">+++intenso</label>
                    <label><input type="radio" name="av52" value="3">++++grave</label>
                    <hr>
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




