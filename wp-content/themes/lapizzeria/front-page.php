<?php get_header(); ?>

    <?php while(have_posts()): the_post(); ?>

    <?php // the_post_thumbnail();?>

<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);">
        <div class="contenido-hero">
            <div class="texto-hero">
                <h1><?php bloginfo('description');?></h1>
                <h1><?php echo esc_html(get_option('blogdescription'));?></h1>
                <?php the_content();?>
                <?php $url = get_page_by_title('Nosotros'); ?>
                <a href="<?php echo get_permalink($url->ID); ?>" class="button">Leer más</a>
            </div>
        </div>
    </div>
    <div class="principal contenedor">
        <main class="text-centrado contenido-paginas">
            
        </main>
    </div>
        
    <?php endwhile; ?>

<?php get_footer(); ?>