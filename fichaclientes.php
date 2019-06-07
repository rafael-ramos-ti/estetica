<?php
require_once './autentica.php';
require_once 'DAO/Clientes.php';

$cliente = new Clientes();

$nome = $_GET["nome"];
$cod = $_GET["cod"];

$s = "SIM";
$n = "NÃO";

// ------------- buscar informações pessoais cliente--//
$tabelaCL = $cliente->encontrarClientePorCod($cod);

///   ------- Algoritmo da tabela habitosdiarios ----////
$tabelaHa = $cliente->encontrarHabitosDiarios($cod);
$ha = array();
if ($tabelaHa['ha1'] == 0) {
    $ha[0] = $n;
} else {
    $ha[0] = $s;
}
$ha[1] = $tabelaHa['ha2'];
if ($tabelaHa['ha3'] == 0) {
    $ha[2] = $n;
} else {
    $ha[2] = $s;
}
$ha[3] = $tabelaHa['ha4'];
if ($tabelaHa['ha5'] == 0) {
    $ha[4] = $n;
} else {
    $ha[4] = $s;
}
if ($tabelaHa['ha6'] == 0) {
    $ha[5] = $n;
} else {
    $ha[5] = $s;
}
$ha[6] = $tabelaHa['ha7'];
if ($tabelaHa['ha8'] == 0) {
    $ha[7] = $n;
} else {
    $ha[7] = $s;
}
if ($tabelaHa['ha9'] == 0) {
    $ha[8] = $n;
} else {
    $ha[8] = $s;
}
if ($tabelaHa['ha10'] == 0) {
    $ha[9] = $n;
} else {
    $ha[9] = $s;
}
$ha[10] = $tabelaHa['ha11'];
if ($tabelaHa['ha12'] == 0) {
    $ha[11] = $n;
} else {
    $ha[11] = $s;
}
if ($tabelaHa['ha13'] == 0) {
    $ha[12] = $n;
} else {
    $ha[12] = $s;
}
$ha[13] = $tabelaHa['ha14'];
if ($tabelaHa['ha15'] == 1) {
    $ha[14] = "BOA";
} elseif ($tabelaHa['ha15'] == 2) {
    $ha[14] = "REGULAR";
} else {
    $ha[14] = "PÉSSIMA";
}
$ha[15] = $tabelaHa['ha16'];
///   ------- FIM Algoritmo da tabela habitosdiarios ----////
///   ------- Algoritmo da tabela historicoclinico ----////
$tabelaHi = $cliente->encontrarHistoricoClinico($cod);
$hi = array();
$cont = 0;
$i = 1;
while ($i < 9) {
    if ($tabelaHi['hi' . $i] == 0) {
        $hi[$cont] = $n;
    } else {
        $hi[$cont] = $s;
    }
    $cont++;
    $i++;
}

