<?php
/**
 * Property Custom Meta Boxes
 *
 * @package Estate_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add Property Meta Box
 */
function estate_add_property_meta_boxes() {
    add_meta_box(
        'property_details',
        __('Property Details', 'estate-theme'),
        'estate_property_details_callback',
        'property',
        'normal',
        'high'
    );

    add_meta_box(
        'property_gallery',
        __('Property Gallery', 'estate-theme'),
        'estate_property_gallery_callback',
        'property',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'estate_add_property_meta_boxes');

/**
 * Property Details Meta Box Callback
 */
function estate_property_details_callback($post) {
    wp_nonce_field('estate_property_details', 'estate_property_nonce');

    // Get saved values
    $price = get_post_meta($post->ID, '_property_price', true);
    $price_suffix = get_post_meta($post->ID, '_property_price_suffix', true);
    $bedrooms = get_post_meta($post->ID, '_property_bedrooms', true);
    $bathrooms = get_post_meta($post->ID, '_property_bathrooms', true);
    $sqft = get_post_meta($post->ID, '_property_sqft', true);
    $garage = get_post_meta($post->ID, '_property_garage', true);
    $year_built = get_post_meta($post->ID, '_property_year_built', true);
    $address = get_post_meta($post->ID, '_property_address', true);
    $is_featured = get_post_meta($post->ID, '_property_featured', true);
    ?>
    <style>
        .estate-meta-row { display: flex; flex-wrap: wrap; gap: 20px; margin-bottom: 20px; }
        .estate-meta-field { flex: 1; min-width: 200px; }
        .estate-meta-field label { display: block; font-weight: 600; margin-bottom: 5px; }
        .estate-meta-field input[type="text"],
        .estate-meta-field input[type="number"],
        .estate-meta-field select,
        .estate-meta-field textarea { width: 100%; padding: 8px; }
        .estate-meta-field.full-width { flex: 100%; }
        .estate-checkbox { display: flex; align-items: center; gap: 10px; }
        .estate-checkbox input { width: auto; }
    </style>

    <div class="estate-meta-row">
        <div class="estate-meta-field">
            <label for="property_price"><?php esc_html_e('Price ($)', 'estate-theme'); ?></label>
            <input type="number" id="property_price" name="property_price" value="<?php echo esc_attr($price); ?>" step="1000" min="0">
        </div>
        <div class="estate-meta-field">
            <label for="property_price_suffix"><?php esc_html_e('Price Suffix', 'estate-theme'); ?></label>
            <select id="property_price_suffix" name="property_price_suffix">
                <option value="" <?php selected($price_suffix, ''); ?>><?php esc_html_e('None', 'estate-theme'); ?></option>
                <option value="/month" <?php selected($price_suffix, '/month'); ?>><?php esc_html_e('/month', 'estate-theme'); ?></option>
                <option value="/year" <?php selected($price_suffix, '/year'); ?>><?php esc_html_e('/year', 'estate-theme'); ?></option>
                <option value="/week" <?php selected($price_suffix, '/week'); ?>><?php esc_html_e('/week', 'estate-theme'); ?></option>
            </select>
        </div>
    </div>

    <div class="estate-meta-row">
        <div class="estate-meta-field">
            <label for="property_bedrooms"><?php esc_html_e('Bedrooms', 'estate-theme'); ?></label>
            <input type="number" id="property_bedrooms" name="property_bedrooms" value="<?php echo esc_attr($bedrooms); ?>" min="0" max="50">
        </div>
        <div class="estate-meta-field">
            <label for="property_bathrooms"><?php esc_html_e('Bathrooms', 'estate-theme'); ?></label>
            <input type="number" id="property_bathrooms" name="property_bathrooms" value="<?php echo esc_attr($bathrooms); ?>" min="0" max="50" step="0.5">
        </div>
        <div class="estate-meta-field">
            <label for="property_sqft"><?php esc_html_e('Square Feet', 'estate-theme'); ?></label>
            <input type="number" id="property_sqft" name="property_sqft" value="<?php echo esc_attr($sqft); ?>" min="0">
        </div>
    </div>

    <div class="estate-meta-row">
        <div class="estate-meta-field">
            <label for="property_garage"><?php esc_html_e('Garage Spaces', 'estate-theme'); ?></label>
            <input type="number" id="property_garage" name="property_garage" value="<?php echo esc_attr($garage); ?>" min="0" max="20">
        </div>
        <div class="estate-meta-field">
            <label for="property_year_built"><?php esc_html_e('Year Built', 'estate-theme'); ?></label>
            <input type="number" id="property_year_built" name="property_year_built" value="<?php echo esc_attr($year_built); ?>" min="1800" max="<?php echo esc_attr(date('Y')); ?>">
        </div>
    </div>

    <div class="estate-meta-row">
        <div class="estate-meta-field full-width">
            <label for="property_address"><?php esc_html_e('Full Address', 'estate-theme'); ?></label>
            <textarea id="property_address" name="property_address" rows="2"><?php echo esc_textarea($address); ?></textarea>
        </div>
    </div>

    <div class="estate-meta-row">
        <div class="estate-meta-field estate-checkbox">
            <input type="checkbox" id="property_featured" name="property_featured" value="1" <?php checked($is_featured, '1'); ?>>
            <label for="property_featured"><?php esc_html_e('Featured Property (show on homepage)', 'estate-theme'); ?></label>
        </div>
    </div>
    <?php
}

/**
 * Property Gallery Meta Box Callback
 */
function estate_property_gallery_callback($post) {
    $gallery = get_post_meta($post->ID, '_property_gallery', true);
    $gallery_ids = $gallery ? explode(',', $gallery) : array();
    ?>
    <div id="property-gallery-container">
        <div id="property-gallery-images" style="display: flex; flex-wrap: wrap; gap: 10px; margin-bottom: 15px;">
            <?php foreach ($gallery_ids as $image_id) : 
                $image_id = intval($image_id);
                if ($image_id) :
                    $image_url = wp_get_attachment_image_url($image_id, 'thumbnail');
                    if ($image_url) :
            ?>
                <div class="gallery-image" data-id="<?php echo esc_attr($image_id); ?>" style="position: relative; width: 100px; height: 100px;">
                    <img src="<?php echo esc_url($image_url); ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 4px;">
                    <button type="button" class="remove-gallery-image" style="position: absolute; top: -5px; right: -5px; background: #dc3232; color: white; border: none; border-radius: 50%; width: 20px; height: 20px; cursor: pointer;">&times;</button>
                </div>
            <?php 
                    endif;
                endif;
            endforeach; ?>
        </div>
        <input type="hidden" id="property_gallery" name="property_gallery" value="<?php echo esc_attr($gallery); ?>">
        <button type="button" id="add-gallery-images" class="button"><?php esc_html_e('Add Gallery Images', 'estate-theme'); ?></button>
    </div>

    <script>
    jQuery(document).ready(function($) {
        var frame;
        
        $('#add-gallery-images').on('click', function(e) {
            e.preventDefault();
            
            if (frame) {
                frame.open();
                return;
            }
            
            frame = wp.media({
                title: '<?php esc_html_e('Select Gallery Images', 'estate-theme'); ?>',
                button: { text: '<?php esc_html_e('Add to Gallery', 'estate-theme'); ?>' },
                multiple: true
            });
            
            frame.on('select', function() {
                var attachments = frame.state().get('selection').map(function(attachment) {
                    attachment = attachment.toJSON();
                    return attachment;
                });
                
                attachments.forEach(function(attachment) {
                    var currentIds = $('#property_gallery').val();
                    var ids = currentIds ? currentIds.split(',') : [];
                    
                    if (ids.indexOf(attachment.id.toString()) === -1) {
                        ids.push(attachment.id);
                        $('#property_gallery').val(ids.join(','));
                        
                        var html = '<div class="gallery-image" data-id="' + attachment.id + '" style="position: relative; width: 100px; height: 100px;">' +
                            '<img src="' + (attachment.sizes.thumbnail ? attachment.sizes.thumbnail.url : attachment.url) + '" style="width: 100%; height: 100%; object-fit: cover; border-radius: 4px;">' +
                            '<button type="button" class="remove-gallery-image" style="position: absolute; top: -5px; right: -5px; background: #dc3232; color: white; border: none; border-radius: 50%; width: 20px; height: 20px; cursor: pointer;">&times;</button>' +
                            '</div>';
                        $('#property-gallery-images').append(html);
                    }
                });
            });
            
            frame.open();
        });
        
        $(document).on('click', '.remove-gallery-image', function() {
            var $parent = $(this).parent();
            var id = $parent.data('id');
            var ids = $('#property_gallery').val().split(',').filter(function(i) { return i != id; });
            $('#property_gallery').val(ids.join(','));
            $parent.remove();
        });
    });
    </script>
    <?php
}

/**
 * Save Property Meta Data
 */
function estate_save_property_meta($post_id) {
    // Check nonce
    if (!isset($_POST['estate_property_nonce']) || !wp_verify_nonce($_POST['estate_property_nonce'], 'estate_property_details')) {
        return;
    }

    // Check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Check permissions
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save fields
    $fields = array(
        'property_price'        => '_property_price',
        'property_price_suffix' => '_property_price_suffix',
        'property_bedrooms'     => '_property_bedrooms',
        'property_bathrooms'    => '_property_bathrooms',
        'property_sqft'         => '_property_sqft',
        'property_garage'       => '_property_garage',
        'property_year_built'   => '_property_year_built',
        'property_address'      => '_property_address',
        'property_gallery'      => '_property_gallery',
    );

    foreach ($fields as $post_key => $meta_key) {
        if (isset($_POST[$post_key])) {
            update_post_meta($post_id, $meta_key, sanitize_text_field($_POST[$post_key]));
        }
    }

    // Save featured checkbox
    $featured = isset($_POST['property_featured']) ? '1' : '0';
    update_post_meta($post_id, '_property_featured', $featured);
}
add_action('save_post_property', 'estate_save_property_meta');
