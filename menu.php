<?php
require_once 'autentica.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BELLA ESSÊNCIA</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background: #F8E0F7;

            }
        </style>

    </head>
    <body>
        <?php include_once 'cabecalho.php'; ?>
        
        <div class="container">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img src="img/IMG-20171030-WA0002.jpg"style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="img/IMG-20171030-WA0003.jpg" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="img/IMG-20171030-WA0004.jpg" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="img/IMG-20171030-WA0005.jpg" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="img/IMG-20171030-WA0006.jpg" style="width:100%;">
                    </div>


                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>