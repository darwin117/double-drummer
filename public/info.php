<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once "includes/connect.php";
        require_once "includes/login.php";
        require_once "includes/functions.php";
    ?>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sobre nós - Double Drummer</title>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <link rel="shortcut icon" type="image/svg" href="imagens/logo_icon.svg"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include_once "navbar.php" ?>
        <div id="container">
            <div class="container-fluid fade-in">
                <div class="space"></div>
                <hr>
                <h1 class="display-4 text-center" style="font-size: 45px; font-weight: 600">Sobre Nós</h1>
                <hr>
                <div class="space"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <img src="imagens/csm.jpg" class="img-fluid img-thumbnail">
                        </div>
                        <hr>
                        <div class="col-lg-6 text-center text-lg-left info-text">
                            <p>Double Drummer é um projeto criado por dois alunos do curso de (curso) da <a href="fake link", target="_blank" style="color: #222831; font-weight: 600">(escola)</a> de (localidade), no âmbito da disciplina de Construção de Páginas Web.</p>
                            <p>O objetivo deste site é permitir aos utilizadores ouvir as suas músicas favoritas, bem como possibilitar a descoberta de músicas e artistas que previamente lhes eram desconhecidos, quer sejam estes recentes ou não.</p>
                            <p>Este site é completamente non-profit, tendo sido criado apenas a propósito da nossa educação. Não afirmamos ter direitos sobre nenhuma das músicas disponíveis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once "footer.php" ?>
    </body>
</html>
