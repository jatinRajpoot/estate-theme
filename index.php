<?php
/**
 * The main template file (fallback)
 *
 * @package Estate_Theme
 */

get_header();
?>

<!-- ========== Page Hero ========== -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1 class="page-title">
                <?php
                if (is_home() && !is_front_page()) {
                    single_post_title();
                } elseif (is_archive()) {
                    the_archive_title();
                } elseif (is_search()) {
                    printf(esc_html__('Search Results for: %s', 'estate-theme'), '<span>' . get_search_query() . '</span>');
                } else {
                    esc_html_e('Blog', 'estate-theme');
                }
                ?>
            </h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'estate-theme'); ?></a>
                <span>/</span>
                <span>
                    <?php
                    if (is_home() && !is_front_page()) {
                        single_post_title();
                    } elseif (is_archive()) {
                        the_archive_title();
                    } elseif (is_search()) {
                        esc_html_e('Search Results', 'estate-theme');
                    } else {
                        esc_html_e('Blog', 'estate-theme');
                    }
                    ?>
                </span>
            </div>
        </div>
    </div>
</section>

<!-- ========== Blog Content ========== -->
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
                        <h2><?php esc_html_e('Nothing Found', 'estate-theme'); ?></h2>
                        <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'estate-theme'); ?></p>
                        <?php get_search_form(); ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
