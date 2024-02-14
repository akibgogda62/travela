<?php
function services_post_type()
{
    $labels = array(
        'name'                => _x('services', 'Post Type General Name', 'acsweb'),
        'singular_name'       => _x('services', 'Post Type Singular Name', 'acsweb'),
        'menu_name'           => __('services', 'acsweb'),
        'parent_item_colon'   => __('Parent services', 'acsweb'),
        'all_items'           => __('All services', 'acsweb'),
        'view_item'           => __('View services', 'acsweb'),
        'add_new_item'        => __('Add New services', 'acsweb'),
        'add_new'             => __('Add New', 'acsweb'),
        'edit_item'           => __('Edit services', 'acsweb'),
        'update_item'         => __('Update services', 'acsweb'),
        'search_items'        => __('Search services', 'acsweb'),
        'not_found'           => __('Not Found', 'acsweb'),
        'not_found_in_trash'  => __('Not found in Trash', 'acsweb'),
    );
    $args = array(
        'label'               => __('services', 'acsweb'),
        'description'         => __('services news and reviews', 'acsweb'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail'),
        //array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ) 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,

        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-forms',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'taxonomies'          => array('category'),
    );
    register_post_type('services', $args);
}
add_action('init', 'services_post_type', 0);


function destination_post_type()
{
    $labels = array(
        'name'                => _x('destination', 'Post Type General Name', 'acsweb'),
        'singular_name'       => _x('destination', 'Post Type Singular Name', 'acsweb'),
        'menu_name'           => __('destination', 'acsweb'),
        'parent_item_colon'   => __('Parent destination', 'acsweb'),
        'all_items'           => __('All destination', 'acsweb'),
        'view_item'           => __('View destination', 'acsweb'),
        'add_new_item'        => __('Add New destination', 'acsweb'),
        'add_new'             => __('Add New', 'acsweb'),
        'edit_item'           => __('Edit destination', 'acsweb'),
        'update_item'         => __('Update destination', 'acsweb'),
        'search_items'        => __('Search destination', 'acsweb'),
        'not_found'           => __('Not Found', 'acsweb'),
        'not_found_in_trash'  => __('Not found in Trash', 'acsweb'),
    );
    $args = array(
        'label'               => __('destination', 'acsweb'),
        'description'         => __('destination news and reviews', 'acsweb'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-site',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'taxonomies'          => array('category'),
    );
    register_post_type('destination', $args);
}
add_action('init', 'destination_post_type', 0);


function explore_post_type()
{
    $labels = array(
        'name'                => _x('explore', 'Post Type General Name', 'acsweb'),
        'singular_name'       => _x('explore', 'Post Type Singular Name', 'acsweb'),
        'menu_name'           => __('explore', 'acsweb'),
        'parent_item_colon'   => __('Parent explore', 'acsweb'),
        'all_items'           => __('All explore', 'acsweb'),
        'view_item'           => __('View explore', 'acsweb'),
        'add_new_item'        => __('Add New explore', 'acsweb'),
        'add_new'             => __('Add New', 'acsweb'),
        'edit_item'           => __('Edit explore', 'acsweb'),
        'update_item'         => __('Update explore', 'acsweb'),
        'search_items'        => __('Search explore', 'acsweb'),
        'not_found'           => __('Not Found', 'acsweb'),
        'not_found_in_trash'  => __('Not found in Trash', 'acsweb'),
    );
    $args = array(
        'label'               => __('explore', 'acsweb'),
        'description'         => __('explore news and reviews', 'acsweb'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-site',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'taxonomies'          => array('category'),
    );
    register_post_type('explore', $args);
}
add_action('init', 'explore_post_type', 0);


function meta_boxes()
{
    add_meta_box(
        'services_icon_metabox',
        'services icon',
        'services_icon_metabox_callback',
        'services',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'meta_boxes');

function services_icon_metabox_callback($post)
{
    $icon = get_post_meta($post->ID, 'services_icon', true);
    echo '<input type="text" id="services_icon" name="services_icon" value=' . $icon . '>';
}

function save_services_icon_meta($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    // Save the meta box value
    if (isset($_POST['services_icon'])) {
        update_post_meta($post_id, 'services_icon', sanitize_text_field($_POST['services_icon']));
    }
}
add_action('save_post', 'save_services_icon_meta');
