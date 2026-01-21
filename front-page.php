<?php
/**
 * Front Page Template
 *
 * @package Estate_Theme
 */

get_header();

// Get customizer values
$hero_title = get_theme_mod('estate_hero_title', __('Find Your Dream Home With Us', 'estate-theme'));
$hero_highlight = get_theme_mod('estate_hero_highlight', __('Dream Home', 'estate-theme'));
$hero_desc = get_theme_mod('estate_hero_desc', __('Discover the perfect property that matches your lifestyle. From luxury penthouses to cozy family homes, we help you find your ideal living space.', 'estate-theme'));
$hero_badge = get_theme_mod('estate_hero_badge', __('#1 Trusted Real Estate Agency', 'estate-theme'));

// Format title with highlight
$formatted_title = str_replace($hero_highlight, '<span>' . esc_html($hero_highlight) . '</span>', esc_html($hero_title));
?>

<!-- ========== Hero Section ========== -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <?php if ($hero_badge) : ?>
            <div class="hero-badge">
                <i class="fas fa-star"></i>
                <span><?php echo esc_html($hero_badge); ?></span>
            </div>
            <?php endif; ?>
            
            <h1 class="hero-title">
                <?php echo wp_kses_post($formatted_title); ?>
            </h1>
            
            <p class="hero-desc">
                <?php echo esc_html($hero_desc); ?>
            </p>
            
            <div class="hero-buttons">
                <a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                    <?php esc_html_e('Explore Properties', 'estate-theme'); ?>
                </a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="btn btn-outline">
                    <i class="fas fa-play"></i>
                    <?php esc_html_e('Learn More', 'estate-theme'); ?>
                </a>
            </div>
            
            <!-- Search Box -->
            <div class="hero-search">
                <div class="search-tabs">
                    <button class="search-tab active" data-status="for-sale"><?php esc_html_e('Buy', 'estate-theme'); ?></button>
                    <button class="search-tab" data-status="for-rent"><?php esc_html_e('Rent', 'estate-theme'); ?></button>
                </div>
                
                <form class="search-form" action="<?php echo esc_url(get_post_type_archive_link('property')); ?>" method="get">
                    <div class="search-field">
                        <label><?php esc_html_e('Location', 'estate-theme'); ?></label>
                        <input type="text" name="location" placeholder="<?php esc_attr_e('Enter city or area', 'estate-theme'); ?>">
                    </div>
                    
                    <div class="search-field">
                        <label><?php esc_html_e('Property Type', 'estate-theme'); ?></label>
                        <select name="property_type">
                            <option value=""><?php esc_html_e('All Types', 'estate-theme'); ?></option>
                            <?php
                            $types = get_terms(array('taxonomy' => 'property_type', 'hide_empty' => false));
                            if ($types && !is_wp_error($types)) :
                                foreach ($types as $type) :
                            ?>
                                <option value="<?php echo esc_attr($type->slug); ?>"><?php echo esc_html($type->name); ?></option>
                            <?php 
                                endforeach;
                            endif;
                            ?>
                        </select>
                    </div>
                    
                    <div class="search-field">
                        <label><?php esc_html_e('Price Range', 'estate-theme'); ?></label>
                        <select name="price_range">
                            <option value=""><?php esc_html_e('Any Price', 'estate-theme'); ?></option>
                            <option value="0-300000"><?php esc_html_e('$0 - $300K', 'estate-theme'); ?></option>
                            <option value="300000-500000"><?php esc_html_e('$300K - $500K', 'estate-theme'); ?></option>
                            <option value="500000-1000000"><?php esc_html_e('$500K - $1M', 'estate-theme'); ?></option>
                            <option value="1000000-999999999"><?php esc_html_e('$1M+', 'estate-theme'); ?></option>
                        </select>
                    </div>
                    
                    <button type="submit" class="search-btn">
                        <i class="fas fa-search"></i>
                        <?php esc_html_e('Search', 'estate-theme'); ?>
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    <div class="hero-decoration"></div>
    
    <div class="hero-stats">
        <div class="stat-item">
            <div class="stat-number"><?php echo esc_html(number_format(get_theme_mod('estate_stat1_number', 15000))); ?>+</div>
            <div class="stat-label"><?php echo esc_html(get_theme_mod('estate_stat1_label', __('Properties', 'estate-theme'))); ?></div>
        </div>
        <div class="stat-item">
            <div class="stat-number"><?php echo esc_html(number_format(get_theme_mod('estate_stat2_number', 8000))); ?>+</div>
            <div class="stat-label"><?php echo esc_html(get_theme_mod('estate_stat2_label', __('Happy Clients', 'estate-theme'))); ?></div>
        </div>
        <div class="stat-item">
            <div class="stat-number"><?php echo esc_html(get_theme_mod('estate_stat3_number', 200)); ?>+</div>
            <div class="stat-label"><?php echo esc_html(get_theme_mod('estate_stat3_label', __('Expert Agents', 'estate-theme'))); ?></div>
        </div>
    </div>
