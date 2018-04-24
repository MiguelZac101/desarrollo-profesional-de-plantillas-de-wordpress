<?php get_header(); ?>

    <?php while(have_posts()): the_post(); ?>

    <?php // the_post_thumbnail();?>

<div class="hero" style="background-image: url(<?php echo get_the_post_thumbnail_url();?>);">
        <div class="contenido-hero">
            <div class="texto-hero">
                <?php the_title('<h1>','</h1>');?>
            </div>
        </div>
    </div>
    <div class="principal contenedor contacto">
        <main class="contenido-paginas">
            <h2>Realizar una reservación</h2>
            <form class="reserva-contacto" method="post">
                <div class="campo">
                    <input type="text" name="nombre" placeholder="Nombre" required>
                </div>
                <div class="campo">
                    <input type="datetime-local" name="fecha" placeholder="Fecha" required>
                </div>
                <div class="campo">
                    <input type="email" name="correo" placeholder="Correo" required>
                </div>
                <div class="campo">
                    <input type="tel" name="telefono" placeholder="Teléfono" required>
                </div>
                <div class="campo">
                    <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                </div>
                <input type="submit" name="enviar" class="button">
            </form>
        </main>
    </div>
        
    <?php endwhile; ?>

<?php get_footer(); ?>














