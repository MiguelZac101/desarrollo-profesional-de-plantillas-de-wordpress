<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--iconos para IOS-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="La Pizzeria">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri();?>/img/logo.svg">
        
        <!--iconos para android-->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="theme-color" content="#a61206">
        <meta name="application-name" content="La Pizzeria">
        <link rel="icon" type="image/svg" href="<?php echo get_template_directory_uri();?>/img/logo.svg" sizes="192x192">
        
        <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?> >
        <header class="encabezado-sitio">
            <div class="contenedor">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <!--<img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logotipo">-->
                        <?php
                        if(function_exists('the_custom_logo')){
                            the_custom_logo();
                        }
                        ?>
                    </a>                    
                </div><!--.logo-->
                <div class="informacion-encabezado">
                    <div class="redes-sociales">
                        <?php 
$args = array(
    'theme_location' => 'social-menu', //nombre del menu , 'social-menu' => __('Social Menu','lapizzeria') --> functions.php
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
        
              