<?php

function lapizzeria_database(){
    global $wpdb;
    global $lapizzeria_dbversion;
    $lapizzeria_dbversion = '0.1';
    
    $tabla = $wpdb->prefix.'reservaciones';
    $charset_collate = $wpdb->get_charset_collate();
}

add_action('after_setup_theme','lapizzeria_database');
