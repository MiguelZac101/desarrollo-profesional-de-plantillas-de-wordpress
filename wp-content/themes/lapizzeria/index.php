<?php get_header(); ?>

    <?php while(have_posts()): the_post(); ?>

    <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);">
        <div class="contenido-hero">
            <div class="texto-hero">
                <?php the_title('<h1>','</h1>');?>
            </div>
        </div>
    </div>
    <div class="principal contenedor">
        <main class="text-centrado contenido-paginas">
            <?php // the_content();?>
        </main>
    </div>
        
    <?php endwhile; ?>
    
<?php get_footer(); ?>
    
<?php

//while(have_posts()):
//    the_post();
//    the_title('<h1>','</h1>');
//    the_content();
//endwhile;


?>
