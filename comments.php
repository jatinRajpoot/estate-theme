<?php
/**
 * Comments Template
 *
 * @package Estate_Theme
 */

if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    
    <?php if (have_comments()) : ?>
    
    <h3 class="comments-title">
        <?php
        $comment_count = get_comments_number();
        printf(
            esc_html(_n('%d Comment', '%d Comments', $comment_count, 'estate-theme')),
            number_format_i18n($comment_count)
        );
        ?>
    </h3>
    
    <ol class="comment-list">
        <?php
        wp_list_comments(array(
            'style'       => 'ol',
            'short_ping'  => true,
            'callback'    => 'estate_comment_callback',
            'avatar_size' => 60,
        ));
        ?>
    </ol>
    
    <?php
    the_comments_navigation(array(
        'prev_text' => '<i class="fas fa-arrow-left"></i> ' . __('Older Comments', 'estate-theme'),
        'next_text' => __('Newer Comments', 'estate-theme') . ' <i class="fas fa-arrow-right"></i>',
    ));
    ?>
    
    <?php endif; ?>
    
    <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments"><?php esc_html_e('Comments are closed.', 'estate-theme'); ?></p>
    <?php endif; ?>
    
    <?php
    comment_form(array(
        'class_form'         => 'comment-form',
        'title_reply'        => __('Leave a Comment', 'estate-theme'),
        'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after'  => '</h3>',
        'comment_field'      => '<div class="form-group"><textarea id="comment" name="comment" rows="5" placeholder="' . esc_attr__('Your Comment...', 'estate-theme') . '" required></textarea></div>',
        'fields'             => array(
            'author' => '<div class="form-row"><div class="form-group"><input id="author" name="author" type="text" placeholder="' . esc_attr__('Name *', 'estate-theme') . '" required /></div>',
            'email'  => '<div class="form-group"><input id="email" name="email" type="email" placeholder="' . esc_attr__('Email *', 'estate-theme') . '" required /></div>',
            'url'    => '<div class="form-group"><input id="url" name="url" type="url" placeholder="' . esc_attr__('Website', 'estate-theme') . '" /></div></div>',
        ),
        'submit_button'      => '<button type="submit" class="btn btn-primary">' . esc_html__('Post Comment', 'estate-theme') . '</button>',
        'submit_field'       => '<div class="form-submit">%1$s %2$s</div>',
    ));
    ?>
    
</div>
