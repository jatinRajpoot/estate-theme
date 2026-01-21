<?php
/**
 * Search Results Template
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
                <?php printf(esc_html__('Search Results for: %s', 'estate-theme'), '<span>' . get_search_query() . '</span>'); ?>
            </h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'estate-theme'); ?></a>
                <span>/</span>
                <span><?php esc_html_e('Search Results', 'estate-theme'); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- ========== Search Results ========== -->
<section class="section search-results">
    <div class="container">
        <div class="blog-layout">
            <div class="blog-main">
                <?php if (have_posts()) : ?>
                    <p class="results-count">
                        <?php
                        global $wp_query;
                        printf(
                            esc_html(_n('%d result found', '%d results found', $wp_query->found_posts, 'estate-theme')),
                            $wp_query->found_posts
                        );
                        ?>
                    </p>
                    
                    <div class="search-results-list">
                        <?php while (have_posts()) : the_post(); ?>
                            <article class="search-result-item">
                                <?php if (has_post_thumbnail()) : ?>
                                <a href="<?php the_permalink(); ?>" class="result-thumbnail">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </a>
                                <?php endif; ?>
                                
                                <div class="result-content">
                                    <span class="result-type">
                                        <?php
                                        $post_type = get_post_type();
                                        $post_type_obj = get_post_type_object($post_type);
                                        echo esc_html($post_type_obj->labels->singular_name);
                                        ?>
                                    </span>
                                    <h3 class="result-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <p class="result-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="result-link">
                                        <?php esc_html_e('Read More', 'estate-theme'); ?>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    
                    <?php estate_pagination(); ?>
                    
                <?php else : ?>
                    <div class="no-results">
                        <i class="fas fa-search" style="font-size: 48px; color: var(--accent-gold); margin-bottom: 20px;"></i>
                        <h2><?php esc_html_e('No Results Found', 'estate-theme'); ?></h2>
                        <p><?php esc_html_e('Sorry, no results match your search. Try different keywords.', 'estate-theme'); ?></p>
                        <?php get_search_form(); ?>
                    </div>
                <?php endif; ?>
            </div>
            
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
