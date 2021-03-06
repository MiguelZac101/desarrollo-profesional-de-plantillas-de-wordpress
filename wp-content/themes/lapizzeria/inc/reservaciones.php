<?php

//funcion AJAX
function lapizzeria_eliminar() {
    if (isset($_POST['tipo'])) {
        if ($_POST['tipo'] == 'eliminar') {
            global $wpdb;
            $tabla = $wpdb->prefix . 'reservaciones';

            $id_registro = $_POST['id'];
            $resultado = $wpdb->delete(
                    $tabla, array('id' => $id_registro), array('%d') //tipo dato %d decimal %f float $s string
            );

            if ($resultado == 1) {
                $respuesta = array(
                    'respuesta' => 1,
                    'id' => $id_registro
                );
            } else {
                $respuesta = array(
                    'respuesta' => 'error'
                );
            }
        }
    }
    die(json_encode($respuesta));
}

//wp_ajax_ -> considerar cuando es para ajax
add_action('wp_ajax_lapizzeria_eliminar', 'lapizzeria_eliminar');

//https://codex.wordpress.org/Validating_Sanitizing_and_Escaping_User_Data
function lapizzeria_guardar() {
    if (isset($_POST['enviar']) && $_POST['oculto'] == 1):
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $captcha = $_POST['g-recaptcha-response'];

            //campos que deben enviarse
            $campos = array(
                'secret' => '6Lc1YVwUAAAAAD2Fs1_qrdUyV5IbupW_wxvzjOII',
                'response' => $captcha,
                'remoteip' => $_SERVER['REMOTE_ADDR']
            );

            //Iniciar sesión en CURL (también se puede usar file_get_contents)
            //Curl es utilizado para acceder en servidores remotos

            $ch = curl_init('https://www.google.com/recaptcha/api/siteverify');

            //Configurar opciones de CURL
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 15);

            //Genera una cadena codificada la URL
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($campos));

            // obtener la respuesta
            $respuesta = json_decode(curl_exec($ch));
            if ($respuesta->success){
                global $wpdb;

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

                $tabla = $wpdb->prefix . "reservaciones";
                $wpdb->insert($tabla, $datos, $formato);

                $url = get_page_by_title("Gracias por su reserva");
                wp_redirect(get_permalink($url->ID));
                exit();
            }
        }
    endif;
}

add_action('init', 'lapizzeria_guardar');