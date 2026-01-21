<?php
/**
 * The header template
 *
 * @package Estate_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ========== Header ========== -->
<header class="header" id="masthead">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo" rel="home">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <div class="logo-icon">🏠</div>
                <div class="logo-text">
                    <?php 
                    $site_name = get_bloginfo('name');
                    // Split site name for styling (first word normal, rest gold)
                    $words = explode(' ', $site_name);
                    if (count($words) > 1) {
                        echo esc_html($words[0]) . '<span>' . esc_html(implode(' ', array_slice($words, 1))) . '</span>';
                    } else {
                        echo esc_html($site_name);
                    }
                    ?>
                </div>
            <?php endif; ?>
        </a>
        
        <nav class="nav-menu" id="site-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'estate-theme'); ?>">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => 'nav-menu-list',
                'container'      => false,
                'fallback_cb'    => 'estate_theme_fallback_menu',
                'link_before'    => '',
                'link_after'     => '',
                'depth'          => 2,
            ));
            ?>
        </nav>
        
        <div class="nav-actions">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="btn btn-primary">
                <?php esc_html_e('Get Started', 'estate-theme'); ?>
            </a>
            <button class="mobile-toggle" aria-label="<?php esc_attr_e('Toggle Menu', 'estate-theme'); ?>" aria-expanded="false" aria-controls="site-navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<main id="main" class="site-main">
