<?php
/**
 * Single Post Template
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
                <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"><?php esc_html_e('Blog', 'estate-theme'); ?></a>
                <span>/</span>
                <span><?php the_title(); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- ========== Single Post Content ========== -->
<section class="section single-post">
    <div class="container">
        <div class="blog-layout">
            <article id="post-<?php the_ID(); ?>" <?php post_class('blog-main'); ?>>
                <?php while (have_posts()) : the_post(); ?>
                    
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="post-featured-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <?php endif; ?>
                    
                    <div class="post-meta">
                        <span class="post-date">
                            <i class="far fa-calendar"></i>
                            <?php echo get_the_date(); ?>
                        </span>
                        <span class="post-author">
                            <i class="far fa-user"></i>
                            <?php the_author(); ?>
                        </span>
                        <?php
                        $categories = get_the_category();
                        if ($categories) :
                        ?>
                        <span class="post-category">
                            <i class="far fa-folder"></i>
                            <?php echo esc_html($categories[0]->name); ?>
                        </span>
                        <?php endif; ?>
                        <?php if (comments_open()) : ?>
                        <span class="post-comments">
                            <i class="far fa-comment"></i>
                            <?php comments_number(__('0 Comments', 'estate-theme'), __('1 Comment', 'estate-theme'), __('% Comments', 'estate-theme')); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                    
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    
                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'estate-theme'),
                        'after'  => '</div>',
                    ));
                    ?>
                    
                    <?php
                    $tags = get_the_tags();
                    if ($tags) :
                    ?>
                    <div class="post-tags">
                        <span class="tags-label"><i class="fas fa-tags"></i> <?php esc_html_e('Tags:', 'estate-theme'); ?></span>
                        <?php foreach ($tags as $tag) : ?>
                            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="tag-link">
                                <?php echo esc_html($tag->name); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Author Box -->
                    <div class="author-box">
                        <div class="author-avatar">
                            <?php echo get_avatar(get_the_author_meta('ID'), 100); ?>
                        </div>
                        <div class="author-info">
                            <h4 class="author-name"><?php the_author(); ?></h4>
                            <p class="author-bio"><?php echo esc_html(get_the_author_meta('description')); ?></p>
                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="author-link">
                                <?php esc_html_e('View all posts', 'estate-theme'); ?>
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Post Navigation -->
                    <nav class="post-navigation">
                        <div class="nav-previous">
                            <?php
                            $prev_post = get_previous_post();
                            if ($prev_post) :
                            ?>
                                <span class="nav-label"><i class="fas fa-arrow-left"></i> <?php esc_html_e('Previous', 'estate-theme'); ?></span>
                                <a href="<?php echo esc_url(get_permalink($prev_post)); ?>" class="nav-title">
                                    <?php echo esc_html($prev_post->post_title); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="nav-next">
                            <?php
                            $next_post = get_next_post();
                            if ($next_post) :
                            ?>
                                <span class="nav-label"><?php esc_html_e('Next', 'estate-theme'); ?> <i class="fas fa-arrow-right"></i></span>
                                <a href="<?php echo esc_url(get_permalink($next_post)); ?>" class="nav-title">
                                    <?php echo esc_html($next_post->post_title); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </nav>
                    
                    <!-- Comments -->
                    <?php
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;
                    ?>
                    
                <?php endwhile; ?>
            </article>
            
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
