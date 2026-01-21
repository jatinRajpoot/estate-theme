<?php
/**
 * Template Functions
 *
 * @package Estate_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Fallback menu if no primary menu is set
 */
function estate_theme_fallback_menu() {
    echo '<ul class="nav-menu-list">';
    echo '<li><a href="' . esc_url(home_url('/')) . '" class="nav-link">' . esc_html__('Home', 'estate-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(get_post_type_archive_link('property')) . '" class="nav-link">' . esc_html__('Properties', 'estate-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(get_permalink(get_page_by_path('about'))) . '" class="nav-link">' . esc_html__('About', 'estate-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(get_permalink(get_page_by_path('contact'))) . '" class="nav-link">' . esc_html__('Contact', 'estate-theme') . '</a></li>';
    echo '</ul>';
}

/**
 * Fallback menu for footer
 */
function estate_theme_footer_fallback_menu() {
    echo '<ul class="footer-links">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'estate-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(get_page_link(get_option('page_for_posts'))) . '">' . esc_html__('Blog', 'estate-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(get_post_type_archive_link('property')) . '">' . esc_html__('Properties', 'estate-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(get_permalink(get_page_by_path('about'))) . '">' . esc_html__('About Us', 'estate-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(get_permalink(get_page_by_path('contact'))) . '">' . esc_html__('Contact', 'estate-theme') . '</a></li>';
    echo '</ul>';
}

/**
 * Get property price formatted
 */
function estate_get_property_price($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $price = get_post_meta($post_id, '_property_price', true);
    $suffix = get_post_meta($post_id, '_property_price_suffix', true);
    
    if (!$price) {
        return __('Price on Request', 'estate-theme');
    }
    
    $formatted = '$' . number_format(floatval($price));
    if ($suffix) {
        $formatted .= '<span class="price-suffix">' . esc_html($suffix) . '</span>';
    }
    
    return $formatted;
}

/**
 * Get property features
 */
function estate_get_property_features($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $features = array();
    
    $bedrooms = get_post_meta($post_id, '_property_bedrooms', true);
    if ($bedrooms) {
        $features['beds'] = array(
            'icon' => 'fa-bed',
            'value' => $bedrooms,
            'label' => _n('Bed', 'Beds', $bedrooms, 'estate-theme'),
        );
    }
    
    $bathrooms = get_post_meta($post_id, '_property_bathrooms', true);
    if ($bathrooms) {
        $features['baths'] = array(
            'icon' => 'fa-bath',
            'value' => $bathrooms,
            'label' => _n('Bath', 'Baths', $bathrooms, 'estate-theme'),
        );
    }
    
    $sqft = get_post_meta($post_id, '_property_sqft', true);
    if ($sqft) {
        $features['sqft'] = array(
            'icon' => 'fa-ruler-combined',
            'value' => number_format($sqft),
            'label' => __('sqft', 'estate-theme'),
        );
    }
    
    $garage = get_post_meta($post_id, '_property_garage', true);
    if ($garage) {
        $features['garage'] = array(
            'icon' => 'fa-car',
            'value' => $garage,
            'label' => __('Car Garage', 'estate-theme'),
        );
    }
    
    return $features;
}

/**
 * Display property features HTML
 */
function estate_display_property_features($post_id = null) {
    $features = estate_get_property_features($post_id);
    
    if (empty($features)) {
        return;
    }
    
    echo '<div class="property-features">';
    foreach ($features as $feature) {
        echo '<span class="feature">';
        echo '<i class="fas ' . esc_attr($feature['icon']) . ' feature-icon"></i> ';
        echo esc_html($feature['value']) . ' ' . esc_html($feature['label']);
        echo '</span>';
    }
    echo '</div>';
}

/**
 * Get property location
 */
function estate_get_property_location($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    // First try custom address
    $address = get_post_meta($post_id, '_property_address', true);
    if ($address) {
        return $address;
    }
    
    // Fall back to taxonomy
    $terms = get_the_terms($post_id, 'property_location');
    if ($terms && !is_wp_error($terms)) {
        return $terms[0]->name;
    }
    
    return '';
}

/**
 * Get featured properties
 */
function estate_get_featured_properties($count = 6) {
    return new WP_Query(array(
        'post_type'      => 'property',
        'posts_per_page' => $count,
        'meta_query'     => array(
            array(
                'key'   => '_property_featured',
                'value' => '1',
            ),
        ),
    ));
}

/**
 * Get property status badge
 */
function estate_get_property_badge($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    // Check if featured
    $is_featured = get_post_meta($post_id, '_property_featured', true);
    if ($is_featured) {
        return __('Featured', 'estate-theme');
    }
    
    // Check status taxonomy
    $terms = get_the_terms($post_id, 'property_status');
    if ($terms && !is_wp_error($terms)) {
        return $terms[0]->name;
    }
    
    // Check if new (within last 7 days)
    $post_date = get_the_date('U', $post_id);
    $seven_days_ago = strtotime('-7 days');
    if ($post_date > $seven_days_ago) {
        return __('New', 'estate-theme');
    }
    
    return '';
}

/**
 * Pagination
 */
function estate_pagination() {
    global $wp_query;
    
    $big = 999999999;
    
    $pages = paginate_links(array(
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => max(1, get_query_var('paged')),
        'total'     => $wp_query->max_num_pages,
        'type'      => 'array',
        'prev_text' => '<i class="fas fa-chevron-left"></i>',
        'next_text' => '<i class="fas fa-chevron-right"></i>',
    ));
    
    if (is_array($pages)) {
        echo '<nav class="pagination">';
        echo '<ul class="pagination-list">';
        foreach ($pages as $page) {
            echo '<li class="pagination-item">' . $page . '</li>';
        }
        echo '</ul>';
        echo '</nav>';
    }
}

/**
 * Get related properties
 */
function estate_get_related_properties($post_id = null, $count = 3) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    // Get property type
    $terms = get_the_terms($post_id, 'property_type');
    $term_ids = $terms && !is_wp_error($terms) ? wp_list_pluck($terms, 'term_id') : array();
    
    $args = array(
        'post_type'      => 'property',
        'posts_per_page' => $count,
        'post__not_in'   => array($post_id),
    );
    
    if (!empty($term_ids)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'property_type',
                'field'    => 'term_id',
                'terms'    => $term_ids,
            ),
        );
    }
    
    return new WP_Query($args);
}

/**
 * Comments callback
 */
function estate_comment_callback($comment, $args, $depth) {
    $tag = ('div' === $args['style']) ? 'div' : 'li';
    ?>
    <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class('comment-item'); ?>>
        <article class="comment-body">
            <div class="comment-author">
                <?php echo get_avatar($comment, 60, '', '', array('class' => 'author-avatar')); ?>
                <div class="author-info">
                    <h4 class="author-name"><?php comment_author(); ?></h4>
                    <time class="comment-date"><?php comment_date(); ?></time>
                </div>
            </div>
            <div class="comment-content">
                <?php comment_text(); ?>
            </div>
            <?php
            comment_reply_link(array_merge($args, array(
                'depth'     => $depth,
                'max_depth' => $args['max_depth'],
                'before'    => '<div class="comment-reply">',
                'after'     => '</div>',
            )));
            ?>
        </article>
    <?php
}
