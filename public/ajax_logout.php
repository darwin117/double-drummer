<?php
    require_once "includes/login.php";
    require_once "includes/functions.php";

    unset($_SESSION['email']);
    unset($_SESSION['user']);
    unset($_SESSION['tipo']);
    echo ("O utilizador foi desconectado com sucesso.");
?>