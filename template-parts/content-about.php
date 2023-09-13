<?php include get_template_directory() . '/inc/acf_variables.php'; ?>

<div class="about">
    <div class="about__content">
        <h2>About myself</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
    <div class="about__wrapper">
        <h2>My Skills</h2>
        <div class="about__skills">

            <?php if (is_array($front_skills)) {
                foreach ($front_skills as $skill) {
                    $skill = explode(":", $skill);
                    $skill_title = $skill[0];
                    $skill_value = $skill[1];
            ?>
                    <div class="about__icon">
                        <i class="about__icon--svg"><?php echo $skill_value ?></i>
                        <div class="separator"></div>
                        <span class="icon__name"><?php echo $skill_title ?></span>
                    </div>
            <?php
                }
            } else {
                echo $front_skills;
            } ?>

        </div>
    </div>
</div>