///   ------- Algoritmo da tabela tmediciaestetica ----////
$tabelaMe = $cliente->encontrarTMedicinaEstetica($cod);
$me = array();
if ($tabelaMe['me1'] == 0) {
    $me[0] = $n;
} else {
    $me[0] = $s;
}
if ($tabelaMe['me2'] == 0) {
    $me[1] = $n;
} else {
    $me[1] = $s;
}
if ($tabelaMe['me3'] == 0) {
    $me[2] = $n;
} else {
    $me[2] = $s;
}
$me[3] = $tabelaMe['me4'];
if ($tabelaMe['me5'] == 0) {
    $me[4] = $n;
} else {
    $me[4] = $s;
}
$me[5] = $tabelaMe['me6'];
///   ------- Fim Algoritmo da tabela tmediciaestetica ----////
///   ------- Algoritmo da tabela avaliacaofacial ----////
$tabelaAv = $cliente->encontrarAvaliacaoFacial($cod);
$av = array();
if ($tabelaAv['av1'] == 0) {
    $av[0] = "Eudérmica/Normal";
} elseif ($tabelaAv['av1'] == 1) {
    $av[0] = "Lipídica/Oleosa";
} elseif ($tabelaAv['av1'] == 2) {
    $av[0] = "Alípica/Seca";
} else {
    $av[0] = "Mista";
}
if ($tabelaAv['av2'] == 0) {
    $av[1] = "Normal";
} elseif ($tabelaAv['av2'] == 1) {
    $av[1] = "Desidratado";
} elseif ($tabelaAv['av2'] == 2) {
    $av[1] = "Sensibilizado";
} elseif ($tabelaAv['av2'] == 3) {
    $av[1] = "Acnéico";
} else {
    $av[1] = "Seborreico";
}
if ($tabelaAv['av3'] == 0) {
    $av[2] = "Lisa";
} elseif ($tabelaAv['av3'] == 1) {
    $av[2] = "Áspera";
} else {
    $av[2] = "Normal";
}
if ($tabelaAv['av4'] == 0) {
    $av[3] = "Fina";
} elseif ($tabelaAv['av4'] == 1) {
    $av[3] = "Muito Fina";
} elseif ($tabelaAv['av4'] == 2) {
    $av[3] = "Espessa";
} else {
    $av[3] = "Normal";
}
if ($tabelaAv['av5'] == 0) {
    $av[4] = "Dilatados na zona T";
} elseif ($tabelaAv['av5'] == 1) {
    $av[4] = "Dilatados em toda Face";
} else {
    $av[4] = "Contraídos";
}
if ($tabelaAv['av6'] == 0) {
    $av[5] = "Grau I";
} elseif ($tabelaAv['av6'] == 1) {
    $av[5] = "Grau II";
} elseif ($tabelaAv['av6'] == 2) {
    $av[5] = "Grau III";
} elseif ($tabelaAv['av6'] == 3) {
    $av[5] = "Grau IV";
} else {
    $av[5] = "Grau V";
}
if ($tabelaAv['av7'] == NULL) {
    $av[6] = $n;
} else {
    $av[6] = $s;
}
$av[7] = $tabelaAv['av8'];
if ($tabelaAv['av9'] == NULL) {
    $av[8] = $n;
} else {
    $av[8] = $s;
}
$av[9] = $tabelaAv['av10'];
if ($tabelaAv['av11'] == NULL) {
    $av[10] = $n;
} else {
    $av[10] = $s;
}
$av[11] = $tabelaAv['av12'];
if ($tabelaAv['av13'] == NULL) {
    $av[12] = $n;
} else {
    $av[12] = $s;
}
$av[13] = $tabelaAv['av14'];
if ($tabelaAv['av15'] == NULL) {
    $av[14] = $n;
} else {
    $av[14] = $s;
}
$av[15] = $tabelaAv['av16'];
if ($tabelaAv['av17'] == 0) {
    $av[16] = "I";
} elseif ($tabelaAv['av17'] == 1) {
    $av[16] = "II";
} elseif ($tabelaAv['av17'] == 2) {
    $av[16] = "III";
} elseif ($tabelaAv['av17'] == 3) {
    $av[16] = "IV";
} else {
    $av[16] = "V";
}
if ($tabelaAv['av18'] == 0) {
    $av[17] = "I";
} elseif ($tabelaAv['av18'] == 1) {
    $av[17] = "II";
} elseif ($tabelaAv['av18'] == 2) {
    $av[17] = "III";
} elseif ($tabelaAv['av18'] == 3) {
    $av[17] = "IV";
} else {
    $av[17] = "V";
}
if ($tabelaAv['av19'] == NULL) {
    $av[18] = $n;
} else {
    $av[18] = $s;
}
if ($tabelaAv['av20'] == NULL) {
    $av[19] = $n;
} else {
    $av[19] = $s;
}
if ($tabelaAv['av21'] == NULL) {
    $av[20] = $n;
} else {
    $av[20] = $s;
}
if ($tabelaAv['av22'] == NULL) {
    $av[21] = $n;
} else {
    $av[21] = $s;
}
if ($tabelaAv['av23'] == NULL) {
    $av[22] = $n;
} else {
    $av[22] = $s;
}
$av[23] = $tabelaAv['av24'];

