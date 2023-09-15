<?php
/*
 * Template Name: Obrigado
 * Template Post Type: page
 */

get_header();

?>

<div class="wrapper" style="padding-top: 120px; padding-bottom: 120px;">

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    endif;
    ?>
    <hr>
    <div id="countdown" style="font-size: 24px; text-align: center;"></div>
</div>

<!-- Adicionar o código JavaScript para a contagem decrescente -->
<script>
    // Função para exibir a contagem decrescente
    function countdown() {
        let timeLeft = 10; // Tempo inicial em segundos

        const countdownElement = document.getElementById('countdown');

        const interval = setInterval(function () {
            countdownElement.innerHTML = timeLeft + ' segundos';

            if (timeLeft <= 1) {
                clearInterval(interval);
                countdownElement.innerHTML = 'Redirecionando...';
                // Redirecionar para a página inicial após 10 segundos
                window.location.href = '<?php echo esc_url(home_url()); ?>';
            }

            timeLeft--;
        }, 1000); // 1000 milissegundos = 1 segundo
    }

    // Iniciar a contagem quando a página for carregada
    window.onload = function () {
        countdown();
    };
</script>

<?php get_footer(); ?>