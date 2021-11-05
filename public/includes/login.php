<?php
session_start();

// funções relacionadas a utilizadores e sessões
// functions related to users and sessions

if(!isset($_SESSION['email'])){
    $_SESSION['email'] = "";
    $_SESSION['user'] = "";
    $_SESSION['tipo'] = "";
}

function gerarHash($password){
    $hash = password_hash($password, PASSWORD_DEFAULT);
    return $hash;
}

function testarHash($password, $hash){
    $ver = password_verify($password, $hash);
    return $ver;
}
