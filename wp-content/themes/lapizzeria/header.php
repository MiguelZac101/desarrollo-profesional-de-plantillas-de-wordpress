<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="encabezado-sitio">
            <div class="contenedor">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logotipo">
                    </a>                    
                </div><!--.logo-->
                <div class="informacion-encabezado">
                    <div class="redes-sociales">
                        <?php 
$args = array(
    'theme_location' => 'social-menu',
    'container' => 'nav',
    'container_class' => 'sociales',
    'container_id' => 'sociales',
    'link_before' => '<span class="sr-text">',
    'link_after' => '</span>'
);
wp_nav_menu($args);
                        ?>
                    </div><!--.redes-sociales-->
                    <div class="direccion">
                        <p>123bay avenue mountain view CA 983424</p>
                        <p>Teléfono: +1-92-456-7890</p>
                    </div>
                </div>
            </div><!--.contenedor-->
        </header>    
        
        <div class="menu-principal">
            <div class="mobile-menu">
                <a href="#" class="mobile">
                    Menu
                </a>
            </div>
            <div class="contenedor navegacion">
                <?php 
                    $args = array(
                        'theme_location' => 'header-menu', //nombre del menu en functions.php
                        'container' => 'nav',
                        'container_class' => 'menu-sitio'
                    );
                    wp_nav_menu($args);
                ?>
            </div>  
        </div>
        
              