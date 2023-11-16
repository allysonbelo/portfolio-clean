<footer class="footer">

    <div class="footer__container">
        <div class="footer__container--logo">
            <?php if (has_custom_logo()) {
                the_custom_logo();
            } else {
            ?>
                <?php if (has_custom_logo()) {
                    the_custom_logo();
                } else {
                ?>
                    <a href="<?php echo home_url('/') ?>">
                        <span class="footer__logo--title"> &lt;/ <?php bloginfo('name') ?> &gt; </span>
                    </a>
                <?php
                } ?>
            <?php
            } ?>
        </div>
        <div class="footer__container--other">
            <div class="footer__title--menu">
                <h4>Menu</h4>
                <i class="fa-solid fa-caret-down"></i>
            </div>
            <nav>
                <?php wp_nav_menu(array(
                    'theme_location' => 'abc_footer_menu',
                    'depth' => 3,
                    'menu_class' => 'other__menu--list'
                )); ?>
            </nav>
        </div>
        <div class="footer__container--social">
            <span>Onde Estou?</span>

            <div class="footer__social">
                <!-- Linkedin -->
                <a href="https://www.linkedin.com/in/allysoncavalcante/" aria-label="Link para o perfil do linkedin de Allyson Cavalcante" target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <!-- Github -->
                <a href="https://github.com/allysonbelo" target="_blank" aria-label="Link para o perfil do github de Allyson Cavalcante">
                    <i class="fa-brands fa-github"></i>
                </a>
                <!-- E-mail -->
                <a href="mailto: contato@allysonbelo.com" aria-label="Link para entrar em contato por e-mail com Allyson Cavalcante">
                    <i class="fa-solid fa-envelope"></i>
                </a>
            </div>

        </div>
        <div class="footer__container--copy">
            <p><?php echo get_theme_mod('set_copyright') ?></p>
        </div>
    </div>

</footer>
</div>

<div class="cover__menu">teste</div>
<?php wp_footer(); ?>

</body>

</html>