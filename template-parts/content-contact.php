<?php include get_template_directory() . '/inc/acf_variables.php'; ?>

<div class="contact__wrapper">
    <section id="contact__wrapper--left">
        <div class="contact__content">
            <h2><?php echo esc_html($title_contact); ?></h2>
            <h3><?php echo $text_contact ?></h3>
        </div>
        <div class="contact__lottie">
            <lottie-player src="<?php echo $lottie_url ?>" background="<?php echo $lottie_bg_color ?>" speed="<?php echo $lottie_speed ?>" style="width: 300px; height: 300px" <?php echo ($lottie_loop == 'true') ? 'loop' : ''; ?> <?php echo ($lottie_autoplay == 'true') ? 'autoplay' : ''; ?> direction="<?php echo $lottie_direction ?>">
            </lottie-player>
        </div>
    </section>

    <!-- Parte 2: Formulário de Contato -->
    <section id="contact__wrapper--right">
        <div class="contact__container">
            <form action="<?php echo get_template_directory_uri() . '/email/send_email.php'; ?>" method="POST">

                <!-- <label for="name">Name:</label> -->
                <input type="text" id="name" name="name" required placeholder="Name">

                <!-- <label for="email">Email:</label> -->
                <input type="email" id="email" name="email" required placeholder="E-mail">

                <!-- <label for="subject">Subject:</label> -->
                <input type="text" id="subject" name="subject" required placeholder="Subject">

                <!-- <label for="message">Message:</label> -->
                <textarea id="message" name="message" rows="4" required placeholder="Message"></textarea>

                <button type="submit" class="button"><?php echo esc_html($text_contact_button); ?></button>

            </form>
        </div>
    </section>
</div>