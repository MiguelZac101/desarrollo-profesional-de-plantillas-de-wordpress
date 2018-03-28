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

<?php endwhile; ?>

<div class="nuestras-especialidades contenedor">
    <h3 class="">Pizzas</h3>
    <?php
    $args = array(
        'post_type' => 'especialidades',
        'posts_per_page' => -1,
        'orderby' => 'title',
        'order' => 'ASC',
        'category_name' => 'pizzas'
    );
    $pizzas = new WP_Query($args);
    while ($pizzas->have_posts()): $pizzas->the_post();
        ?>
        <ul>
            <li>
                <?php the_title(); ?>
            </li>
        </ul>
        <?php
    endwhile;
    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>