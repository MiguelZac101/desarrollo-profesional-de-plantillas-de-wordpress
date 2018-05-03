<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>

    <?php // the_post_thumbnail();?>

    <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="contenido-hero">
            <div class="texto-hero">
                <h1><?php bloginfo('description'); ?></h1>
                <h1><?php // echo esc_html(get_option('blogdescription'));    ?></h1>
                <?php the_content(); ?>
                <?php $url = get_page_by_title('Nosotros'); ?>
                <a class="button naranja" href="<?php echo get_permalink($url->ID); ?>" class="button">Leer más</a>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<div class="principal contenedor">
    <main class="contenedor-grid">
        <h2 class="rojo">Nuestras Espcialidades</h2>
        <?php
        $args = array(
            'posts_per_page' => 3, //cantidad , -1 es todos
            'orderby' => 'rand', //ranom
            'post_type' => 'especialidades', //post_type
            'category_name' => 'pizzas' // nombre de categoria
        );
        $especialidades = new WP_Query($args);
        while ($especialidades->have_posts()): $especialidades->the_post();
            ?>
            <div class="especialidad columnas1-3">
                <?php the_title(); ?>
            </div>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </main>
</div>



<?php get_footer(); ?>