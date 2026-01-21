<?php
/**
 * Archive Template
 *
 * @package Estate_Theme
 */

get_header();
?>

<!-- ========== Page Hero ========== -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1 class="page-title"><?php the_archive_title(); ?></h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'estate-theme'); ?></a>
                <span>/</span>
                <span><?php the_archive_title(); ?></span>
            </div>
            <?php if (get_the_archive_description()) : ?>
                <div class="archive-description">
                    <?php the_archive_description(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- ========== Archive Content ========== -->
<section class="section blog-archive">
    <div class="container">
        <div class="blog-layout">
            <div class="blog-main">
                <?php if (have_posts()) : ?>
                    <div class="blog-grid">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('template-parts/content', get_post_type()); ?>
                        <?php endwhile; ?>
                    </div>
                    
                    <?php estate_pagination(); ?>
                    
                <?php else : ?>
                    <div class="no-results">
                        <h2><?php esc_html_e('No Posts Found', 'estate-theme'); ?></h2>
                        <p><?php esc_html_e('It seems we can\'t find what you\'re looking for.', 'estate-theme'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
