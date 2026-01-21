<?php
/**
 * Single Property Template
 *
 * @package Estate_Theme
 */

get_header();

while (have_posts()) : the_post();
    
    $price = estate_get_property_price();
    $location = estate_get_property_location();
    $features = estate_get_property_features();
    $gallery = get_post_meta(get_the_ID(), '_property_gallery', true);
    $gallery_ids = $gallery ? explode(',', $gallery) : array();
    $year_built = get_post_meta(get_the_ID(), '_property_year_built', true);
    $amenities = get_the_terms(get_the_ID(), 'property_amenity');
?>

<!-- ========== Page Hero ========== -->
<section class="page-hero" style="padding-bottom: 60px;">
    <div class="container">
        <div class="page-hero-content">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <div class="breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>"><?php esc_html_e('Home', 'estate-theme'); ?></a>
                <span>/</span>
                <a href="<?php echo esc_url(get_post_type_archive_link('property')); ?>"><?php esc_html_e('Properties', 'estate-theme'); ?></a>
                <span>/</span>
                <span><?php the_title(); ?></span>
            </div>
        </div>
    </div>
</section>

<!-- ========== Property Details ========== -->
<section class="section" style="padding-top: 0;">
    <div class="container">
        <!-- Property Gallery -->
        <div class="property-gallery">
            <div class="gallery-main">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('property-large', array('id' => 'main-gallery-image')); ?>
                <?php endif; ?>
            </div>
            
            <?php if (!empty($gallery_ids)) : ?>
            <div class="gallery-thumbs">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="gallery-thumb active" data-image="<?php echo esc_url(get_the_post_thumbnail_url(null, 'property-large')); ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                <?php endif; ?>
                
                <?php foreach ($gallery_ids as $image_id) : 
                    $image_id = intval($image_id);
                    if ($image_id) :
                        $thumb_url = wp_get_attachment_image_url($image_id, 'thumbnail');
                        $large_url = wp_get_attachment_image_url($image_id, 'property-large');
                        if ($thumb_url && $large_url) :
                ?>
                    <div class="gallery-thumb" data-image="<?php echo esc_url($large_url); ?>">
                        <img src="<?php echo esc_url($thumb_url); ?>" alt="">
                    </div>
                <?php 
                        endif;
                    endif;
                endforeach; ?>
            </div>
            <?php endif; ?>
        </div>

        <!-- Property Info -->
        <div class="property-info">
            <div class="property-main">
                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px; flex-wrap: wrap; gap: 20px;">
                    <div>
                        <h2 style="font-size: 28px; margin-bottom: 10px;"><?php the_title(); ?></h2>
                        <?php if ($location) : ?>
                        <p class="property-location" style="margin-bottom: 0;">
                            <i class="fas fa-map-marker-alt"></i> <?php echo esc_html($location); ?>
                        </p>
                        <?php endif; ?>
                    </div>
                    <div style="text-align: right;">
                        <p style="font-family: var(--font-heading); font-size: 32px; font-weight: 700; color: var(--accent-gold); margin-bottom: 5px;">
                            <?php echo wp_kses_post($price); ?>
                        </p>
                    </div>
                </div>

                <!-- Property Meta -->
                <div class="property-meta">
                    <?php foreach ($features as $key => $feature) : ?>
                    <div class="meta-item">
                        <i class="fas <?php echo esc_attr($feature['icon']); ?>"></i>
                        <span><?php echo esc_html($feature['value'] . ' ' . $feature['label']); ?></span>
                    </div>
                    <?php endforeach; ?>
                    
                    <?php if ($year_built) : ?>
                    <div class="meta-item">
                        <i class="fas fa-calendar"></i>
                        <span><?php printf(esc_html__('Built %s', 'estate-theme'), esc_html($year_built)); ?></span>
                    </div>
                    <?php endif; ?>
                </div>

                <!-- Description -->
                <div class="property-description">
                    <h3><?php esc_html_e('Description', 'estate-theme'); ?></h3>
                    <?php the_content(); ?>
                </div>

                <!-- Amenities -->
                <?php if ($amenities && !is_wp_error($amenities)) : ?>
                <div style="margin-bottom: 40px;">
                    <h3 style="font-size: 22px; margin-bottom: 25px;"><?php esc_html_e('Amenities & Features', 'estate-theme'); ?></h3>
                    <div class="amenities-grid">
                        <?php foreach ($amenities as $amenity) : ?>
                        <div class="amenity-item">
                            <i class="fas fa-check"></i>
                            <span><?php echo esc_html($amenity->name); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endif; ?>

                <!-- Property Details Table -->
                <div style="margin-bottom: 40px;">
                    <h3 style="font-size: 22px; margin-bottom: 25px;"><?php esc_html_e('Property Details', 'estate-theme'); ?></h3>
                    <div class="details-table">
                        <?php
                        $type_terms = get_the_terms(get_the_ID(), 'property_type');
                        $status_terms = get_the_terms(get_the_ID(), 'property_status');
                        ?>
                        <div class="detail-row">
                            <span class="detail-label"><?php esc_html_e('Property Type', 'estate-theme'); ?></span>
                            <span class="detail-value">
                                <?php echo $type_terms && !is_wp_error($type_terms) ? esc_html($type_terms[0]->name) : '—'; ?>
                            </span>
                        </div>
                        <div class="detail-row">
                            <span class="detail-label"><?php esc_html_e('Status', 'estate-theme'); ?></span>
                            <span class="detail-value">
                                <?php echo $status_terms && !is_wp_error($status_terms) ? esc_html($status_terms[0]->name) : '—'; ?>
                            </span>
                        </div>
                        <?php if (!empty($features['beds'])) : ?>
                        <div class="detail-row">
                            <span class="detail-label"><?php esc_html_e('Bedrooms', 'estate-theme'); ?></span>
                            <span class="detail-value"><?php echo esc_html($features['beds']['value']); ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($features['baths'])) : ?>
                        <div class="detail-row">
                            <span class="detail-label"><?php esc_html_e('Bathrooms', 'estate-theme'); ?></span>
                            <span class="detail-value"><?php echo esc_html($features['baths']['value']); ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if (!empty($features['sqft'])) : ?>
                        <div class="detail-row">
                            <span class="detail-label"><?php esc_html_e('Square Feet', 'estate-theme'); ?></span>
                            <span class="detail-value"><?php echo esc_html($features['sqft']['value']); ?></span>
                        </div>
                        <?php endif; ?>
                        <?php if ($year_built) : ?>
                        <div class="detail-row">
                            <span class="detail-label"><?php esc_html_e('Year Built', 'estate-theme'); ?></span>
                            <span class="detail-value"><?php echo esc_html($year_built); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="property-sidebar">
                <!-- Contact Agent Card -->
                <div class="agent-card">
                    <h3><?php esc_html_e('Interested in this property?', 'estate-theme'); ?></h3>
                    <p style="color: var(--text-light); margin-bottom: 20px;">
                        <?php esc_html_e('Contact us for more information or to schedule a viewing.', 'estate-theme'); ?>
                    </p>
                    
                    <form class="contact-form property-inquiry-form">
                        <input type="hidden" name="property_id" value="<?php echo esc_attr(get_the_ID()); ?>">
                        <input type="hidden" name="property_title" value="<?php echo esc_attr(get_the_title()); ?>">
                        
                        <div class="form-group">
                            <input type="text" name="name" placeholder="<?php esc_attr_e('Your Name', 'estate-theme'); ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="<?php esc_attr_e('Your Email', 'estate-theme'); ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="<?php esc_attr_e('Your Phone', 'estate-theme'); ?>">
                        </div>
                        <div class="form-group">
                            <textarea name="message" rows="4" placeholder="<?php esc_attr_e('Your Message', 'estate-theme'); ?>"><?php printf(esc_textarea__('I am interested in %s', 'estate-theme'), get_the_title()); ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">
                            <?php esc_html_e('Send Inquiry', 'estate-theme'); ?>
                        </button>
                    </form>
                    
                    <div style="text-align: center; margin-top: 20px;">
                        <p style="color: var(--text-muted); margin-bottom: 10px;"><?php esc_html_e('Or call us directly', 'estate-theme'); ?></p>
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', get_theme_mod('estate_phone', '+1 (555) 123-4567'))); ?>" class="btn btn-outline" style="width: 100%;">
                            <i class="fas fa-phone"></i>
                            <?php echo esc_html(get_theme_mod('estate_phone', '+1 (555) 123-4567')); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Properties -->
        <?php
        $related = estate_get_related_properties(get_the_ID(), 3);
        if ($related->have_posts()) :
        ?>
        <div class="related-properties" style="margin-top: 60px;">
            <h3 style="font-size: 28px; margin-bottom: 30px;"><?php esc_html_e('Similar Properties', 'estate-theme'); ?></h3>
            <div class="properties-grid" style="grid-template-columns: repeat(3, 1fr);">
                <?php while ($related->have_posts()) : $related->the_post(); ?>
                    <?php get_template_part('template-parts/property', 'card'); ?>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>
