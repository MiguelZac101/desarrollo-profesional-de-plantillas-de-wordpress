<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp_plantilla');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '992921996');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ' IsES&TM69#-a8}|dxy+T|;XTOMJOK._P|7K(TG]Bd&am6mf2S?WfQEn5683M9??');
define('SECURE_AUTH_KEY', '|fWon>zOuM0SB.BP9X~rz?lJ/mAzoXY_(p01YcZa/Cew]`Ji{:WAjOW(2cWtNWHY');
define('LOGGED_IN_KEY', 't^ulE}%j$+5~r22,|-AYWk?wv?34iKSC7p0EvH^WU16oW0Cl>V-b>WN#RH^&&ON@');
define('NONCE_KEY', '1tiK`-#Im5{q.40peCTI|BD!TJQc3-Sn)aiNfxM4%]W6#SoU8G{HUarhzpmG>Sr ');
define('AUTH_SALT', 'wqfx2h#x ]ZdKuPy@1N`us)GF_YH`?3QX9Q%j;M&WfJ+%1^ej!GESs`]zUGdMx_p');
define('SECURE_AUTH_SALT', 'ak[[9/m#Q&ecX&?L0f.=g]Zw~E!*~>VQP;uh4^:0*Hzz)(br~catamaez9{iiC+&');
define('LOGGED_IN_SALT', 'jh(.->gW0K/BfOZ(uU@Rkd%l[k0%t+~f<s!:x1p9*Qw)+kc]q+<BFUQL#@^FszpS');
define('NONCE_SALT', '+q=4=5sy{E?/qM&<FzOm]Sc:NIXg05:/|Uf_l/aUFswV$K~~=!5c[iYr92xyIX4>');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

