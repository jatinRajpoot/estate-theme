<?php
/**
 * SEO Functions
 *
 * @package Estate_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Output Schema.org JSON-LD for Properties
 */
function estate_property_schema() {
    if (!is_singular('property')) {
        return;
    }

    global $post;

    $price = get_post_meta($post->ID, '_property_price', true);
    $bedrooms = get_post_meta($post->ID, '_property_bedrooms', true);
    $bathrooms = get_post_meta($post->ID, '_property_bathrooms', true);
    $sqft = get_post_meta($post->ID, '_property_sqft', true);
    $address = get_post_meta($post->ID, '_property_address', true);
    
    $location_terms = get_the_terms($post->ID, 'property_location');
    $location = $location_terms && !is_wp_error($location_terms) ? $location_terms[0]->name : '';

    $type_terms = get_the_terms($post->ID, 'property_type');
    $property_type = $type_terms && !is_wp_error($type_terms) ? $type_terms[0]->name : 'Residential';

    $status_terms = get_the_terms($post->ID, 'property_status');
    $status = $status_terms && !is_wp_error($status_terms) ? $status_terms[0]->name : '';

    // Determine if for sale or rent
    $offer_type = (stripos($status, 'rent') !== false) ? 'https://schema.org/Rent' : 'https://schema.org/Sale';

    $image_url = get_the_post_thumbnail_url($post->ID, 'large');

    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'RealEstateListing',
        'name' => get_the_title(),
        'description' => get_the_excerpt(),
        'url' => get_permalink(),
        'datePosted' => get_the_date('c'),
        'image' => $image_url ? $image_url : '',
        'offers' => array(
            '@type' => 'Offer',
            'price' => $price ? floatval($price) : '',
            'priceCurrency' => 'USD',
            'availability' => 'https://schema.org/InStock',
            'businessFunction' => $offer_type,
        ),
    );

    // Add property details
    if ($bedrooms || $bathrooms || $sqft) {
        $schema['numberOfRooms'] = intval($bedrooms);
        $schema['numberOfBathroomsTotal'] = floatval($bathrooms);
        $schema['floorSize'] = array(
            '@type' => 'QuantitativeValue',
            'value' => intval($sqft),
            'unitCode' => 'FTK', // Square feet
        );
    }

    // Add address if available
    if ($address || $location) {
        $schema['address'] = array(
            '@type' => 'PostalAddress',
            'addressLocality' => $location,
            'streetAddress' => $address,
        );
    }

    ?>
    <script type="application/ld+json">
    <?php echo wp_json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
    </script>
    <?php
}
add_action('wp_head', 'estate_property_schema');

/**
 * Output Open Graph Meta Tags
 */
function estate_open_graph_tags() {
    if (is_singular()) {
        global $post;
        
        $title = get_the_title();
        $description = has_excerpt() ? get_the_excerpt() : wp_trim_words(get_the_content(), 30);
        $url = get_permalink();
        $image = get_the_post_thumbnail_url($post->ID, 'large');
        $site_name = get_bloginfo('name');
        $type = is_singular('property') ? 'product' : 'article';

        echo "\n<!-- Open Graph Tags -->\n";
        echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
        echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
        echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
        echo '<meta property="og:type" content="' . esc_attr($type) . '">' . "\n";
        
        if ($image) {
            echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";
        }

        // Twitter Card
        echo "\n<!-- Twitter Card Tags -->\n";
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr($description) . '">' . "\n";
        
        if ($image) {
            echo '<meta name="twitter:image" content="' . esc_url($image) . '">' . "\n";
        }

        // Property-specific meta
        if (is_singular('property')) {
            $price = get_post_meta($post->ID, '_property_price', true);
            if ($price) {
                echo '<meta property="product:price:amount" content="' . esc_attr($price) . '">' . "\n";
                echo '<meta property="product:price:currency" content="USD">' . "\n";
            }
        }
    } elseif (is_front_page() || is_home()) {
        $title = get_bloginfo('name');
        $description = get_bloginfo('description');
        $url = home_url('/');
        
        echo "\n<!-- Open Graph Tags -->\n";
        echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr($description) . '">' . "\n";
        echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
        echo '<meta property="og:site_name" content="' . esc_attr($title) . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        
        // Use custom logo as default image
        $custom_logo_id = get_theme_mod('custom_logo');
        if ($custom_logo_id) {
            $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
            if ($logo_url) {
                echo '<meta property="og:image" content="' . esc_url($logo_url) . '">' . "\n";
            }
        }
    }
}
add_action('wp_head', 'estate_open_graph_tags', 5);

/**
 * Add canonical URL
 */
function estate_canonical_url() {
    if (!is_singular()) {
        return;
    }
    
    echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '">' . "\n";
}
add_action('wp_head', 'estate_canonical_url', 1);

/**
 * Custom document title separator
 */
function estate_document_title_separator($sep) {
    return '|';
}
add_filter('document_title_separator', 'estate_document_title_separator');

/**
 * Add meta description for singular posts/properties
 */
function estate_meta_description() {
    if (is_singular()) {
        global $post;
        $description = has_excerpt() ? get_the_excerpt() : wp_trim_words(strip_tags($post->post_content), 30);
        if ($description) {
            echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
        }
    } elseif (is_front_page() || is_home()) {
        $description = get_bloginfo('description');
        if ($description) {
            echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
        }
    } elseif (is_post_type_archive('property')) {
        echo '<meta name="description" content="' . esc_attr__('Browse our collection of premium properties for sale and rent. Find your dream home with us.', 'estate-theme') . '">' . "\n";
    }
}
add_action('wp_head', 'estate_meta_description', 1);

/**
 * Organization Schema for site-wide
 */
function estate_organization_schema() {
    if (!is_front_page()) {
        return;
    }

    $phone = get_theme_mod('estate_phone', '+1 (555) 123-4567');
    $email = get_theme_mod('estate_email', 'info@luxuryestates.com');
    $address = get_theme_mod('estate_address', '123 Luxury Avenue, Beverly Hills, CA 90210');

    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'RealEstateAgent',
        'name' => get_bloginfo('name'),
        'description' => get_bloginfo('description'),
        'url' => home_url('/'),
        'telephone' => $phone,
        'email' => $email,
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => $address,
        ),
    );

    // Add logo if available
    $custom_logo_id = get_theme_mod('custom_logo');
    if ($custom_logo_id) {
        $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
        if ($logo_url) {
            $schema['logo'] = $logo_url;
        }
    }

    // Add social profiles
    $social_profiles = array();
    $facebook = get_theme_mod('estate_facebook', '');
    $twitter = get_theme_mod('estate_twitter', '');
    $instagram = get_theme_mod('estate_instagram', '');
    $linkedin = get_theme_mod('estate_linkedin', '');

    if ($facebook && $facebook !== '#') $social_profiles[] = $facebook;
    if ($twitter && $twitter !== '#') $social_profiles[] = $twitter;
    if ($instagram && $instagram !== '#') $social_profiles[] = $instagram;
    if ($linkedin && $linkedin !== '#') $social_profiles[] = $linkedin;

    if (!empty($social_profiles)) {
        $schema['sameAs'] = $social_profiles;
    }

    ?>
    <script type="application/ld+json">
    <?php echo wp_json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
    </script>
    <?php
}
add_action('wp_head', 'estate_organization_schema');
