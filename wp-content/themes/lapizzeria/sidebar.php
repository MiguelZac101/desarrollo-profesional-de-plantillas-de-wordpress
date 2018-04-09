<aside class="columnas1-3">
    <?php if(is_active_sidebar('blog_sidebar')): // 'id' => 'blog_sidebar' -> lapizzeria_widgets() -> function.php?>
        <?php dynamic_sidebar('blog_sidebar'); // 'id' => 'blog_sidebar' ?>
    <?php endif; ?>
</aside>