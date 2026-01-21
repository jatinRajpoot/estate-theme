<?php
/**
 * The footer template
 *
 * @package Estate_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

// Get customizer values
$phone = get_theme_mod('estate_phone', '+1 (555) 123-4567');
$email = get_theme_mod('estate_email', 'info@luxuryestates.com');
$address = get_theme_mod('estate_address', '123 Luxury Avenue, Beverly Hills, CA 90210');
$hours = get_theme_mod('estate_hours', 'Mon - Sat: 9:00 AM - 6:00 PM');

// Social links
$facebook = get_theme_mod('estate_facebook', '#');
$twitter = get_theme_mod('estate_twitter', '#');
$instagram = get_theme_mod('estate_instagram', '#');
$linkedin = get_theme_mod('estate_linkedin', '#');
?>

</main><!-- #main -->

<!-- ========== Footer ========== -->
<footer class="footer" id="colophon">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
                    <?php if (has_custom_logo()) : ?>
                        <?php the_custom_logo(); ?>
                    <?php else : ?>
                        <div class="logo-icon">🏠</div>
                        <div class="logo-text">
                            <?php 
                            $site_name = get_bloginfo('name');
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
                <p><?php echo esc_html(get_bloginfo('description')); ?></p>
                
                <div class="footer-social">
                    <?php if ($facebook) : ?>
                        <a href="<?php echo esc_url($facebook); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    <?php endif; ?>
                    <?php if ($twitter) : ?>
                        <a href="<?php echo esc_url($twitter); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    <?php endif; ?>
                    <?php if ($instagram) : ?>
                        <a href="<?php echo esc_url($instagram); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                    <?php endif; ?>
                    <?php if ($linkedin) : ?>
                        <a href="<?php echo esc_url($linkedin); ?>" class="social-link" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div class="footer-links-col">
                <h4 class="footer-title"><?php esc_html_e('Quick Links', 'estate-theme'); ?></h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class'     => 'footer-links',
                    'container'      => false,
                    'depth'          => 1,
                    'fallback_cb'    => 'estate_theme_footer_fallback_menu',
                ));
                ?>
            </div>
            
            <!-- Services -->
            <div class="footer-links-col">
                <h4 class="footer-title"><?php esc_html_e('Services', 'estate-theme'); ?></h4>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>"><?php esc_html_e('Buy Property', 'estate-theme'); ?></a></li>
                    <li><a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>"><?php esc_html_e('Sell Property', 'estate-theme'); ?></a></li>
                    <li><a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>"><?php esc_html_e('Rent Property', 'estate-theme'); ?></a></li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>"><?php esc_html_e('Property Management', 'estate-theme'); ?></a></li>
                    <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>"><?php esc_html_e('Consulting', 'estate-theme'); ?></a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div class="footer-contact-col">
                <h4 class="footer-title"><?php esc_html_e('Contact Us', 'estate-theme'); ?></h4>
                <ul class="footer-contact">
                    <?php if ($address) : ?>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span><?php echo esc_html($address); ?></span>
                        </li>
                    <?php endif; ?>
                    <?php if ($phone) : ?>
                        <li>
                            <i class="fas fa-phone-alt"></i>
                            <span><a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>"><?php echo esc_html($phone); ?></a></span>
                        </li>
                    <?php endif; ?>
                    <?php if ($email) : ?>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></span>
                        </li>
                    <?php endif; ?>
                    <?php if ($hours) : ?>
                        <li>
                            <i class="fas fa-clock"></i>
                            <span><?php echo esc_html($hours); ?></span>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'estate-theme'); ?></p>
            <div class="footer-bottom-links">
                <a href="<?php echo esc_url(get_privacy_policy_url()); ?>"><?php esc_html_e('Privacy Policy', 'estate-theme'); ?></a>
                <a href="<?php echo esc_url(get_permalink(get_page_by_path('terms'))); ?>"><?php esc_html_e('Terms of Service', 'estate-theme'); ?></a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
