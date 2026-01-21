<?php
/**
 * Register Property Custom Post Type
 *
 * @package Estate_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Property Post Type
 */
function estate_register_property_post_type() {
    $labels = array(
        'name'                  => _x('Properties', 'Post type general name', 'estate-theme'),
        'singular_name'         => _x('Property', 'Post type singular name', 'estate-theme'),
        'menu_name'             => _x('Properties', 'Admin Menu text', 'estate-theme'),
        'name_admin_bar'        => _x('Property', 'Add New on Toolbar', 'estate-theme'),
        'add_new'               => __('Add New', 'estate-theme'),
        'add_new_item'          => __('Add New Property', 'estate-theme'),
        'new_item'              => __('New Property', 'estate-theme'),
        'edit_item'             => __('Edit Property', 'estate-theme'),
        'view_item'             => __('View Property', 'estate-theme'),
        'all_items'             => __('All Properties', 'estate-theme'),
        'search_items'          => __('Search Properties', 'estate-theme'),
        'parent_item_colon'     => __('Parent Properties:', 'estate-theme'),
        'not_found'             => __('No properties found.', 'estate-theme'),
        'not_found_in_trash'    => __('No properties found in Trash.', 'estate-theme'),
        'featured_image'        => _x('Property Image', 'Overrides the "Featured Image" phrase', 'estate-theme'),
        'set_featured_image'    => _x('Set property image', 'Overrides the "Set featured image" phrase', 'estate-theme'),
        'remove_featured_image' => _x('Remove property image', 'Overrides the "Remove featured image" phrase', 'estate-theme'),
        'use_featured_image'    => _x('Use as property image', 'Overrides the "Use as featured image" phrase', 'estate-theme'),
        'archives'              => _x('Property archives', 'The post type archive label', 'estate-theme'),
        'insert_into_item'      => _x('Insert into property', 'Overrides the "Insert into post" phrase', 'estate-theme'),
        'uploaded_to_this_item' => _x('Uploaded to this property', 'Overrides the "Uploaded to this post" phrase', 'estate-theme'),
        'filter_items_list'     => _x('Filter properties list', 'Screen reader text', 'estate-theme'),
        'items_list_navigation' => _x('Properties list navigation', 'Screen reader text', 'estate-theme'),
        'items_list'            => _x('Properties list', 'Screen reader text', 'estate-theme'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'properties', 'with_front' => false),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-building',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'show_in_rest'       => true, // Enable Gutenberg editor
    );

    register_post_type('property', $args);
}
add_action('init', 'estate_register_property_post_type');

/**
 * Add custom columns to Property admin list
 */
function estate_property_columns($columns) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['title'] = $columns['title'];
    $new_columns['property_image'] = __('Image', 'estate-theme');
    $new_columns['property_price'] = __('Price', 'estate-theme');
    $new_columns['property_type'] = __('Type', 'estate-theme');
    $new_columns['property_location'] = __('Location', 'estate-theme');
    $new_columns['property_status'] = __('Status', 'estate-theme');
    $new_columns['date'] = $columns['date'];
    
    return $new_columns;
}
add_filter('manage_property_posts_columns', 'estate_property_columns');

/**
 * Display custom column content
 */
function estate_property_column_content($column, $post_id) {
    switch ($column) {
        case 'property_image':
            if (has_post_thumbnail($post_id)) {
                echo get_the_post_thumbnail($post_id, array(50, 50));
            } else {
                echo '<span class="dashicons dashicons-format-image" style="color:#ccc;"></span>';
            }
            break;
            
        case 'property_price':
            $price = get_post_meta($post_id, '_property_price', true);
            if ($price) {
                echo '$' . number_format(floatval($price));
            } else {
                echo '—';
            }
            break;
            
        case 'property_type':
            $terms = get_the_terms($post_id, 'property_type');
            if ($terms && !is_wp_error($terms)) {
                $type_names = wp_list_pluck($terms, 'name');
                echo esc_html(implode(', ', $type_names));
            } else {
                echo '—';
            }
            break;
            
        case 'property_location':
            $terms = get_the_terms($post_id, 'property_location');
            if ($terms && !is_wp_error($terms)) {
                $location_names = wp_list_pluck($terms, 'name');
                echo esc_html(implode(', ', $location_names));
            } else {
                echo '—';
            }
            break;
            
        case 'property_status':
            $terms = get_the_terms($post_id, 'property_status');
            if ($terms && !is_wp_error($terms)) {
                $status_names = wp_list_pluck($terms, 'name');
                echo esc_html(implode(', ', $status_names));
            } else {
                echo '—';
            }
            break;
    }
}
add_action('manage_property_posts_custom_column', 'estate_property_column_content', 10, 2);

/**
 * Make custom columns sortable
 */
function estate_property_sortable_columns($columns) {
    $columns['property_price'] = 'property_price';
    return $columns;
}
add_filter('manage_edit-property_sortable_columns', 'estate_property_sortable_columns');

/**
 * Handle sorting by price
 */
function estate_property_orderby($query) {
    if (!is_admin() || !$query->is_main_query()) {
        return;
    }
    
    if ($query->get('orderby') === 'property_price') {
        $query->set('meta_key', '_property_price');
        $query->set('orderby', 'meta_value_num');
    }
}
add_action('pre_get_posts', 'estate_property_orderby');
