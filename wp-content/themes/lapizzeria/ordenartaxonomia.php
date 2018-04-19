<?php
//ordenar taxonomias
//https://es.wordpress.org/plugins/simple-taxonomy-ordering/
$taxonomy = 'categoria_equipo';
//$taxonomy = 'category';
$terms = get_terms($taxonomy); // Get all terms of a taxonomy

if ($terms && !is_wp_error($terms)) :
    ?>
    <ul>
        <?php foreach ($terms as $term) { ?>
            <li><a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></li>
        <?php } ?>
    </ul>
    <?php
endif;

foreach ($terms as $term) {
    echo "<pre>";
    print_r($term);
    echo "</pre>";
}

foreach ($terms as $term) {
    $args = array(
        'posts_per_page' => -1,
        'post_type' => 'equipo',
        'tax_query' => array(//(array) - use taxonomy parameters (available with Version 3.1).
            'relation' => 'AND', //(string) - Possible values are 'AND' or 'OR' and is the equivalent of ruuning a JOIN for each taxonomy
            array(
                'taxonomy' => 'categoria_equipo', //(string) - Taxonomy.
                'field' => 'slug', //(string) - Select taxonomy term by ('id' or 'slug')
                'terms' => $term->slug, //(int/string/array) - Taxonomy term(s).           
            )
        ),
    );
    $pizzas = new WP_Query($args);
    while ($pizzas->have_posts()): $pizzas->the_post();
        echo get_the_title() . "<br/>";
    endwhile;
    echo "<br/>";
    wp_reset_postdata();
}
?>
