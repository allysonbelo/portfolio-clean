<?php get_header(); ?>

<div id="primary" class="wrapper">
    <main id="main" class="main__blog">
        <h1><?php the_title(); ?></h1>
        <hr>
        <?php the_content(); ?>
    </main>
</div>

<?php get_footer(); ?>