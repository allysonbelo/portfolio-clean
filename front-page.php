<?php get_header() ?>

<div class="wrapper">
    <main class="main__frontpage">
        <section><?php get_template_part('template-parts/content', 'banner'); ?></section>
        <section id="about" class="about__section"><?php get_template_part('template-parts/content', 'about'); ?></section>
        <section id="projects" class="about__projects"><?php get_template_part('/template-parts/content', 'projects'); ?></section>
        <section>Contact</section>
    </main>
</div>

<?php get_footer() ?>