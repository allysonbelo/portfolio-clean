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
            <!-- <form action="<?php echo get_template_directory_uri() . '/email/send_email.php'; ?>" method="POST" onsubmit="return validateForm()">

                <input type="text" id="name" name="name" placeholder="Name">
                <span id="nameError" class="error-message"></span>

                <input type="email" id="email" name="email" placeholder="E-mail">
                <span id="emailError" class="error-message"></span>

                <input type="text" id="subject" name="subject" placeholder="Subject">
                <span id="subjectError" class="error-message"></span>

                <textarea id="message" name="message" rows="4" placeholder="Message"></textarea>
                <span id="messageError" class="error-message"></span>

                <button type="submit" class="button"><?php echo esc_html($text_contact_button); ?></button>

            </form>

            <script>
                function validateForm() {
                    var name = document.getElementById("name").value;
                    var email = document.getElementById("email").value;
                    var subject = document.getElementById("subject").value;
                    var message = document.getElementById("message").value;

                    var nameError = document.getElementById("nameError");
                    var emailError = document.getElementById("emailError");
                    var subjectError = document.getElementById("subjectError");
                    var messageError = document.getElementById("messageError");

                    nameError.textContent = "";
                    emailError.textContent = "";
                    subjectError.textContent = "";
                    messageError.textContent = "";

                    if (name === "") {
                        nameError.textContent = "Please enter your name";
                        return false;
                    }

                    if (!validateEmail(email)) {
                        emailError.textContent = "Please enter a valid email";
                        return false;
                    }

                    if (subject === "") {
                        subjectError.textContent = "Please enter a subject";
                        return false;
                    }

                    if (message === "") {
                        messageError.textContent = "Please enter a message";
                        return false;
                    }
                }

                function validateEmail(email) {
                    var re = /\S+@\S+\.\S+/;
                    return re.test(email);
                }
            </script>

            <style>
                .error-message {
                    color: #fb9e9e !important;
                }
            </style> -->

            <?php
            // Adicione o formulário WPForms usando o shortcode
            echo do_shortcode('[wpforms id="579" title="false"]');
            ?>

        </div>
    </section>
</div>