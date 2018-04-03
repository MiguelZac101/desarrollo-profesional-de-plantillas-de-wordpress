<?php get_header(); ?>
<?php 
$pagina_blog = get_option('page_for_posts'); //obtienen la pagina actual
$id_imagen = get_post_thumbnail_id($pagina_blog);
$imagen = wp_get_attachment_image_src($id_imagen,'full');//(id_imagen,tamaño)
?>  

    <div class="hero" style="background-image: url(<?php echo $imagen['0'];?>);">
        <div class="contenido-hero">
            <div class="texto-hero">
                <h1>
                    <?php echo get_the_title($pagina_blog) ;?>
                </h1>                
            </div>
        </div>
    </div>
    <div class="principal contenedor">
        <main class="text-centrado contenido-paginas">
            <?php while(have_posts()): the_post(); ?>
            <article class="entrada-blog">
                <?php the_title(); ?>
            </article>            
            <?php endwhile; ?>
        </main>
    </div>
        
    
    
<?php get_footer(); ?>
    
<?php

//while(have_posts()):
//    the_post();
//    the_title('<h1>','</h1>');
//    the_content();
//endwhile;


?>
