<?php get_header() ?>

<div class="wrapper">
    <main class="main__frontpage">
        <section><?php get_template_part('template-parts/content', 'banner'); ?></section>
        <section id="about" class="about__section"><?php get_template_part('template-parts/content', 'about'); ?></section>
        <section>Projects</section>
        <section>Contact</section>
    </main>

</div>

<?php get_footer() ?>