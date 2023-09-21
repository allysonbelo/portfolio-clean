<?php include get_template_directory() . '/inc/acf_variables.php'; ?>

<h2 class="projects__title"><?php echo esc_html($title_projects) ?></h2>

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

if ($total_posts > $show_posts_number && $projects_button) {
    echo sprintf(
        '<a class="button animate__bounceOutRight" href="%s" target="%s">%s</a>',
        $projects_button['url'],
        $projects_button['target'],
        $projects_button['title']
    );
}
?>