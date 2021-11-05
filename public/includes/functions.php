<?php

// AUDIO 

function getArtistas($db, $id){
    
    // vai buscar os nomes dos artistas á db
    // fetches artists' names' from db
    
    $q="SELECT n.musica, a.artista FROM musicas_artistas n JOIN artistas a ON n.artista=a.id_artista WHERE n.musica='$id'";
    $procura=$db->query($q);
    $i=0;
    $artistas="";
    while($reg=$procura->fetch_object()){
        if(!$procura){
            $artistas="Erro no acesso á base de dados.";
        }
        else{
            if($procura->num_rows==0){
                $artistas="Nenhum";
            }
            else{
                if($i==0){
                    $artistas="$reg->artista";
                    $i++;
                }
                else{
                    $artistas=$artistas.", $reg->artista";
                }
            }
        }
    }
    return $artistas;
}

function getGeneros($db, $id){
    
    // vai buscar géneros musicais á db
    // fetches musical genre(s) from db
    
    $q="SELECT n.musica, g.genero FROM musicas_generos n JOIN generos g ON n.genero=g.id_genero WHERE n.musica='$id'";
    $procura=$db->query($q);
    $i=0;
    while($reg=$procura->fetch_object()){
        if(!$procura){
            $generos="Erro no acesso á base de dados.";
        }
        else{
            if($procura->num_rows==0){
                $generos="Nenhum";
            }
            else{
                if($i==0){
                    $generos="$reg->genero";
                    $i++;
                }
                else{
                    $generos=$generos.", $reg->genero";
                }
            }
        }
    }
    return $generos;
}

// NOTIFS

// tudo aqui é apenas visual
// everything here is purely visual

function msg_sucesso($m){
    $resp = "<div class='alert alert-success' role='alert'><span class='material-icons'>check_circle</span>$m</div>";
    return $resp;
}

function msg_aviso($m){
    $resp = "<div class='alert alert-warning' role='alert'><span class='material-icons'>warning</span>$m</div>";
    return $resp;
}

function msg_erro($m){
    $resp = "<div class='alert alert-danger' role='alert'><span class='material-icons'>cancel</span>$m</div>";
    return $resp;
}

function voltar($pag, $cor){
    echo "<a href='$pag' style='color: $cor'><span class='material-icons'>arrow_back</span></a>";
}
