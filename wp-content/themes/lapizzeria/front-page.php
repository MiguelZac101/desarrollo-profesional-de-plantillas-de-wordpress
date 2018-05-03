<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>

    <?php // the_post_thumbnail();?>

    <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="contenido-hero">
            <div class="texto-hero">
                <h1><?php bloginfo('description'); ?></h1>
                <h1><?php // echo esc_html(get_option('blogdescription'));      ?></h1>
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
                <div class="contenido-especialidad">
                    <?php the_post_thumbnail('especialidades_portrait'); ?>
                    <div class="informacion-platillo">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <p class="precio"><?php the_field('precio'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="button">Leer más</a>
                    </div>
                </div>                
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </main>
</div>
<section class="ingredientes">
    <div class="contenedor">
        <div class="contenedor-grid">
            <div class="columnas2-4">
                <?php the_field('contenido');?>
                <?php $url = get_page_by_title('Nosotros'); ?>
                <a class="button naranja" href="<?php echo get_permalink($url->ID); ?>" class="button">Leer más</a>
            </div>
            <div class="columnas2-4">
                <img src="<?php the_field('imagen');?>"/>
            </div>
        </div>
    </div>

</section>
<section class="contenedor">
    <h2 class="texto-rojo texto-centrado">Galería de imágenes</h2>
    <?php $url = get_page_by_title('Galería'); ?>
    <?php echo get_post_gallery($url->ID); //imprimiendo galeria?>
</section>
<section class="ubicacion-reservacion">
    <div class="contenedor-grid">
        <div class="columnas2-4">
            
        </div>
        <div class="columnas2-4">
            <?php get_template_part('templates/formulario','reservacion');?>
        </div>
    </div>
</section>

<?php get_footer(); ?>