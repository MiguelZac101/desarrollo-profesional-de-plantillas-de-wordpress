<?php
//http://www.oscarabadfolgueira.com/plugins-wordpress-crear-menu-y-submenu-en-la-administracion/
function lapizzeria_ajustes(){
    //add_menu_page ( page_title, menu_title, capability, menu_slug, function, icon_url, position)
    add_menu_page('La Pizzeria','La Pizzeria Ajustes','administrator','lapizzeria_ajustes','lapizzeria_opciones','dashicons-megaphone',20);
    //add_submenu_page( parent, page_title, menu_title, capability, menu_slug, [function])
    add_submenu_page('lapizzeria_ajustes','Reservaciones','Reservaciones','administrator','lapizzeria_reservaciones','lapizzeria_reservaciones');
}

add_action('admin_menu','lapizzeria_ajustes');

function lapizzeria_opciones(){
    
}
function lapizzeria_reservaciones(){
    
}
