<?php

add_theme_support('post-thumbnails');

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

function testimonal_post_type()
{
    $labels = array(
        'name'                => _x('testimonal', 'Post Type General Name', 'acsweb'),
        'singular_name'       => _x('testimonal', 'Post Type Singular Name', 'acsweb'),
        'menu_name'           => __('testimonal', 'acsweb'),
        'parent_item_colon'   => __('Parent testimonal', 'acsweb'),
        'all_items'           => __('All testimonal', 'acsweb'),
        'view_item'           => __('View testimonal', 'acsweb'),
        'add_new_item'        => __('Add New testimonal', 'acsweb'),
        'add_new'             => __('Add New', 'acsweb'),
        'edit_item'           => __('Edit testimonal', 'acsweb'),
        'update_item'         => __('Update testimonal', 'acsweb'),
        'search_items'        => __('Search testimonal', 'acsweb'),
        'not_found'           => __('Not Found', 'acsweb'),
        'not_found_in_trash'  => __('Not found in Trash', 'acsweb'),
    );
    $args = array(
        'label'               => __('testimonal', 'acsweb'),
        'description'         => __('testimonal news and reviews', 'acsweb'),
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
    register_post_type('testimonal', $args);
}
add_action('init', 'testimonal_post_type', 0);

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

function register_destination_taxonomy()
{
    $labels = array(
        'name'              => _x('destination Categories', 'taxonomy general name', 'acsweb'),
        'singular_name'     => _x('destination Category', 'taxonomy singular name', 'acsweb'),
        'search_items'      => __('Search destination Categories', 'acsweb'),
        'all_items'         => __('All destination Categories', 'acsweb'),
        'parent_item'       => __('Parent destination Category', 'acsweb'),
        'parent_item_colon' => __('Parent destination Category:', 'acsweb'),
        'edit_item'         => __('Edit destination Category', 'acsweb'),
        'update_item'       => __('Update destination Category', 'acsweb'),
        'add_new_item'      => __('Add New destination Category', 'acsweb'),
        'new_item_name'     => __('New destination Category Name', 'acsweb'),
        'menu_name'         => __('destination Categories', 'acsweb'),
    );

    $args = array(
        'hierarchical'      => true, // Set to true for categories, false for tags
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'destination-category'), // Customize the slug here
    );

    register_taxonomy('destination_category', array('destination'), $args);
}
add_action('init', 'register_destination_taxonomy');

function gallery_post_type()
{
    $labels = array(
        'name'                => _x('gallery', 'Post Type General Name', 'acsweb'),
        'singular_name'       => _x('gallery', 'Post Type Singular Name', 'acsweb'),
        'menu_name'           => __('gallery', 'acsweb'),
        'parent_item_colon'   => __('Parent gallery', 'acsweb'),
        'all_items'           => __('All gallery', 'acsweb'),
        'view_item'           => __('View gallery', 'acsweb'),
        'add_new_item'        => __('Add New gallery', 'acsweb'),
        'add_new'             => __('Add New', 'acsweb'),
        'edit_item'           => __('Edit gallery', 'acsweb'),
        'update_item'         => __('Update gallery', 'acsweb'),
        'search_items'        => __('Search gallery', 'acsweb'),
        'not_found'           => __('Not Found', 'acsweb'),
        'not_found_in_trash'  => __('Not found in Trash', 'acsweb'),
    );
    $args = array(
        'label'               => __('gallery', 'acsweb'),
        'description'         => __('gallery news and reviews', 'acsweb'),
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
    register_post_type('gallery', $args);
}
add_action('init', 'gallery_post_type', 0);

function register_gallery_taxonomy()
{
    $labels = array(
        'name'              => _x('gallery Categories', 'taxonomy general name', 'acsweb'),
        'singular_name'     => _x('gallery Category', 'taxonomy singular name', 'acsweb'),
        'search_items'      => __('Search gallery Categories', 'acsweb'),
        'all_items'         => __('All gallery Categories', 'acsweb'),
        'parent_item'       => __('Parent gallery Category', 'acsweb'),
        'parent_item_colon' => __('Parent gallery Category:', 'acsweb'),
        'edit_item'         => __('Edit gallery Category', 'acsweb'),
        'update_item'       => __('Update gallery Category', 'acsweb'),
        'add_new_item'      => __('Add New gallery Category', 'acsweb'),
        'new_item_name'     => __('New gallery Category Name', 'acsweb'),
        'menu_name'         => __('gallery Categories', 'acsweb'),
    );

    $args = array(
        'hierarchical'      => true, // Set to true for categories, false for tags
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'gallery-category'), // Customize the slug here
    );

    register_taxonomy('gallery_category', array('gallery'), $args);
}
add_action('init', 'register_gallery_taxonomy');

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

