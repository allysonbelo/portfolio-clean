<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/81cf49532b.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="page">

        <header id="header">
            <div class="header">
                <div class="logo">
                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                    ?>
                        <a href="<?php echo home_url('/') ?>">
                            <h4 class="logo__header"><?php bloginfo('name') ?></h4>
                        </a>
                    <?php
                    } ?>
                </div>

                <nav>
                    <ul>
                        <li>Home</li>
                        <li>Sobre</li>
                        <li>Projetos</li>
                        <li>Contato</li>
                    </ul>
                </nav>
            </div>
        </header>