<?php get_header(); ?>

<?php while (have_posts()): the_post(); ?>

    <?php // the_post_thumbnail();?>

    <div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
        <div class="contenido-hero">
            <div class="texto-hero">
                <?php the_title('<h1>', '</h1>'); ?>
            </div>
        </div>
    </div>
    <div class="principal contenedor">
        <main class="text-centrado contenido-paginas">
            <?php the_content(); ?>
        </main>

    </div>

    <div class="informacion-cajas contenedor">
        <div class="caja">
            <?php
            $id_imagen = get_field('imagen1');
            $imagen = wp_get_attachment_image_src($id_imagen, "nosotros"); // id_imagen,nombre de miniatura (personalizado en functions.php)
            ?>

            <img src="<?php echo $imagen[0]; ?>" class="imagen-caja"/>

            <div class="contenido-caja">
                <?php the_field('texto1'); ?>
            </div>
        </div>
        <div class="caja">
            <?php
            $id_imagen = get_field('imagen2');
            $imagen = wp_get_attachment_image_src($id_imagen, "nosotros"); // id_imagen,nombre de miniatura (personalizado en functions.php)
            ?>

            <img src="<?php echo $imagen[0]; ?>" class="imagen-caja"/>

            <div class="contenido-caja">
                <?php the_field('texto2'); ?>
            </div>
        </div>
        <div class="caja">
            <?php
            $id_imagen = get_field('imagen3');
            $imagen = wp_get_attachment_image_src($id_imagen, "nosotros"); // id_imagen,nombre de miniatura (personalizado en functions.php)
            ?>

            <img src="<?php echo $imagen[0]; ?>" class="imagen-caja"/>

            <div class="contenido-caja">
                <?php the_field('texto3'); ?>
            </div>
        </div>
    </div>



<?php endwhile; ?>

<?php get_footer(); ?>