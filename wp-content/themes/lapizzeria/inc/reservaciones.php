<?php

function lapizzeria_guardar(){
    if(isset($_POST['enviar']) && $_POST['oculto'] == 1 ):
        echo "hola!!";
    endif;
}

add_action('init','lapizzeria_guardar');

