<?php
/**
 * Property Archive Template
 *
 * @package Estate_Theme
 */

get_header();
?>

<!-- ========== Page Hero ========== -->
<section class="page-hero">
    <div class="container">
        <div class="page-hero-content">
            <h1 class="page-title"><?php esc_html_e('Properties', 'estate-theme'); ?></h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'estate-theme'); ?></a>
                <span>/</span>
                <span><?php esc_html_e('Properties', 'estate-theme'); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- ========== Property Filters ========== -->
<section class="property-filters-section">
    <div class="container">
        <form class="property-filters" method="get" action="<?php echo esc_url(get_post_type_archive_link('property')); ?>">
            <div class="filter-group">
                <label><?php esc_html_e('Property Type', 'estate-theme'); ?></label>
                <select name="property_type">
                    <option value=""><?php esc_html_e('All Types', 'estate-theme'); ?></option>
                    <?php
                    $types = get_terms(array('taxonomy' => 'property_type', 'hide_empty' => true));
                    $current_type = isset($_GET['property_type']) ? sanitize_text_field($_GET['property_type']) : '';
                    if ($types && !is_wp_error($types)) :
                        foreach ($types as $type) :
                    ?>
                        <option value="<?php echo esc_attr($type->slug); ?>" <?php selected($current_type, $type->slug); ?>>
                            <?php echo esc_html($type->name); ?>
                        </option>
                    <?php 
                        endforeach;
                    endif;
                    ?>
                </select>
            </div>
            
            <div class="filter-group">
                <label><?php esc_html_e('Location', 'estate-theme'); ?></label>
                <select name="property_location">
                    <option value=""><?php esc_html_e('All Locations', 'estate-theme'); ?></option>
                    <?php
                    $locations = get_terms(array('taxonomy' => 'property_location', 'hide_empty' => true));
                    $current_location = isset($_GET['property_location']) ? sanitize_text_field($_GET['property_location']) : '';
                    if ($locations && !is_wp_error($locations)) :
                        foreach ($locations as $location) :
                    ?>
                        <option value="<?php echo esc_attr($location->slug); ?>" <?php selected($current_location, $location->slug); ?>>
                            <?php echo esc_html($location->name); ?>
                        </option>
                    <?php 
                        endforeach;
                    endif;
                    ?>
                </select>
            </div>
            
            <div class="filter-group">
                <label><?php esc_html_e('Status', 'estate-theme'); ?></label>
                <select name="property_status">
                    <option value=""><?php esc_html_e('Any Status', 'estate-theme'); ?></option>
                    <?php
                    $statuses = get_terms(array('taxonomy' => 'property_status', 'hide_empty' => true));
                    $current_status = isset($_GET['property_status']) ? sanitize_text_field($_GET['property_status']) : '';
                    if ($statuses && !is_wp_error($statuses)) :
                        foreach ($statuses as $status) :
                    ?>
                        <option value="<?php echo esc_attr($status->slug); ?>" <?php selected($current_status, $status->slug); ?>>
                            <?php echo esc_html($status->name); ?>
                        </option>
                    <?php 
                        endforeach;
                    endif;
                    ?>
                </select>
            </div>
            
            <div class="filter-group">
                <label><?php esc_html_e('Price Range', 'estate-theme'); ?></label>
                <select name="price_range">
                    <option value=""><?php esc_html_e('Any Price', 'estate-theme'); ?></option>
                    <?php
                    $current_price = isset($_GET['price_range']) ? sanitize_text_field($_GET['price_range']) : '';
                    $price_ranges = array(
                        '0-300000' => __('$0 - $300K', 'estate-theme'),
                        '300000-500000' => __('$300K - $500K', 'estate-theme'),
                        '500000-1000000' => __('$500K - $1M', 'estate-theme'),
                        '1000000-999999999' => __('$1M+', 'estate-theme'),
                    );
                    foreach ($price_ranges as $value => $label) :
                    ?>
                        <option value="<?php echo esc_attr($value); ?>" <?php selected($current_price, $value); ?>>
                            <?php echo esc_html($label); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <div class="filter-group filter-buttons">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                    <?php esc_html_e('Filter', 'estate-theme'); ?>
                </button>
                <a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>" class="btn btn-outline">
                    <?php esc_html_e('Reset', 'estate-theme'); ?>
                </a>
            </div>
        </form>
    </div>
</section>

<!-- ========== Properties Grid ========== -->
<section class="section properties">
    <div class="container">
        <?php
        // Handle filtering via query
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        
        $args = array(
            'post_type'      => 'property',
            'posts_per_page' => 9,
            'paged'          => $paged,
        );
        
        // Tax query
        $tax_query = array('relation' => 'AND');
        
        if (!empty($_GET['property_type'])) {
            $tax_query[] = array(
                'taxonomy' => 'property_type',
                'field'    => 'slug',
                'terms'    => sanitize_text_field($_GET['property_type']),
            );
        }
        
        if (!empty($_GET['property_location'])) {
            $tax_query[] = array(
                'taxonomy' => 'property_location',
                'field'    => 'slug',
                'terms'    => sanitize_text_field($_GET['property_location']),
            );
        }
        
        if (!empty($_GET['property_status'])) {
            $tax_query[] = array(
                'taxonomy' => 'property_status',
                'field'    => 'slug',
                'terms'    => sanitize_text_field($_GET['property_status']),
            );
        }
        
        if (count($tax_query) > 1) {
            $args['tax_query'] = $tax_query;
        }
        
        // Price filter
        if (!empty($_GET['price_range'])) {
            $range = explode('-', sanitize_text_field($_GET['price_range']));
            if (count($range) === 2) {
                $args['meta_query'] = array(
                    array(
                        'key'     => '_property_price',
                        'value'   => array(intval($range[0]), intval($range[1])),
                        'type'    => 'NUMERIC',
                        'compare' => 'BETWEEN',
                    ),
                );
            }
        }
        
        $properties = new WP_Query($args);
        ?>
        
        <?php if ($properties->have_posts()) : ?>
            <div class="properties-grid">
                <?php while ($properties->have_posts()) : $properties->the_post(); ?>
                    <?php get_template_part('template-parts/property', 'card'); ?>
                <?php endwhile; ?>
            </div>
            
            <?php
            // Pagination
            $big = 999999999;
            $pages = paginate_links(array(
                'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format'    => '?paged=%#%',
                'current'   => max(1, $paged),
                'total'     => $properties->max_num_pages,
                'type'      => 'array',
                'prev_text' => '<i class="fas fa-chevron-left"></i>',
                'next_text' => '<i class="fas fa-chevron-right"></i>',
            ));
            
            if (is_array($pages) && count($pages) > 1) :
            ?>
                <nav class="pagination">
                    <ul class="pagination-list">
                        <?php foreach ($pages as $page) : ?>
                            <li class="pagination-item"><?php echo $page; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </nav>
            <?php endif; ?>
            
            <?php wp_reset_postdata(); ?>
            
        <?php else : ?>
            <div class="no-results">
                <i class="fas fa-home" style="font-size: 48px; color: var(--accent-gold); margin-bottom: 20px;"></i>
                <h2><?php esc_html_e('No Properties Found', 'estate-theme'); ?></h2>
                <p><?php esc_html_e('Sorry, no properties match your criteria. Try adjusting your filters or check back later.', 'estate-theme'); ?></p>
                <a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>" class="btn btn-primary">
                    <?php esc_html_e('View All Properties', 'estate-theme'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
