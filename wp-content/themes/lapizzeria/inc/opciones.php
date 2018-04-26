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
    ?>
<div class="wrap">
    <h1>Reservaciones</h1>
    <table class="wp-list-table widefat fixed striped posts">
        <thead>
            <tr>
                <th class="manage-column">ID</th>
                <th class="manage-column">Nombre</th>
                <th class="manage-column">Fecha de Reserva</th>
                <th class="manage-column">correo</th>
                <th class="manage-column">Teléfono</th>
                <th class="manage-column">Mensaje</th>
            </tr>
        </thead>
        <tbody>
            <?php global $wpdb;
                $reservaciones = $wpdb->prefix.'reservaciones';
                $registros = $wpdb->get_results("SELECT * FROM $reservaciones", ARRAY_A);
                foreach($registros as $registro){
                ?>
            <tr>
                <td><?php echo $registro['id'];?></td>
                <td><?php echo $registro['nombre'];?></td>
                <td><?php echo $registro['fecha'];?></td>
                <td><?php echo $registro['correo'];?></td>
                <td><?php echo $registro['telefono'];?></td>
                <td><?php echo $registro['mensaje'];?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</div>
        <?php
}
