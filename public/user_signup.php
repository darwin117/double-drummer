<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once "includes/connect.php";
        require_once "includes/login.php";
        require_once "includes/functions.php";
    ?>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up - Double Drummer</title>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="script.js"></script>
        <link rel="shortcut icon" type="image/svg" href="imagens/logo_icon.svg"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
        .form-control{
            border: 2px solid #222831;
        }
    </style>
    <body>
        <?php
            $usr = $_POST['user'] ?? null;
            $em = $_POST['email'] ?? null;
            $pwd = $_POST['password'] ?? null;
            $cpwd = $_POST['confpass'] ?? null;
            
            if(is_null($usr) || is_null($em) || is_null($pwd) || is_null($cpwd)){
                require "user_signup_form.php";
            }
            else{
                $q = "SELECT email, username, password FROM utilizadores WHERE email = '$em' OR username = '$usr'";
                $procura = $db->query($q);
                if(!$procura){
                    echo msg_erro("Falha no acesso à base de dados.");
                    echo voltar("user_signup.php","#EEEEEE");
                }
                else{
                    if($procura->num_rows==0){
                        if($pwd==$cpwd){
                            $hash = gerarHash($pwd);
                            $q = "INSERT INTO utilizadores (username,email,password) VALUES ('$usr','$em','$hash')";
                            $insrt = $db->query($q);
                            if(!$insrt){
                                echo msg_erro("Falha ao inserir os dados na base de dados.");
                            }
                            else{
                                echo msg_sucesso("Conta registada com sucesso!");
                                $q = "SELECT email, username, password, tipo FROM utilizadores WHERE email = '$em' LIMIT 1";
                                $procura = $db->query($q);
                                if(!$procura){
                                    echo msg_erro("Erro ao tentar iniciar sessão.");
                                    echo voltar("index.php","#EEEEEE");
                                }
                                else{
                                    $reg = $procura->fetch_object();
                                    $_SESSION['email'] = $reg->email;
                                    $_SESSION['user'] = $reg->username;
                                    $_SESSION['tipo'] = $reg->tipo;
                                    echo msg_sucesso("Login efetuado com sucesso.");
                                    echo voltar("index.php","#EEEEEE");
                                }
                            }
                        }
                        else{
                            echo msg_erro("As passwords não correspondem.");
                            echo voltar("user_signup.php","#EEEEEE");
                        }
                    }
                    else{
                        echo msg_erro("Já existe um utilizador com esse nome/email.");
                        echo voltar("user_signup.php","#EEEEEE");
                    }
                }
            }
        ?>
    </body>
</html>