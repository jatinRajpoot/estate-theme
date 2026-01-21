<?php
/**
 * Theme Customizer
 *
 * @package Estate_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add Customizer Settings
 */
function estate_customize_register($wp_customize) {

    /*
     * Hero Section
     */
    $wp_customize->add_section('estate_hero_section', array(
        'title'    => __('Hero Section', 'estate-theme'),
        'priority' => 30,
    ));

    // Hero Title
    $wp_customize->add_setting('estate_hero_title', array(
        'default'           => __('Find Your Dream Home With Us', 'estate-theme'),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control('estate_hero_title', array(
        'label'   => __('Hero Title', 'estate-theme'),
        'section' => 'estate_hero_section',
        'type'    => 'text',
    ));

    // Hero Highlight Word
    $wp_customize->add_setting('estate_hero_highlight', array(
        'default'           => __('Dream Home', 'estate-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('estate_hero_highlight', array(
        'label'       => __('Highlighted Text (appears gold)', 'estate-theme'),
        'section'     => 'estate_hero_section',
        'type'        => 'text',
        'description' => __('This text will be highlighted in gold color.', 'estate-theme'),
    ));

    // Hero Description
    $wp_customize->add_setting('estate_hero_desc', array(
        'default'           => __('Discover the perfect property that matches your lifestyle. From luxury penthouses to cozy family homes, we help you find your ideal living space.', 'estate-theme'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('estate_hero_desc', array(
        'label'   => __('Hero Description', 'estate-theme'),
        'section' => 'estate_hero_section',
        'type'    => 'textarea',
    ));

    // Hero Badge Text
    $wp_customize->add_setting('estate_hero_badge', array(
        'default'           => __('#1 Trusted Real Estate Agency', 'estate-theme'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('estate_hero_badge', array(
        'label'   => __('Hero Badge Text', 'estate-theme'),
        'section' => 'estate_hero_section',
        'type'    => 'text',
    ));

    /*
     * Contact Information
     */
    $wp_customize->add_section('estate_contact_section', array(
        'title'    => __('Contact Information', 'estate-theme'),
        'priority' => 35,
    ));

    // Phone
    $wp_customize->add_setting('estate_phone', array(
        'default'           => '+1 (555) 123-4567',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('estate_phone', array(
        'label'   => __('Phone Number', 'estate-theme'),
        'section' => 'estate_contact_section',
        'type'    => 'text',
    ));

    // Email
    $wp_customize->add_setting('estate_email', array(
        'default'           => 'info@luxuryestates.com',
        'sanitize_callback' => 'sanitize_email',
    ));

    $wp_customize->add_control('estate_email', array(
        'label'   => __('Email Address', 'estate-theme'),
        'section' => 'estate_contact_section',
        'type'    => 'email',
    ));

    // Address
    $wp_customize->add_setting('estate_address', array(
        'default'           => '123 Luxury Avenue, Beverly Hills, CA 90210',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('estate_address', array(
        'label'   => __('Address', 'estate-theme'),
        'section' => 'estate_contact_section',
        'type'    => 'text',
    ));

    // Business Hours
    $wp_customize->add_setting('estate_hours', array(
        'default'           => 'Mon - Sat: 9:00 AM - 6:00 PM',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('estate_hours', array(
        'label'   => __('Business Hours', 'estate-theme'),
        'section' => 'estate_contact_section',
        'type'    => 'text',
    ));

    /*
     * Social Media Links
     */
    $wp_customize->add_section('estate_social_section', array(
        'title'    => __('Social Media Links', 'estate-theme'),
        'priority' => 40,
    ));

    // Facebook
    $wp_customize->add_setting('estate_facebook', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('estate_facebook', array(
        'label'   => __('Facebook URL', 'estate-theme'),
        'section' => 'estate_social_section',
        'type'    => 'url',
    ));

    // Twitter
    $wp_customize->add_setting('estate_twitter', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('estate_twitter', array(
        'label'   => __('Twitter URL', 'estate-theme'),
        'section' => 'estate_social_section',
        'type'    => 'url',
    ));

    // Instagram
    $wp_customize->add_setting('estate_instagram', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('estate_instagram', array(
        'label'   => __('Instagram URL', 'estate-theme'),
        'section' => 'estate_social_section',
        'type'    => 'url',
    ));

    // LinkedIn
    $wp_customize->add_setting('estate_linkedin', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('estate_linkedin', array(
        'label'   => __('LinkedIn URL', 'estate-theme'),
        'section' => 'estate_social_section',
        'type'    => 'url',
    ));

    /*
     * Statistics Section
     */
    $wp_customize->add_section('estate_stats_section', array(
        'title'    => __('Statistics Section', 'estate-theme'),
        'priority' => 45,
    ));

    // Stat 1
    $wp_customize->add_setting('estate_stat1_number', array(
        'default'           => '15000',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('estate_stat1_number', array(
        'label'   => __('Stat 1 - Number', 'estate-theme'),
        'section' => 'estate_stats_section',
        'type'    => 'number',
    ));

    $wp_customize->add_setting('estate_stat1_label', array(
        'default'           => 'Properties Sold',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('estate_stat1_label', array(
        'label'   => __('Stat 1 - Label', 'estate-theme'),
        'section' => 'estate_stats_section',
        'type'    => 'text',
    ));

    // Stat 2
    $wp_customize->add_setting('estate_stat2_number', array(
        'default'           => '8500',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('estate_stat2_number', array(
        'label'   => __('Stat 2 - Number', 'estate-theme'),
        'section' => 'estate_stats_section',
        'type'    => 'number',
    ));

    $wp_customize->add_setting('estate_stat2_label', array(
        'default'           => 'Happy Clients',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('estate_stat2_label', array(
        'label'   => __('Stat 2 - Label', 'estate-theme'),
        'section' => 'estate_stats_section',
        'type'    => 'text',
    ));

    // Stat 3
    $wp_customize->add_setting('estate_stat3_number', array(
        'default'           => '200',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('estate_stat3_number', array(
        'label'   => __('Stat 3 - Number', 'estate-theme'),
        'section' => 'estate_stats_section',
        'type'    => 'number',
    ));

    $wp_customize->add_setting('estate_stat3_label', array(
        'default'           => 'Expert Agents',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('estate_stat3_label', array(
        'label'   => __('Stat 3 - Label', 'estate-theme'),
        'section' => 'estate_stats_section',
        'type'    => 'text',
    ));

    // Stat 4
    $wp_customize->add_setting('estate_stat4_number', array(
        'default'           => '50',
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('estate_stat4_number', array(
        'label'   => __('Stat 4 - Number', 'estate-theme'),
        'section' => 'estate_stats_section',
        'type'    => 'number',
    ));

    $wp_customize->add_setting('estate_stat4_label', array(
        'default'           => 'Cities Covered',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('estate_stat4_label', array(
        'label'   => __('Stat 4 - Label', 'estate-theme'),
        'section' => 'estate_stats_section',
        'type'    => 'text',
    ));

    /*
     * Colors
     */
    $wp_customize->add_setting('estate_primary_color', array(
        'default'           => '#0a1628',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'estate_primary_color', array(
        'label'   => __('Primary Color', 'estate-theme'),
        'section' => 'colors',
    )));

    $wp_customize->add_setting('estate_accent_color', array(
        'default'           => '#d4a853',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'estate_accent_color', array(
        'label'   => __('Accent Color (Gold)', 'estate-theme'),
        'section' => 'colors',
    )));

    /*
     * Footer Settings
     */
    $wp_customize->add_section('estate_footer_section', array(
        'title'    => __('Footer Settings', 'estate-theme'),
        'priority' => 50,
    ));

    $wp_customize->add_setting('estate_copyright_text', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('estate_copyright_text', array(
        'label'       => __('Custom Copyright Text', 'estate-theme'),
        'section'     => 'estate_footer_section',
        'type'        => 'text',
        'description' => __('Leave empty to use default: © [Year] [Site Name]. All rights reserved.', 'estate-theme'),
    ));
}
add_action('customize_register', 'estate_customize_register');

/**
 * Output custom CSS from Customizer
 */
function estate_customizer_css() {
    $primary_color = get_theme_mod('estate_primary_color', '#0a1628');
    $accent_color = get_theme_mod('estate_accent_color', '#d4a853');
    
    // Only output if colors differ from defaults
    if ($primary_color !== '#0a1628' || $accent_color !== '#d4a853') : 
    ?>
    <style type="text/css">
        :root {
            <?php if ($primary_color !== '#0a1628') : ?>
            --primary-dark: <?php echo esc_attr($primary_color); ?>;
            --primary-darker: <?php echo esc_attr(estate_adjust_brightness($primary_color, -20)); ?>;
            <?php endif; ?>
            <?php if ($accent_color !== '#d4a853') : ?>
            --accent-gold: <?php echo esc_attr($accent_color); ?>;
            --accent-gold-light: <?php echo esc_attr(estate_adjust_brightness($accent_color, 20)); ?>;
            --accent-gold-dark: <?php echo esc_attr(estate_adjust_brightness($accent_color, -20)); ?>;
            <?php endif; ?>
        }
    </style>
    <?php
    endif;
}
add_action('wp_head', 'estate_customizer_css');

/**
 * Helper function to adjust color brightness
 */
function estate_adjust_brightness($hex, $steps) {
    $hex = ltrim($hex, '#');
    
    $r = hexdec(substr($hex, 0, 2));
    $g = hexdec(substr($hex, 2, 2));
    $b = hexdec(substr($hex, 4, 2));
    
    $r = max(0, min(255, $r + $steps));
    $g = max(0, min(255, $g + $steps));
    $b = max(0, min(255, $b + $steps));
    
    return sprintf('#%02x%02x%02x', $r, $g, $b);
}
