<footer>
    <?php
        $args = array(
            'theme_location' => 'header-menu',
            'container' => 'nav',
            'after' => '<span class="separador"> | </span>'
        );
        wp_nav_menu($args);
    ?>
    <div class="ubicacion">
        <p>8179 Bay Avenue Mountan View, CA 94043</p>
        <p>Teléfono: +1-92-456-7890</p>
    </div>
</footer>
        <?php wp_footer(); ?>
    </body>
</html>