function register_explore_taxonomy()
{
    $labels = array(
        'name'              => _x('Explore Categories', 'taxonomy general name', 'acsweb'),
        'singular_name'     => _x('Explore Category', 'taxonomy singular name', 'acsweb'),
        'search_items'      => __('Search Explore Categories', 'acsweb'),
        'all_items'         => __('All Explore Categories', 'acsweb'),
        'parent_item'       => __('Parent Explore Category', 'acsweb'),
        'parent_item_colon' => __('Parent Explore Category:', 'acsweb'),
        'edit_item'         => __('Edit Explore Category', 'acsweb'),
        'update_item'       => __('Update Explore Category', 'acsweb'),
        'add_new_item'      => __('Add New Explore Category', 'acsweb'),
        'new_item_name'     => __('New Explore Category Name', 'acsweb'),
        'menu_name'         => __('Explore Categories', 'acsweb'),
    );

    $args = array(
        'hierarchical'      => true, // Set to true for categories, false for tags
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'explore-category'), // Customize the slug here
    );

    register_taxonomy('explore_category', array('explore'), $args);
}
add_action('init', 'register_explore_taxonomy');

function guide_post_type()
{
    $labels = array(
        'name'                => _x('guide', 'Post Type General Name', 'acsweb'),
        'singular_name'       => _x('guide', 'Post Type Singular Name', 'acsweb'),
        'menu_name'           => __('guide', 'acsweb'),
        'parent_item_colon'   => __('Parent guide', 'acsweb'),
        'all_items'           => __('All guide', 'acsweb'),
        'view_item'           => __('View guide', 'acsweb'),
        'add_new_item'        => __('Add New guide', 'acsweb'),
        'add_new'             => __('Add New', 'acsweb'),
        'edit_item'           => __('Edit guide', 'acsweb'),
        'update_item'         => __('Update guide', 'acsweb'),
        'search_items'        => __('Search guide', 'acsweb'),
        'not_found'           => __('Not Found', 'acsweb'),
        'not_found_in_trash'  => __('Not found in Trash', 'acsweb'),
    );
    $args = array(
        'label'               => __('guide', 'acsweb'),
        'description'         => __('guide news and reviews', 'acsweb'),
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
    register_post_type('guide', $args);
}
add_action('init', 'guide_post_type', 0);

function packages_post_type()
{
    $labels = array(
        'name'                => _x('packages', 'Post Type General Name', 'acsweb'),
        'singular_name'       => _x('packages', 'Post Type Singular Name', 'acsweb'),
        'menu_name'           => __('packages', 'acsweb'),
        'parent_item_colon'   => __('Parent packages', 'acsweb'),
        'all_items'           => __('All packages', 'acsweb'),
        'view_item'           => __('View packages', 'acsweb'),
        'add_new_item'        => __('Add New packages', 'acsweb'),
        'add_new'             => __('Add New', 'acsweb'),
        'edit_item'           => __('Edit packages', 'acsweb'),
        'update_item'         => __('Update packages', 'acsweb'),
        'search_items'        => __('Search packages', 'acsweb'),
        'not_found'           => __('Not Found', 'acsweb'),
        'not_found_in_trash'  => __('Not found in Trash', 'acsweb'),
    );
    $args = array(
        'label'               => __('packages', 'acsweb'),
        'description'         => __('packages news and reviews', 'acsweb'),
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
    register_post_type('packages', $args);
}
add_action('init', 'packages_post_type', 0);


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

    add_meta_box(
        'post_author_metabox',
        'Author',
        'author_metabox_callback',
        'post',
        'normal',
        'high'
    );

    add_meta_box(
        'testimonal_location_metabox',
        'location',
        'location_metabox_callback',
        'testimonal',
        'normal',
        'high'
    );

    add_meta_box(
        'designation_metabox',
        'designation',
        'designation_metabox_callback',
        'guide',
        'normal',
        'high'
    );

    add_meta_box(
        'location_metabox',
        'location',
        'location1_metabox_callback',
        'packages',
        'normal',
        'high'
    );
    add_meta_box(
        'persons_metabox',
        'person',
        'person_metabox_callback',
        'packages',
        'normal',
        'high'
    );
    add_meta_box(
        'duration_metabox',
        'duration',
        'duration_metabox_callback',
        'packages',
        'normal',
        'high'
    );
    add_meta_box(
        'price_metabox',
        'price',
        'price_metabox_callback',
        'packages',
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

function author_metabox_callback($post)
{
    $author = get_post_meta($post->ID, 'author_name', true);
    echo '<input type="text" id="author_name" name="author_name" value=' . $author . '>';
}

function location_metabox_callback($post)
{
    $location = get_post_meta($post->ID, 'location', true);
    echo '<input type="text" id="location" name="location" value=' . $location . '>';
}

function designation_metabox_callback($post)
{
    $designation = get_post_meta($post->ID, 'designation', true);
    echo '<input type="text" id="designation" name="designation" value=' . $designation . '>';
}

// Location Meta Box
function location1_metabox_callback($post)
{
    $location = get_post_meta($post->ID, '_location', true);
?>
    <label for="location">Location:</label>
    <input type="text" id="location" name="location" value="<?php echo esc_attr($location); ?>" />
<?php
}

// Person Meta Box
function person_metabox_callback($post)
{
    $person = get_post_meta($post->ID, '_person', true);
?>
    <label for="person">Person:</label>
    <input type="text" id="person" name="person" value="<?php echo esc_attr($person); ?>" />
<?php
}

// Duration Meta Box
function duration_metabox_callback($post)
{
    $duration = get_post_meta($post->ID, '_duration', true);
?>
    <label for="duration">Duration:</label>
    <input type="text" id="duration" name="duration" value="<?php echo esc_attr($duration); ?>" />
<?php
}

// Price Meta Box
function price_metabox_callback($post)
{
    $price = get_post_meta($post->ID, '_price', true);
?>
    <label for="price">Price:</label>
    <input type="text" id="price" name="price" value="<?php echo esc_attr($price); ?>" />
<?php
}

// Save Meta Box Data
function save_package_meta($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (isset($_POST['location'])) {
        update_post_meta($post_id, '_location', sanitize_text_field($_POST['location']));
    }

    if (isset($_POST['person'])) {
        update_post_meta($post_id, '_person', sanitize_text_field($_POST['person']));
    }

    if (isset($_POST['duration'])) {
        update_post_meta($post_id, '_duration', sanitize_text_field($_POST['duration']));
    }

    if (isset($_POST['price'])) {
        update_post_meta($post_id, '_price', sanitize_text_field($_POST['price']));
    }
}

// Hook the save function to save_post action
add_action('save_post', 'save_package_meta');


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

function save_designation_meta($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    // Save the meta box value
    if (isset($_POST['designation'])) {
        update_post_meta($post_id, 'designation', sanitize_text_field($_POST['designation']));
    }
}
add_action('save_post', 'save_designation_meta');


function save_location_meta($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    // Save the meta box value
    if (isset($_POST['location'])) {
        update_post_meta($post_id, 'location', sanitize_text_field($_POST['location']));
    }
}
add_action('save_post', 'save_location_meta');


function save_author_name_meta($post_id)
{
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return;

    // Save the meta box value
    if (isset($_POST['author_name'])) {
        update_post_meta($post_id, 'author_name', sanitize_text_field($_POST['author_name']));
    }
}
add_action('save_post', 'save_author_name_meta');
