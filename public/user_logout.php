<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once "includes/connect.php";
        require_once "includes/login.php";
        require_once "includes/functions.php";
    ?>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Double Drummer</title>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <link rel="shortcut icon" type="image/svg" href="imagens/logo_icon.svg"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <script>
        
        // alguma coisa aqui deixou de funcionar a um certo ponto não sei porquê, mas também não é como se o fosse tentar corrigir agora
        // something here stopped working at some point for some reason, but it's not like i'm gonna be looking into it anytime soon
        
        function logout(){
            var request = new XMLHttpRequest();
            request.onreadystatechange = function(){
                if (this.readyState == 4 && this.status == 200) {
                    alert(this.responseText);
                }
            };
            request.open("GET", "ajax_logout.php", true);
            request.send();
            location.href = 'index.php';
        }
    </script>
    <body>
        <div class="container-fluid fade-from-bottom" style="height: 100vh">
            <div class="row h-100">
                <div class="col-12 mx-auto my-auto d-flex logout-container">
                    <div class="align-self-center" style="height: 95%; width: 100%">
                        <h2 class="text-center" style="font-weight: 600">Tens a certeza que queres sair?</h2>
                        <hr>
                        <div class="row">
                            <div class="col text-center">
                                <div class="form-group" id="form-btn">
                                    <button type="submit" name="logout" onclick="logout()" class="btn btn-danger logout-btn">Sim, quero</button>
                                    <a href="index.php"><button type="submit" name="logout" class="btn btn-success logout-btn">Não, voltar</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
