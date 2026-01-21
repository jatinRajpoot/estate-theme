<?php
/**
 * Page Template
 *
 * @package Estate_Theme
 */

get_header();
?>

<!-- ========== Page Hero ========== -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'estate-theme'); ?></a>
                <span>/</span>
                <span><?php the_title(); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- ========== Page Content ========== -->
<section class="section page-content">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if (has_post_thumbnail()) : ?>
                <div class="page-featured-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <?php endif; ?>
                
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                
                <?php
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'estate-theme'),
                    'after'  => '</div>',
                ));
                ?>
            </article>
            
            <?php
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
