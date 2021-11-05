<!DOCTYPE html>
<html lang="en">
    <?php 
        require_once "includes/connect.php";
        require_once "includes/login.php";
        require_once "includes/functions.php";
        $search = $_GET['search'] ?? "";
    ?>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Músicas - Double Drummer</title>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="scripts/audioButton.js"></script>
        <link rel="shortcut icon" type="image/svg" href="imagens/logo_icon.svg"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include_once "navbar.php" ?>
        <div id="container">
            <hr>
            <form method="get" id="search" class="form-inline d-flex justify-content-center md-form form-sm mt-0">
                <input type="text" name="search" placeholder="Procura músicas..." class="form-control form-control-sm mr-3 w-75 search-input" aria-label="Search">
                <button type="submit" style="border: none"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
            <div class="container w-75"></div>
            <hr>
            <?php
                $q="SELECT m.id_musica, m.musica, m.audio, m.img, al.album, al.lancamento FROM musicas m JOIN albuns al ON m.album=al.id_album ";
                if(!empty($search)){
                    $q.="WHERE m.musica LIKE '%$search%' ";
                }
                $q.= "ORDER BY RAND()";
                $procura=$db->query($q);
                if(!$procura){
                    echo "Infelizmente a procura deu erro.";
                }
                else{
                    if($procura->num_rows==0){
                        echo "Nenhum registo encontrado.";
                    }
                    else{
                        while($reg=$procura->fetch_object()){
                            echo "<audio id='$reg->id_musica' src='musicas/$reg->audio'></audio>";
                            echo "<div class='row fade-from-bottom'>";
                            echo "<div class='col-md-2'>";
                            echo "<div class='cover-container'>";
                            echo "<img src='imagens/covers/$reg->img' alt='img' id='cover-$reg->id_musica' class='img-fluid cover'>";
                            echo "<span id='audio-button-span-$reg->id_musica' class='audio-button-span'>";
                            echo "<img src='imagens/icones/btn_play.svg' id='audio-button-$reg->id_musica' class='audio-button' onclick='audio_action($reg->id_musica)'>";
                            echo "</span>";
                            echo "</div>";
                            echo "</div>";
                            echo "<div class='col-md-10 text'>";
                            echo "<p>Música: $reg->musica</p>";
                            $a=getArtistas($db, $reg->id_musica);
                            echo "<p>Artista(s): $a</p>";
                            $g=getGeneros($db, $reg->id_musica);
                            echo "<p>Género(s): $g</p>";
                            echo "<p>Álbum: $reg->album ";
                            if(!is_null($reg->lancamento)){
                                $ano=strtotime($reg->lancamento);
                                echo "[".date("Y",$ano)."]</p>";
                            }
                            echo "</div>";
                            echo "</div>";
                            echo "<hr>";
                        }
                    }
                }
            ?> 
        </div>
        <?php include_once "footer.php" ?>
    </body>
    <?php $db->close() ?>
</html>