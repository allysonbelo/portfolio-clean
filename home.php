<?php get_header(); ?>

<div id="primary" class="wrapper">
    <main id="main" class="main__blog">

        <div class="blog__wrapper--header">
            <div class="single__header">
                <h1 class="single__title"><?php single_post_title(); ?></h1>
                <img class="single__header--image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" loading="lazy">
            </div>

        </div>
        <div class="blog">
            <div class="projects__cards">
                <?php

                $show_posts_number = get_field('number_of_posts');

                $args = array(
                    'post_type' => 'post',
                    // 'posts_per_page' => 10,
                    'paged' => get_query_var('paged')
                );
                $customLoop = new WP_Query($args);

                if ($customLoop->have_posts()) :
                    while ($customLoop->have_posts()) : $customLoop->the_post(); ?>


                        <article class="projects__card--article">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail("large");
                            } else {
                            ?>
                                <img src="<?php echo get_theme_file_uri('/img/default-image.webp') ?>" alt="" loading="lazy">
                            <?php
                            }
                            ?>
                            <div class="projects__card--content">
                                <span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                <?php if (has_excerpt()) {
                                    echo '<p>' . wp_trim_words(get_the_excerpt(), 8) . '</p>';
                                } else {
                                    echo '<p>' . wp_trim_words(get_the_content(), 5) . '</p>';
                                }
                                ?>
                            </div>
                        </article>

                    <?php endwhile;

                    wp_reset_postdata();

                else : ?>
                    <p>Nada mais para ser exibido!</p>
                <?php endif;
                ?>
            </div>
            <div class="pagination">
                <?php
                the_posts_pagination(array(
                    'prev_text' => '<<', // texto para o link "Anterior"
                    'next_text' => '>>', // texto para o link "Próximo"
                ));
                ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>