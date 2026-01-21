<?php
/**
 * Property Card Template Part
 *
 * @package Estate_Theme
 */

$badge = estate_get_property_badge();
$location = estate_get_property_location();
?>

<div class="property-card">
    <div class="property-image">
        <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('property-thumbnail', array('alt' => get_the_title())); ?>
            </a>
        <?php else : ?>
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo esc_url(ESTATE_THEME_URI . '/assets/images/property-placeholder.jpg'); ?>" alt="<?php the_title_attribute(); ?>">
            </a>
        <?php endif; ?>
        
        <?php if ($badge) : ?>
            <span class="property-badge"><?php echo esc_html($badge); ?></span>
        <?php endif; ?>
        
        <button class="property-favorite" aria-label="<?php esc_attr_e('Add to favorites', 'estate-theme'); ?>">
            <i class="far fa-heart"></i>
        </button>
    </div>
    
    <div class="property-content">
        <div class="property-price"><?php echo wp_kses_post(estate_get_property_price()); ?></div>
        
        <h3 class="property-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        
        <?php if ($location) : ?>
        <p class="property-location">
            <i class="fas fa-map-marker-alt"></i>
            <?php echo esc_html($location); ?>
        </p>
        <?php endif; ?>
        
        <?php estate_display_property_features(); ?>
    </div>
</div>
