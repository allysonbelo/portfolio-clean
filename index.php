<?php get_header() ?>

<div id="content">
    <div class="wrapper">

        <main>
            <?php while (have_posts()) {
                the_post();
                // Aqui você pode exibir o título, conteúdo, autor, data etc. da postagem.
            ?>
                <h1><?php the_title(); ?></h1>
            <?php
                the_content(); // Exibe o conteúdo da postagem
                the_author(); // Exibe o autor da postagem
                the_date(); // Exibe a data da postagem
            } ?>

            <h1></h1>
        </main>

        <?php get_template_part('template-parts/content', 'releated-post') ?>
        
    </div>
</div>

<?php get_footer() ?>