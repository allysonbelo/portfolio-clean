<?php get_header() ?>

<div class="wrapper">
    <main class="main__404">
        <section class="main__404__container">
            <h1 class="main__404--title">A página saiu para tomar um café e esqueceu de nos chamar!</h1>
            <div class="">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script><lottie-player src="https://lottie.host/9d9caeb4-396e-4c97-bb2b-ba118907cf44/CqgIyj6adZ.json" background="" speed="1" style="width: 300px; height: 300px" loop autoplay direction="1" mode="normal"></lottie-player>
            </div>
            <a class="button" href="/">Voltar</a>
        </section>

        <section>
            <?php get_template_part('template-parts/content', 'releated-post') ?>
        </section>

    </main>
</div>

<?php get_footer() ?>