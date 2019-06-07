<?php
    //inicia nova seção ou carega existente
    session_start();
    //destroi todos os dados da seçao
    session_destroy();
    //redireciona para index.php
    header("Location: index.php");
    //termina a execução do script
    exit();
 ?>
