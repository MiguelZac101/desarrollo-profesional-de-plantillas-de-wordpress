<?php

//https://codex.wordpress.org/Validating_Sanitizing_and_Escaping_User_Data
function lapizzeria_guardar() {
    global $wpdb;
    $tabla = $wpdb->prefix . "reservaciones";

    if (isset($_POST['enviar']) && $_POST['oculto'] == 1):

        $nombre = sanitize_text_field($_POST['nombre']);
        $fecha = sanitize_text_field($_POST['fecha']);
        $correo = sanitize_text_field($_POST['correo']);
        $telefono = sanitize_text_field($_POST['telefono']);
        $mensaje = sanitize_text_field($_POST['mensaje']);

        //https://codex.wordpress.org/Class_Reference/wpdb
        $datos = array(
            'nombre' => $nombre,
            'fecha' => $fecha,
            'correo' => $correo,
            'telefono' => $telefono,
            'mensaje' => $mensaje
        );
        $formato = array(
            '%s',
            '%s',
            '%s',
            '%s',
            '%s',
        );
//    '%d' -> cantidad
//    '%s' -> string
//    '%f' -> flotante

        $wpdb->insert($tabla, $datos, $formato);

    endif;
}

add_action('init', 'lapizzeria_guardar');

