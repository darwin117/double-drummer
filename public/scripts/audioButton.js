// função que deteta quando o butão play ou pausa é clicado e inicia ou pausa a música de acordo com isso
// function which checks when the play/pause button is pressed and starts playing/pauses the song accordingly

function audio_action(id_musica) {
    
    var id_button = "audio-button-" + id_musica;
    var buttons = document.getElementsByClassName("audio-button");
    
    var id_button_span = "audio-button-span-" + id_musica;
    var button_spans = document.getElementsByClassName("audio-button-span");
    var button_src = document.getElementById(id_button).src;
    
    var musicas = document.getElementsByTagName("audio");
    
    var id_cover = "cover-" + id_musica;
    var covers = document.getElementsByClassName("cover");
    
    switch (button_src) {
            
        case // full play btn file path goes here
            
            for (var i=0; i<buttons.length; i++) {
                buttons[i].src = "imagens/icones/btn_play.svg";
            }
            
            button_src = "imagens/icones/btn_pause.svg";
            document.getElementById(id_button).src = button_src;
            
            for (var i=0; i<musicas.length; i++) {
                musicas[i].pause();
            }
            
            for (var i=0; i<covers.length; i++) {
                covers[i].style = "";
            }
            
            for(var i=0; i<button_spans.length; i++) {
                button_spans[i].style = "";
            }
            
            document.getElementById(id_cover).style = "-webkit-filter: brightness(30%);";
            document.getElementById(id_button_span).style = "opacity: 1";
            
            document.getElementById(id_musica).play();
            
            break;
            
        case // full pause btn file path goes here
            
            button_src = "imagens/icones/btn_play.svg";
            document.getElementById(id_button).src = button_src;
            document.getElementById(id_cover).style = "";
            document.getElementById(id_button_span).style = "";
            
            document.getElementById(id_musica).pause();
            
            break;
            
    }
    
    document.getElementById(id_musica).onplay = function() {
                
        button_src = "imagens/icones/btn_pause.svg";
        document.getElementById(id_button).src = button_src;
        document.getElementById(id_cover).style = "-webkit-filter: brightness(30%);";
        document.getElementById(id_button_span).style = "opacity: 1";
                
    }
    
    document.getElementById(id_musica).onpause = function() {
                
        button_src = "imagens/icones/btn_play.svg";
        document.getElementById(id_button).src = button_src;
        document.getElementById(id_cover).style="";
        document.getElementById(id_button_span).style="";

    }
            
    document.getElementById(id_musica).onended = function() {

        button_src = "imagens/icones/btn_play.svg";
        document.getElementById(id_button).src = button_src;
        document.getElementById(id_cover).style="";
        document.getElementById(id_button_span).style="";

    }
    
}
