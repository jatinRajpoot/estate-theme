<?php
/**
 * Template part for displaying posts in archive
 *
 * @package Estate_Theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>" class="blog-image">
        <?php the_post_thumbnail('blog-thumbnail'); ?>
    </a>
    <?php endif; ?>
    
    <div class="blog-content">
        <div class="blog-meta">
            <span class="blog-date">
                <i class="far fa-calendar"></i>
                <?php echo get_the_date(); ?>
            </span>
            <?php
            $categories = get_the_category();
            if ($categories) :
            ?>
            <span class="blog-category">
                <i class="far fa-folder"></i>
                <?php echo esc_html($categories[0]->name); ?>
            </span>
            <?php endif; ?>
        </div>
        
        <h3 class="blog-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        
        <p class="blog-excerpt">
            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
        </p>
        
        <a href="<?php the_permalink(); ?>" class="blog-link">
            <?php esc_html_e('Read More', 'estate-theme'); ?>
            <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</article>
