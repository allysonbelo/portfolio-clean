<?php
if (post_password_required()) {
    return;
}

if (have_comments()) :
    ?>
    <h2 class="comments-title">
        <?php
        $comments_number = get_comments_number();
        if ($comments_number === 1) {
            printf(_x('One Comment', 'comments title', 'textdomain'));
        } else {
            printf(
                _nx('%1$s Comment', '%1$s Comments', $comments_number, 'comments title', 'textdomain'),
                number_format_i18n($comments_number)
            );
        }
        ?>
    </h2>

    <ul class="comment-list">
        <?php
        wp_list_comments(
            array(
                'style' => 'ul',
                'short_ping' => true,
                'avatar_size' => 50,
            )
        );
        ?>
    </ul>

    <?php
    the_comments_pagination(
        array(
            'prev_text' => __('Previous', 'textdomain'),
            'next_text' => __('Next', 'textdomain'),
        )
    );
endif;

if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
    ?>
    <p class="no-comments"><?php _e('Comments are closed.', 'textdomain'); ?></p>
<?php endif; ?>

<?php
comment_form(
    array(
        'title_reply' => __('Leave a Comment', 'textdomain'),
        'label_submit' => __('Post Comment', 'textdomain'),
    )
);
?>