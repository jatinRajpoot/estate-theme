<?php
/**
 * Register Property Taxonomies
 *
 * @package Estate_Theme
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Register Property Taxonomies
 */
function estate_register_property_taxonomies() {
    
    // Property Type (House, Apartment, Villa, etc.)
    $type_labels = array(
        'name'              => _x('Property Types', 'taxonomy general name', 'estate-theme'),
        'singular_name'     => _x('Property Type', 'taxonomy singular name', 'estate-theme'),
        'search_items'      => __('Search Property Types', 'estate-theme'),
        'all_items'         => __('All Property Types', 'estate-theme'),
        'parent_item'       => __('Parent Property Type', 'estate-theme'),
        'parent_item_colon' => __('Parent Property Type:', 'estate-theme'),
        'edit_item'         => __('Edit Property Type', 'estate-theme'),
        'update_item'       => __('Update Property Type', 'estate-theme'),
        'add_new_item'      => __('Add New Property Type', 'estate-theme'),
        'new_item_name'     => __('New Property Type Name', 'estate-theme'),
        'menu_name'         => __('Property Types', 'estate-theme'),
    );

    register_taxonomy('property_type', 'property', array(
        'hierarchical'      => true,
        'labels'            => $type_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'property-type'),
        'show_in_rest'      => true,
    ));

    // Property Location (Cities/Areas)
    $location_labels = array(
        'name'              => _x('Locations', 'taxonomy general name', 'estate-theme'),
        'singular_name'     => _x('Location', 'taxonomy singular name', 'estate-theme'),
        'search_items'      => __('Search Locations', 'estate-theme'),
        'all_items'         => __('All Locations', 'estate-theme'),
        'parent_item'       => __('Parent Location', 'estate-theme'),
        'parent_item_colon' => __('Parent Location:', 'estate-theme'),
        'edit_item'         => __('Edit Location', 'estate-theme'),
        'update_item'       => __('Update Location', 'estate-theme'),
        'add_new_item'      => __('Add New Location', 'estate-theme'),
        'new_item_name'     => __('New Location Name', 'estate-theme'),
        'menu_name'         => __('Locations', 'estate-theme'),
    );

    register_taxonomy('property_location', 'property', array(
        'hierarchical'      => true,
        'labels'            => $location_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'location'),
        'show_in_rest'      => true,
    ));

    // Property Status (For Sale, For Rent, Sold)
    $status_labels = array(
        'name'              => _x('Property Status', 'taxonomy general name', 'estate-theme'),
        'singular_name'     => _x('Status', 'taxonomy singular name', 'estate-theme'),
        'search_items'      => __('Search Status', 'estate-theme'),
        'all_items'         => __('All Status', 'estate-theme'),
        'edit_item'         => __('Edit Status', 'estate-theme'),
        'update_item'       => __('Update Status', 'estate-theme'),
        'add_new_item'      => __('Add New Status', 'estate-theme'),
        'new_item_name'     => __('New Status Name', 'estate-theme'),
        'menu_name'         => __('Status', 'estate-theme'),
    );

    register_taxonomy('property_status', 'property', array(
        'hierarchical'      => false,
        'labels'            => $status_labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'status'),
        'show_in_rest'      => true,
    ));

    // Property Amenities
    $amenity_labels = array(
        'name'              => _x('Amenities', 'taxonomy general name', 'estate-theme'),
        'singular_name'     => _x('Amenity', 'taxonomy singular name', 'estate-theme'),
        'search_items'      => __('Search Amenities', 'estate-theme'),
        'all_items'         => __('All Amenities', 'estate-theme'),
        'edit_item'         => __('Edit Amenity', 'estate-theme'),
        'update_item'       => __('Update Amenity', 'estate-theme'),
        'add_new_item'      => __('Add New Amenity', 'estate-theme'),
        'new_item_name'     => __('New Amenity Name', 'estate-theme'),
        'menu_name'         => __('Amenities', 'estate-theme'),
    );

    register_taxonomy('property_amenity', 'property', array(
        'hierarchical'      => false,
        'labels'            => $amenity_labels,
        'show_ui'           => true,
        'show_admin_column' => false,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'amenity'),
        'show_in_rest'      => true,
    ));
}
add_action('init', 'estate_register_property_taxonomies');

/**
 * Add default terms on theme activation
 */
function estate_add_default_terms() {
    // Default Property Types
    $property_types = array('House', 'Apartment', 'Villa', 'Condo', 'Commercial', 'Land', 'Townhouse');
    foreach ($property_types as $type) {
        if (!term_exists($type, 'property_type')) {
            wp_insert_term($type, 'property_type');
        }
    }

    // Default Property Status
    $statuses = array('For Sale', 'For Rent', 'Sold', 'Rented');
    foreach ($statuses as $status) {
        if (!term_exists($status, 'property_status')) {
            wp_insert_term($status, 'property_status');
        }
    }

    // Default Amenities
    $amenities = array(
        'Swimming Pool', 'Gym', 'Parking', 'Garden', 'Security', 
        'Air Conditioning', 'Heating', 'Fireplace', 'Elevator',
        'Smart Home', 'Solar Panels', 'Wine Cellar', 'Home Theater'
    );
    foreach ($amenities as $amenity) {
        if (!term_exists($amenity, 'property_amenity')) {
            wp_insert_term($amenity, 'property_amenity');
        }
    }
}
add_action('after_switch_theme', 'estate_add_default_terms');
