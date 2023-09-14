<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/81cf49532b.js" crossorigin="anonymous"></script>
    <meta name="description" content="Explore os projetos impressionantes de um talentoso desenvolvedor front-end. Descubra o portfólio do ABC e mergulhe no mundo do design atraente, interfaces intuitivas e experiências digitais envolventes.">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    if (!function_exists('wp_body_open')) {
        function wp_body_open()
        {
            do_action('wp_body_open');
        }
    } 
    ?>

    <?php $site_color = get_theme_mod('set_site_color'); ?>

    <div id="page" style="background-color: <?php echo $site_color ?>;">

        <header id="header">
            <div class="header">
                <div class="header__logo">
                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                    ?>
                        <a href="<?php echo home_url('/') ?>">
                            <h4 class="header__logo--title"> &lt;/ <?php bloginfo('name') ?> &gt; </h4>
                        </a>
                    <?php
                    } ?>
                </div>

                <div class="header__dark__mod">
                    <i class="fa-regular fa-lightbulb"></i>
                    <div id="lightGroup" class="light__group">
                        <span class="light__line"></span>
                        <span class="light__line"></span>
                        <span class="light__line"></span>
                        <span class="light__line"></span>
                        <span class="light__line"></span>
                    </div>

                </div>

                <nav class="header__nav">
                    <button class="header__nav--buton" aria-label="Button dropdown">
                        <span class="header__button--line1"></span>
                        <span class="header__button--line2"></span>
                        <span class="header__button--line3"></span>
                    </button>
                    <div class="header__menu">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'abc_header_menu',
                            'depth' => 2,
                            'menu_class' => 'header__menu--list'
                        )); ?>

                        <div class="separator--content"></div>

                        <div class="header__social">
                            <!-- Linkedin -->
                            <a href="https://www.linkedin.com/in/allysoncavalcante/" aria-label="Link para o perfil do linkedin de Allyson Cavalcante" target="_blank">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <!-- Github -->
                            <a href="https://github.com/allysonbelo" target="_blank" aria-label="Link para o perfil do github de Allyson Cavalcante">
                                <i class="fa-brands fa-github"></i>
                            </a>
                            <!-- E-mail -->
                            <a href="mailto: allysonbelo@gmail.com" aria-label="Link para entrar em contato por e-mail com Allyson Cavalcante">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>