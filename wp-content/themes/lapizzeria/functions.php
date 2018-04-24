<?php
// Tablas personalizadas y otras funciones
require get_template_directory().'/inc/database.php';
// Funciones para las reservaciones
require get_template_directory().'/inc/reservaciones.php';

function lapizzeria_setup(){
    //agregar imagen destacada
    add_theme_support('post-thumbnails');
    //agregar medida de miniatura a las imagenes
    add_image_size('nosotros',437,291,true);//nombre,ancho,alto,cortar imagen   
    add_image_size('especialidades',768,515,true);
    
    //cambio de medida de la miniatura que viene por defecto en Wordpress
    update_option('thumbnail_size_w',253);
    update_option('thumbnail_size_h',164);
    //medium_size_w
    //large_size_w
}
add_action('after_setup_theme','lapizzeria_setup');//(nombre del hook, nombre_de_la_funcion)

//carga estilos
function lapizzeria_styles(){
    
    //Registrar los estilos
    wp_register_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.0');
//    wp_register_style('fontawesome', get_template_directory_uri().'/css/fontawesome-all.min.css', array('normalize'), '5.0.8');
    
    wp_register_style('font_google', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900', array(), '1.0.0');
    wp_register_style('fluidboxcss', get_template_directory_uri().'/css/fluidbox.min.css', array('normalize'),'1.0'); //dependencias dentro
    wp_register_style('style', get_template_directory_uri().'/style.css', array('normalize'),'1.0'); //dependencias dentro
    
    //utiliza los estilos
    wp_enqueue_style('normalize');
//    wp_enqueue_style('fontawesome');
    wp_enqueue_style('fluidboxcss');
    wp_enqueue_style('style');
    
    //Registrar JS
    //https://github.com/terrymun/Fluidbox
    wp_register_script('fluidbox',  get_template_directory_uri().'/js/jquery.fluidbox.min.js',array(),'1.0.0',true);
    wp_register_script('scripts',  get_template_directory_uri().'/js/scripts.js',array(),'1.0.0',true);    
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('fluidbox');
    wp_enqueue_script('scripts');
    
}
add_action('wp_enqueue_scripts','lapizzeria_styles');

//Creación de menus
function lapizzeria_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu','lapizzeria'),
        'social-menu' => __('Social Menu','lapizzeria')
    ));
}
add_action('init','lapizzeria_menus');

//Post Type Especialidades para La Pizzeria
add_action( 'init', 'lapizzeria_especialidades' );
function lapizzeria_especialidades() {
    $labels = array(
        'name'               => _x( 'Especialidades', 'lapizzeria' ),
        'singular_name'      => _x( 'Especialidad', 'post type singular name', 'lapizzeria' ),
        'menu_name'          => _x( 'Especialidades', 'admin menu', 'lapizzeria' ),
        'name_admin_bar'     => _x( 'Especialidades', 'add new on admin bar', 'lapizzeria' ),
        'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
        'add_new_item'       => __( 'Add New Pizza', 'lapizzeria' ),
        'new_item'           => __( 'New Especialidades', 'lapizzeria' ),
        'edit_item'          => __( 'Edit Especialidades', 'lapizzeria' ),
        'view_item'          => __( 'View Especialidades', 'lapizzeria' ),
        'all_items'          => __( 'All Especialidades', 'lapizzeria' ),
        'search_items'       => __( 'Search Especialidades', 'lapizzeria' ),
        'parent_item_colon'  => __( 'Parent Especialidades:', 'lapizzeria' ),
        'not_found'          => __( 'No Especialidadeses found.', 'lapizzeria' ),
        'not_found_in_trash' => __( 'No Especialidadeses found in Trash.', 'lapizzeria' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'lapizzeria' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'especialidades' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'          => array( 'category' ),
    );

    register_post_type( 'especialidades', $args );
}

//Widgets
function lapizzeria_widgets(){
    register_sidebar(array(
        'name'  => 'Blog Sidebar',
        'id'    => 'blog_sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'  => '</h3>'
    ));
}
add_action('widgets_init','lapizzeria_widgets');