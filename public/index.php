<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once "includes/connect.php";
        require_once "includes/login.php";
        require_once "includes/functions.php";
    
        // olhar para este código só para deixar estes comentários está-me a dar náuseas
        // looking through this code just to leave some comments is causing me disgust
    ?>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Double Drummer</title>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <link rel="shortcut icon" type="image/svg" href="imagens/logo_icon.svg"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include_once "navbar.php" ?>
        <div id="container">
            <div class="row d-flex align-content-center" style="height: calc(100vh - 4rem)">
                <div class="col-12">
                    <hr class="fade-from-bottom">
                    <h1 class="text-center fade-from-bottom" style="font-weight: 600">Bem-vindo ao mundo da música!</h1>
                    <hr class="fade-from-bottom">
                    <div class="container">
                        <div class="space"></div>
                        <p class="text-center fade-from-bottom" style="font-size: 1.25rem">Aqui no Double Drummer podes ouvir as tuas músicas favoritas sem quaisquer custos ou interrupções. Se és um amante de música, este é o lugar para ti!</p>
                        <div class="space"></div>
                    </div>
                    <div class="space"></div>
                    <?php
                        if(empty($_SESSION['user'])) echo "<a href='user_signup.php'><h4 class='text-center fade-from-bottom' style='font-weight: 600'>Cria já a tua conta!</h4></a>";
                        else echo "<a href='musicas.php'><h4 class='text-center fade-from-bottom' style='font-weight: 600'>Explorar</h4></a>";
                    ?>
                    <div class="space"></div>
                    <hr class="fade-from-bottom">
                </div>
            </div>
            <div class="space"></div>
            <div class="space"></div>
            <div id="carrossel" class="carousel slide fade-in" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagens/carrossel/1.png" alt="img1" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/carrossel/2.png" alt="img2" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/carrossel/3.png" alt="img3" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/carrossel/4.png" alt="img4" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/carrossel/5.png" alt="img5" class="img-fluid">
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/carrossel/6.png" alt="img6" class="img-fluid">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carrossel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#carrossel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <div class="space"></div>
            <hr>
            <div class="space"></div>
            <h3 class="text-center" style="font-weight: 600">Vídeo Promocional</h3>
            <div class="space"></div>
            <div class="container">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item fade-in" src="fake link" title="Vídeo Promocional Double Drummer" allowfullscreen></iframe>
                </div>
            </div>
            <div class="space"></div>
        </div>
        <?php include_once "footer.php" ?>
    </body>
</html>
