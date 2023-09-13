<?php get_header(); ?>
<div id="content">
    <div class="wrapper">
        <main class="main__single">

            <?php
            $post_bg = get_field('post_bg');
            ?>

            <div class="single__wrapper--header">
                <div class="single__header">
                    <h1 class="single__title"><?php the_title(); ?></h1>
                    <?php if ($post_bg) : ?>
                        <img class="single__header--image" src="<?php echo $post_bg; ?>" alt="" loading="lazy">
                    <?php
                    else : ?>
                        <img class="single__header--image" src="<?php echo get_theme_file_uri('./img/default-image.webp'); ?>" alt="Espaço escuro com algumas estrelas -  Imagem de capa default para posts" loading="lazy">
                    <?php endif; ?>
                </div>

            </div>

            <div class="single__content">
                <div class="single__content--breadcrumbs">
                    <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name')?></a>
                    <i class="fas fa-arrow-right"></i>
                    <a href="<?php echo home_url('/projects'); ?>">Projects</a>
                    <i class="fas fa-arrow-right"></i>
                    <span><?php the_title(); ?></span>
                </div>
                <div class="single__content--position">
                    <div class="single__column--left">
                        <?php the_content(); ?>
                    </div>
                    <div class="single__column--right">
                        <aside class="single__aside">

                            <?php
                            $skill_languages = get_field('skill');
                            $skill_color = get_field('skill_color');
                            $url_repositorio = get_field('url_do_repositorio');
                            $live_preview = get_field('live_preview');
                            ?>

                            <div class="single__aside__content">
                                <h3>Tecnologias usadas</h3>
                                <div class="single__aside__content--icons">

                                    <?php
                                    if ($skill_languages) {
                                        foreach ($skill_languages as $skill) {
                                            $skill = explode(":", $skill);
                                            $title = $skill[0];
                                            $value = $skill[1];
                                    ?>
                                            <span style="color: <?php echo $skill_color; ?>;" title="<?php echo $title ?>"><?php echo $value ?></span>
                                    <?php
                                        }
                                    }
                                    ?>

                                </div>
                            </div>
                            <div class="single__aside__content">

                                <?php if ($url_repositorio) { ?>
                                    <h3>Repositório</h3>
                                    <div class="single__aside__content--acf">
                                        <a href="<?php echo $url_repositorio; ?>" target="_blank"><?php echo custom_trim_url($url_repositorio, 25) ?></a>
                                    </div>
                                <?php } ?>

                            </div>
                            <div class="single__aside__content">

                                <?php if ($live_preview) { ?>
                                    <h3>Live Preview</h3>
                                    <div class="single__aside__content--acf">
                                        <a href="<?php echo $live_preview; ?>" target="_blank"><?php echo custom_trim_url($live_preview, 25) ?></a>
                                    </div>
                                <?php } ?>

                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            
            <?php get_template_part('template-parts/content', 'releated-post') ?>

            <div id="comments" class="comments-area">

                <?php
                /* 
                if (comments_open() || get_comments_number()) {
                    comments_template();
                }
                */
                ?>

            </div>

        </main>
    </div>
</div>
<?php get_footer(); ?>