$cont = 24;
$i = 25;
while ($i <= 49) {
    if ($tabelaAv['av' . $i] == NULL) {
        $av[$cont] = $n;
    } else {
        $av[$cont] = $s;
    }
    $i++;
    $cont++;
}
if ($tabelaAv['av50'] == NULL) {
    $av[49] = NULL;
} elseif ($tabelaAv['av50'] == 0) {
    $av[49] = "+leve";
} elseif ($tabelaAv['av50'] == 1) {
    $av[49] = "++moderado";
} elseif ($tabelaAv['av50'] == 2) {
    $av[49] = "+++intenso";
} else {
    $av[49] = "++++grave";
}
if ($tabelaAv['av51'] == NULL) {
    $av[50] = $n;
} else {
    $av[50] = $s;
}
if ($tabelaAv['av52'] == NULL) {
    $av[51] = NULL;
} elseif ($tabelaAv['av52'] == 0) {
    $av[51] = "+leve";
} elseif ($tabelaAv['av52'] == 1) {
    $av[51] = "++moderado";
} elseif ($tabelaAv['av52'] == 2) {
    $av[51] = "+++intenso";
} else {
    $av[51] = "++++grave";
}
///   ------- Fim Algoritmo da tabela avaliacaofacial ----////           
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo /* converte strig para maiusculo */strtoupper($nome); ?></title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once 'cabecalho.php'; ?>
        <div class="container">
            <div>
                <fieldset>
                    <legend><strong>FICHA DE <?php echo /* converte strig para maiusculo */strtoupper($nome); ?></strong></legend>
                    <table cellpadding="0" cellspacing="0" width="100%">
                        <tr>
                            <td><span style="font-size:18px;">Cidade:</span></td>
                            <td align="right"><span style="font-size:18px"><?php echo $tabelaCL['nome']; ?></span></td>
                        </tr>
                        <tr>
                            <td><span style="font-size:18px; color:blue">Fone:</span></td>
                            <td align="right"><span style="font-size:18px; color:blue"><?php echo $tabelaCL['fone']; ?></span></td>
                        </tr>
                        <tr>
                            <td><span style="font-size:18px;">Data de Nascimento:</span></td>
                            <td align="right"><span style="font-size:18px;"><?php echo $tabelaCL['dataNasc']; ?></span></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr size="1" />
                            </td>
                        </tr>
                        <tr>
                            <td><strong style="font-size:20px; color:#030">Data e Hora do Cadastro:</strong></td>
                            <td align="right"><strong style="font-size:20px; color:#030"><?php echo $tabelaCL['dataCadastro']; ?></strong></td>
                        </tr>
                    </table>
                </fieldset>
            </div>
            <!-- Hábitos Diários --> 
            <div class="panel panel-success">
                <div class="panel-heading text-center">HÁBITOS DIÁRIOS:</div>
                <div class="panel-body">
                    <table class="table table-bordered  table-hover text-center table-striped">
                        <tr>
                            <td class="text-left">1. Antecedentes Alérgicos?</td>
                            <td><?php echo $ha[0]; ?></td>
                            <td><?php echo $ha[1]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">2. Já fez algum tratamento estético anterior?</td>
                            <td><?php echo $ha[2]; ?></td>
                            <td><?php echo $ha[3]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">3.Faz uso de álcool?</td>
                            <td><?php echo $ha[4]; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-left">4. Consumo de água?</td>
                            <td><?php echo $ha[5]; ?></td>
                            <td><?php echo $ha[6]; ?> ML</td>
                        </tr>
                        <tr>
                            <td class="text-left">5. Usa anticoncepcional?</td>
                            <td><?php echo $ha[7]; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-left">6. Gestante?</td>
                            <td><?php echo $ha[8]; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-left">7. Utiliza cosmético?</td>
                            <td><?php echo $ha[9]; ?></td>
                            <td><?php echo $ha[10]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">8. Tabagista?</td>
                            <td><?php echo $ha[11]; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-left">9. Pratica atividades físicas?</td>
                            <td><?php echo $ha[12]; ?></td>
                            <td><?php echo $ha[13]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">10. Qualidade do sono?</td>
                            <td><?php echo $ha[14]; ?></td>
                            <td><?php echo $ha[15]; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- FIM Hábitos Diários -->

            <!-- HISTÓRICO CLÍNICO -->
            <div class="panel panel-info">
                <div class="panel-heading text-center">HISTÓRICO CLÍNICO:</div>
                <div class="panel-body">
                    <table class="table table-bordered  table-hover text-center table-striped">
                        <tr>
                            <td class="text-left">1. Tratamento médico atual?</td>
                            <td><?php echo $hi[0]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">2. Portador de marca passo?</td>
                            <td><?php echo $hi[1]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">3. Hipo/ Hipertenso?</td>
                            <td><?php echo $hi[2]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">4. Diabético?</td>
                            <td><?php echo $hi[3]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">5. Renal?</td>
                            <td><?php echo $hi[4]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">6. Circulatório?</td>
                            <td><?php echo $hi[5]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">7. Epilepsia?</td>
                            <td><?php echo $hi[6]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">8. Antecedentes oncológicos?</td>
                            <td><?php echo $hi[7]; ?></td>
                        </tr> 
                    </table>
                </div>
            </div>
            <!-- FIM HISTÓRICO CLÍNICO -->


            <!-- Tratamento da medicina estética -->
            <div class="panel panel-success">
                <div class="panel-heading text-center">TRATAMENTOS DA MEDICINA ESTÉTICA:</div>
                <div class="panel-body">
                    <table class="table table-bordered  table-hover text-center table-striped">
                        <tr>
                            <td class="text-left">1. Implante dentário?</td>
                            <td><?php echo $me[0]; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-left">2. Usa lente de contato?</td>
                            <td><?php echo $me[1]; ?></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="text-left">3. Tratamento detmatológico/estético?</td>
                            <td><?php echo $me[2]; ?></td>
                            <td><?php echo $me[3]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">4. Cirurgia Plástica Estética?</td>
                            <td><?php echo $me[4]; ?></td>
                            <td><?php echo $me[5]; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- Fim Tratamento da medicina estética -->



            <!-- AVALIAÇÃO FACIAL -->
            <div class="panel panel-info">
                <div class="panel-heading text-center">AVALIAÇÃO FACIAL:</div>
                <div class="panel-body">
                    <table class="table table-bordered  table-hover text-center table-striped">
                        <tr>
                            <td class="text-left">1.  BIOTIPO CUTÂNEO</td>
                            <td colspan="2"><?php echo $av[0]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">2. ESTADO CUTÂNEO</td>
                            <td colspan="2"><?php echo $av[1]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">3. TEXTURA</td>
                            <td colspan="2"><?php echo $av[2]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">4. ESPESSURA</td>
                            <td colspan="2"><?php echo $av[3]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">5. ÓSTIOS</td>
                            <td colspan="2"><?php echo $av[4]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">6. ACNE</td>
                            <td colspan="2"><?php echo $av[5]; ?></td>
                        </tr> 
                        <tr>
                            <td colspan="3">7. INVOLUÇÃO CUTÂNEA:</td>
                        </tr> 
                        <tr>
                            <td class="text-left">Linhas de Expressão</td>
                            <td><?php echo $av[6]; ?></td>
                            <td><?php echo $av[7]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">Sulcos</td>
                            <td><?php echo $av[8]; ?></td>
                            <td><?php echo $av[9]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">Rugas</td>
                            <td><?php echo $av[10]; ?></td>
                            <td><?php echo $av[11]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">Elastose/Enrugamento da pele pela exposição solar</td>
                            <td><?php echo $av[12]; ?></td>
                            <td><?php echo $av[13]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Ptose/Queda pálpebra Superior</td>
                            <td><?php echo $av[14]; ?></td>
                            <td><?php echo $av[15]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">8. FOTOTIPO CUTÂNEO FITZPATRICK</td>
                            <td colspan="2"><?php echo 'TIPO ' . $av[16]; ?></td>
                        </tr> 
                        <tr>
                            <td class="text-left">9. FOTOENVELHECIMENTO ESCALA DE GLOGAU</td>
                            <td colspan="2"><?php echo 'TIPO ' . $av[17]; ?></td>
                        </tr> 
                        <tr>
                            <td colspan="3">10. MANCHAS PIGMENTADAS (MELANINA):</td>
                        </tr>
                        <tr>
                            <td class="text-left">Falta de cor na pele/Acromia-Vitiligo</td>
                            <td colspan="2"><?php echo $av[18]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Sardas/Efélides mais escuras</td>
                            <td colspan="2"><?php echo $av[19]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Hipocromia/Manchas mais brancas</td>
                            <td colspan="2"><?php echo $av[20]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Hipercromia/Manchas</td>
                            <td colspan="2"><?php echo $av[21]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Melanose Solar</td>
                            <td><?php echo $av[22]; ?></td>
                            <td><?php echo $av[23]; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">11. ALTERAÇÕES VASCULARES</td>
                        </tr>
                        <tr>
                            <td class="text-left">Equimose/Estravasamento de sangue - batida</td>
                            <td colspan="2"><?php echo $av[24]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Petéquias/Plontos Vermelhos</td>
                            <td colspan="2"><?php echo $av[25]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Telangectasias/Vasinhos Sanguíneos</td>
                            <td colspan="2"><?php echo $av[26]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Nevo Rubi/Manchas vermelhas salientes</td>
                            <td colspan="2"><?php echo $av[27]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Rosácea</td>
                            <td colspan="2"><?php echo $av[28]; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">12. LESÕES DE PELE</td>
                        </tr>
                        <tr>
                            <td class="text-left">Comendões</td>
                            <td colspan="2"><?php echo $av[29]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Millium</td>
                            <td colspan="2"><?php echo $av[30]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Pápula</td>
                            <td colspan="2"><?php echo $av[31]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Pústula</td>
                            <td colspan="2"><?php echo $av[32]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Cisto</td>
                            <td colspan="2"><?php echo $av[33]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Nódulo</td>
                            <td colspan="2"><?php echo $av[34]; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">13. CICATRIZ</td>
                        </tr>
                        <tr>
                            <td class="text-left">Hipertrófica/Rente a pele</td>
                            <td colspan="2"><?php echo $av[35]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Atrófica/Acne</td>
                            <td colspan="2"><?php echo $av[36]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Queloides/Acima de pele</td>
                            <td colspan="2"><?php echo $av[37]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Retrátil/Diminuição de pele</td>
                            <td colspan="2"><?php echo $av[38]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Hipercrômica/Cor escura-pele</td>
                            <td colspan="2"><?php echo $av[39]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Hipercrômica/Cor mais clara-pele</td>
                            <td colspan="2"><?php echo $av[40]; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">14. PELOS</td>
                        </tr>
                        <tr>
                            <td class="text-left">Hirsutismo/Aumento de pelos</td>
                            <td colspan="2"><?php echo $av[41]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Hipertricose/Toda a pele coberta</td>
                            <td colspan="2"><?php echo $av[42]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Alopécia/perda de pelos em formas redondas</td>
                            <td colspan="2"><?php echo $av[43]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Folicultive/Encravados</td>
                            <td colspan="2"><?php echo $av[44]; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">15. OLHEIRAS</td>
                        </tr>
                        <tr>
                            <td class="text-left">Hiperpigmentadas/Roxa, Marrom</td>
                            <td colspan="2"><?php echo $av[45]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Profundas/anatomia dos olhos</td>
                            <td colspan="2"><?php echo $av[46]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Edematosas/Inchadas</td>
                            <td colspan="2"><?php echo $av[47]; ?></td>
                        </tr>
                        <tr>
                            <td colspan="3">16. FLACIDEZ</td>
                        </tr>
                        <tr>
                            <td class="text-left">Muscular</td>
                            <td><?php echo $av[48]; ?></td>
                            <td><?php echo $av[49]; ?></td>
                        </tr>
                        <tr>
                            <td class="text-left">Pele</td>
                            <td><?php echo $av[50]; ?></td>
                            <td><?php echo $av[51]; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- FIM AVALIAÇÃO FACIAL -->

            <!-- Inicio consultas -->
            <div class="container">
                <h3 class="text-center">CONSULTAS:</h3>

                <?php
                $tabelaCo = $cliente->encontrarConsultas($cod);
                $i = 1;

                foreach ($tabelaCo as $valor) {
                    if ($valor['tipo'] == 0) {
                        $tipo = 'FACIAL';
                    } else {
                        $tipo = 'CORPORAL';
                    }
                    echo '<h5class="text-center">' . $i . 'ª CONSULTA: TIPO(' . $tipo . ')</h5><p>'
                    . $valor['descricao'] . '</p>'
                    . $valor['dataConsulta'] . '<br><hr>';
                    $i++;
                }
                ?>

            </div>
            <!-- Fim consultas
            
            
        </div>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
    </body>
</html>