<div class="releated__posts">

    <?php
    // Obtendo as categorias do post atual
    $post_categories = wp_get_post_categories(get_the_ID());

    // Configurando argumentos para a consulta de posts relacionados
    $args = array(
        'post__not_in' => array(get_the_ID()), // Exclui o post atual da lista de posts relacionados
        'posts_per_page' => 3, // Quantidade de posts relacionados a serem exibidos
        'category__in' => $post_categories, // Exibe apenas posts das mesmas categorias do post atual
        'orderby' => 'rand', // Ordena os posts de forma aleatória
    );

    // Fazendo a consulta
    $related_posts = new WP_Query($args);

    // Verifica se existem posts relacionados
    if ($related_posts->have_posts()) : ?>
        <hr class="separator--content">
        <h3>Other Projects</h3>
        <div class="releated__cards">
            <?php while ($related_posts->have_posts()) : $related_posts->the_post(); ?>

                <div class="releated__post--card">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail("large");
                    } else { ?>
                        <img src="<?php echo get_theme_file_uri('/img/default-image.webp'); ?>" alt="" loading="lazy">
                    <?php } ?>
                    <div class="releated__card--content">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p><?php echo wp_trim_words(get_the_content(), 8); ?></p>
                    </div>
                </div>

            <?php endwhile; ?>
        </div>
    <?php
        // Restaura a consulta original
        wp_reset_postdata();
    endif;
    ?>
</div>