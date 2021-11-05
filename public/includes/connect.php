<?php

    // mudar valores se necessário
    // change values if necessary

    $host = "localhost";    // host
    $usr = "root";          // username
    $pwd = "";              // password
    $db = "db_music"        // database

    $db = new mysqli("localhost","root","","db_music");

        //n funciona bem mas n corrigi pq n é importante
        // doesnt work well but cba to fix it cuz its not rly important
        
        if($db->connect_errno){
            echo "<p>Encontrei um erro $db->errno -->$db->connect_error</p>";
            die();
        }
