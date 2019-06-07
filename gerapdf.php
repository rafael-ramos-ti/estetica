<?php
require_once './autentica.php';
//iniciar o buffer
ob_start();

//pegar o conteudo do buffer, inserir na variavel e limpar amemoria
$html = ob_get_clean();

//converte o conteudo para utf-8
$html = utf8_encode($html);

$html = include ('./fichaclientes.php?nome=Rafael%20Ramos&cod=29.php');
        
//incluir  a classe MPDF
include ('mpdf60/mpdf.php');

//criar objeto
$mpdf = new mPDF();

$mpdf->allow_charset_conversion = TRUE;

$mpdf->charset_in = 'UTF-8';

$mpdf->WriteHTML($html);

$mpdf->Output('meupdf','I');

exit();
        
?>