</section>

<!-- ========== Featured Properties ========== -->
<section class="section properties">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle"><?php esc_html_e('Featured Listings', 'estate-theme'); ?></span>
            <h2 class="section-title"><?php esc_html_e('Discover Our Best Properties', 'estate-theme'); ?></h2>
            <p class="section-desc">
                <?php esc_html_e('Explore our handpicked selection of premium properties that offer the best in luxury living.', 'estate-theme'); ?>
            </p>
        </div>
        
        <div class="properties-grid">
            <?php
            $featured_properties = estate_get_featured_properties(6);
            
            if ($featured_properties->have_posts()) :
                while ($featured_properties->have_posts()) : $featured_properties->the_post();
                    get_template_part('template-parts/property', 'card');
                endwhile;
                wp_reset_postdata();
            else :
                // Fallback: show recent properties
                $recent_properties = new WP_Query(array(
                    'post_type'      => 'property',
                    'posts_per_page' => 6,
                ));
                
                if ($recent_properties->have_posts()) :
                    while ($recent_properties->have_posts()) : $recent_properties->the_post();
                        get_template_part('template-parts/property', 'card');
                    endwhile;
                    wp_reset_postdata();
                else :
            ?>
                <p class="no-properties"><?php esc_html_e('No properties found. Add some properties to get started!', 'estate-theme'); ?></p>
            <?php 
                endif;
            endif;
            ?>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>" class="btn btn-outline">
                <?php esc_html_e('View All Properties', 'estate-theme'); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- ========== Why Choose Us ========== -->
<section class="section why-us">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle"><?php esc_html_e('Why Choose Us', 'estate-theme'); ?></span>
            <h2 class="section-title"><?php esc_html_e('Your Trusted Real Estate Partner', 'estate-theme'); ?></h2>
            <p class="section-desc">
                <?php esc_html_e('We provide exceptional service and expertise to help you make the best property decisions.', 'estate-theme'); ?>
            </p>
        </div>
        
        <div class="why-us-grid">
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="why-title"><?php esc_html_e('Wide Selection', 'estate-theme'); ?></h3>
                <p class="why-desc"><?php esc_html_e('Access to thousands of premium listings across prime locations.', 'estate-theme'); ?></p>
            </div>
            
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="why-title"><?php esc_html_e('Trusted Service', 'estate-theme'); ?></h3>
                <p class="why-desc"><?php esc_html_e('Over 15 years of excellence with verified and secure transactions.', 'estate-theme'); ?></p>
            </div>
            
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
                <h3 class="why-title"><?php esc_html_e('Best Prices', 'estate-theme'); ?></h3>
                <p class="why-desc"><?php esc_html_e('Competitive pricing and expert negotiation for best deals.', 'estate-theme'); ?></p>
            </div>
            
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="why-title"><?php esc_html_e('24/7 Support', 'estate-theme'); ?></h3>
                <p class="why-desc"><?php esc_html_e('Round-the-clock assistance from our dedicated team.', 'estate-theme'); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- ========== Statistics ========== -->
