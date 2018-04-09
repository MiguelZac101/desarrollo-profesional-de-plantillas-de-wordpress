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
        <main class="text-centrado contenido-paginas columnas2-3">
            <?php while(have_posts()): the_post(); ?>
            <article class="entrada-blog">
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('especialidades');?>
                </a>
                <header class="informacion-entrada clear">
                    <div class="fecha">
                        <time>
                            <?php echo the_time('d');?>
                            <span><?php the_time('M'); ?></span>
                        </time>
                    </div>
                    <div class="titulo-entrada">
                        <?php the_title('<h2>','</h2>'); ?>
                        <p class="autor">
                            <i><?php the_author(); ?></i>
                        </p>
                    </div>
                    <?php the_category(); ?>
                    <br/>
                    <?php the_tags(); ?>
                </header>
                <div class="contenido-entrada">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="button rojo">Leer más</a>
                </div>
            </article>            
            <?php endwhile; ?>
        </main>
        
        <?php get_sidebar(); ?>
        
    </div>
    
<?php get_footer(); ?>
    
<?php

//while(have_posts()):
//    the_post();
//    the_title('<h1>','</h1>');
//    the_content();
//endwhile;


?>
