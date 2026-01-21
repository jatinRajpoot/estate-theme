<?php
/**
 * 404 Error Page Template
 *
 * @package Estate_Theme
 */

get_header();
?>

<!-- ========== 404 Content ========== -->
<section class="section error-404">
    <div class="container">
        <div class="error-content">
            <div class="error-icon">
                <i class="fas fa-home"></i>
            </div>
            <h1 class="error-title">404</h1>
            <h2 class="error-subtitle"><?php esc_html_e('Page Not Found', 'estate-theme'); ?></h2>
            <p class="error-description">
                <?php esc_html_e('Oops! The page you\'re looking for doesn\'t exist or has been moved.', 'estate-theme'); ?>
            </p>
            
            <div class="error-actions">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    <i class="fas fa-home"></i>
                    <?php esc_html_e('Back to Home', 'estate-theme'); ?>
                </a>
                <a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>" class="btn btn-outline">
                    <i class="fas fa-building"></i>
                    <?php esc_html_e('Browse Properties', 'estate-theme'); ?>
                </a>
            </div>
            
            <div class="error-search">
                <p><?php esc_html_e('Or try searching:', 'estate-theme'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
