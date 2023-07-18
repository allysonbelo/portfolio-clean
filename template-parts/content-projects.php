<h2 class="projects__title">My Projects</h2>

<div class="projects__cards">
    <?php

    $show_posts_number = get_field('number_of_posts');

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $show_posts_number,
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
                    <img src="<?php echo get_theme_file_uri('/img/default-image.webp') ?>" alt="">
                <?php
                }
                ?>
                <div class="projects__card--content">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                    <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
                </div>
            </article>

        <?php endwhile;
        wp_reset_postdata();
    else : ?>
        <p>Nothing yet to be displayd!</p>
    <?php endif;
    ?>

</div>

<?php
$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
);

$query = new WP_Query($args);
$total_posts = $query->found_posts;

if ($total_posts > $show_posts_number) {
    echo '<a class="button" href="https://preview.colorlib.com/#ronin" target="_blank">Show all projects</a>';
}

?>