<section class="section stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stats-item">
                <div class="stats-number" data-count="<?php echo esc_attr(get_theme_mod('estate_stat1_number', 15000)); ?>" data-suffix="+">0</div>
                <div class="stats-label"><?php echo esc_html(get_theme_mod('estate_stat1_label', __('Properties Sold', 'estate-theme'))); ?></div>
            </div>
            <div class="stats-item">
                <div class="stats-number" data-count="<?php echo esc_attr(get_theme_mod('estate_stat2_number', 8500)); ?>" data-suffix="+">0</div>
                <div class="stats-label"><?php echo esc_html(get_theme_mod('estate_stat2_label', __('Happy Clients', 'estate-theme'))); ?></div>
            </div>
            <div class="stats-item">
                <div class="stats-number" data-count="<?php echo esc_attr(get_theme_mod('estate_stat3_number', 200)); ?>" data-suffix="+">0</div>
                <div class="stats-label"><?php echo esc_html(get_theme_mod('estate_stat3_label', __('Expert Agents', 'estate-theme'))); ?></div>
            </div>
            <div class="stats-item">
                <div class="stats-number" data-count="<?php echo esc_attr(get_theme_mod('estate_stat4_number', 50)); ?>" data-suffix="+">0</div>
                <div class="stats-label"><?php echo esc_html(get_theme_mod('estate_stat4_label', __('Cities Covered', 'estate-theme'))); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- ========== Latest Blog Posts ========== -->
<?php
$recent_posts = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
));

if ($recent_posts->have_posts()) :
?>
<section class="section blog-section">
    <div class="container">
        <div class="section-header">
            <span class="section-subtitle"><?php esc_html_e('From Our Blog', 'estate-theme'); ?></span>
            <h2 class="section-title"><?php esc_html_e('Latest News & Articles', 'estate-theme'); ?></h2>
            <p class="section-desc">
                <?php esc_html_e('Stay updated with the latest real estate trends, tips, and market insights.', 'estate-theme'); ?>
            </p>
        </div>
        
        <div class="blog-grid">
            <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
            <article class="blog-card">
                <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" class="blog-image">
                    <?php the_post_thumbnail('blog-thumbnail'); ?>
                </a>
                <?php endif; ?>
                <div class="blog-content">
                    <div class="blog-meta">
                        <span class="blog-date"><i class="far fa-calendar"></i> <?php echo get_the_date(); ?></span>
                        <span class="blog-category">
                            <?php
                            $categories = get_the_category();
                            if ($categories) {
                                echo '<i class="far fa-folder"></i> ' . esc_html($categories[0]->name);
                            }
                            ?>
                        </span>
                    </div>
                    <h3 class="blog-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <p class="blog-excerpt"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
                    <a href="<?php the_permalink(); ?>" class="blog-link">
                        <?php esc_html_e('Read More', 'estate-theme'); ?>
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        
        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="btn btn-outline">
                <?php esc_html_e('View All Posts', 'estate-theme'); ?>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- ========== Newsletter ========== -->
<section class="section newsletter">
    <div class="container">
        <div class="newsletter-content">
            <div class="newsletter-text">
                <h3><?php esc_html_e('Stay Updated', 'estate-theme'); ?></h3>
                <p><?php esc_html_e('Subscribe to our newsletter for the latest property listings and market insights.', 'estate-theme'); ?></p>
            </div>
            <form class="newsletter-form" action="#" method="post">
                <input type="email" name="newsletter_email" placeholder="<?php esc_attr_e('Enter your email address', 'estate-theme'); ?>" required>
                <button type="submit" class="btn btn-primary"><?php esc_html_e('Subscribe', 'estate-theme'); ?></button>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
