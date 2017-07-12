<?php

/**
 * Register a Agencies post type with taxonomies.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_agency_primary_service_taxonomy', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_agency_primary_service_taxonomy() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Primary Services', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Primary Service', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Primary Services', 'textdomain' ),
        'all_items'         => __( 'All Primary Services', 'textdomain' ),
        'parent_item'       => __( 'Parent Primary Service', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Primary Service:', 'textdomain' ),
        'edit_item'         => __( 'Edit Primary Service', 'textdomain' ),
        'update_item'       => __( 'Update Primary Service', 'textdomain' ),
        'add_new_item'      => __( 'Add New Primary Service', 'textdomain' ),
        'new_item_name'     => __( 'New Primary Service Name', 'textdomain' ),
        'menu_name'         => __( 'Primary Services', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'primary-service' ),
    );

    register_taxonomy( 'primary-service', array( 'agencies' ), $args );

}

/**
 * Register a Agencies post type with taxonomies.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_agency_core_service_taxonomy', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_agency_core_service_taxonomy() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Core Services', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Core Service', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Core Services', 'textdomain' ),
        'all_items'         => __( 'All Core Services', 'textdomain' ),
        'parent_item'       => __( 'Parent Core Service', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Core Service:', 'textdomain' ),
        'edit_item'         => __( 'Edit Core Service', 'textdomain' ),
        'update_item'       => __( 'Update Core Service', 'textdomain' ),
        'add_new_item'      => __( 'Add New Core Service', 'textdomain' ),
        'new_item_name'     => __( 'New Core Service Name', 'textdomain' ),
        'menu_name'         => __( 'Core Services', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'core-service' ),
    );

    register_taxonomy( 'core-service', array( 'agencies' ), $args );

}

/**
 * Register a Agencies post type with taxonomies.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_agency_aspirational_service_taxonomy', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_agency_aspirational_service_taxonomy() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Aspirational Services', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Aspirational Service', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Aspirational Services', 'textdomain' ),
        'all_items'         => __( 'All Aspirational Services', 'textdomain' ),
        'parent_item'       => __( 'Parent Aspirational Service', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Aspirational Service:', 'textdomain' ),
        'edit_item'         => __( 'Edit Aspirational Service', 'textdomain' ),
        'update_item'       => __( 'Update Aspirational Service', 'textdomain' ),
        'add_new_item'      => __( 'Add New Aspirational Service', 'textdomain' ),
        'new_item_name'     => __( 'New Aspirational Service Name', 'textdomain' ),
        'menu_name'         => __( 'Aspirational Services', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'aspirational-service' ),
    );

    register_taxonomy( 'aspirational-service', array( 'agencies' ), $args );

}

/**
 * Register a Agencies post type with taxonomies.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_agency_language_taxonomy', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_agency_language_taxonomy() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Languages', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Language', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Services', 'textdomain' ),
        'all_items'         => __( 'All Services', 'textdomain' ),
        'parent_item'       => __( 'Parent Language', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Language:', 'textdomain' ),
        'edit_item'         => __( 'Edit Language', 'textdomain' ),
        'update_item'       => __( 'Update Language', 'textdomain' ),
        'add_new_item'      => __( 'Add New Language', 'textdomain' ),
        'new_item_name'     => __( 'New Language Name', 'textdomain' ),
        'menu_name'         => __( 'Languages', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'language' ),
    );

    register_taxonomy( 'language', array( 'agencies' ), $args );

}

/**
 * Register a Agencies post type with taxonomies.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_agency_location_taxonomy', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_agency_location_taxonomy() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Locations', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Location', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Locations', 'textdomain' ),
        'all_items'         => __( 'All Locations', 'textdomain' ),
        'parent_item'       => __( 'Parent Location', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Location:', 'textdomain' ),
        'edit_item'         => __( 'Edit Location', 'textdomain' ),
        'update_item'       => __( 'Update Location', 'textdomain' ),
        'add_new_item'      => __( 'Add New Location', 'textdomain' ),
        'new_item_name'     => __( 'New Location Name', 'textdomain' ),
        'menu_name'         => __( 'Locations', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'location' ),
    );

    register_taxonomy( 'locations', array( 'agencies' ), $args );

}

/**
 * Register a Agencies post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
add_action( 'init', 'tmg_agencies_init' );
/**
 *
 */
function tmg_agencies_init() {
    $labels = array(
        'name'               => _x( 'Agencies', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Agency', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Agencies', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Agency', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'agency', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Agency', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Agency', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Agency', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Agency', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Agencies', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Agencies', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Agencies:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No Agencies found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No Agencies found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        //'rewrite'            => array( 'slug' => 'agency' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'agencies', $args );
}

/**
 * Register a News post type with taxonomy.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_news_taxonomies', 0 );

// create two taxonomies, genres and writers for the post type "book"
function create_news_taxonomies() {
    // Add new taxonomy, make it hierarchical (like categories)
    $labels = array(
        'name'              => _x( 'Locations', 'taxonomy general name', 'textdomain' ),
        'singular_name'     => _x( 'Location', 'taxonomy singular name', 'textdomain' ),
        'search_items'      => __( 'Search Locations', 'textdomain' ),
        'all_items'         => __( 'All Locations', 'textdomain' ),
        'parent_item'       => __( 'Parent Location', 'textdomain' ),
        'parent_item_colon' => __( 'Parent Location:', 'textdomain' ),
        'edit_item'         => __( 'Edit Location', 'textdomain' ),
        'update_item'       => __( 'Update Location', 'textdomain' ),
        'add_new_item'      => __( 'Add New Location', 'textdomain' ),
        'new_item_name'     => __( 'New Location Name', 'textdomain' ),
        'menu_name'         => __( 'Location', 'textdomain' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'location' ),
    );

    register_taxonomy( 'location', array( 'news' ), $args );

}

//Registering Custom Post Type News
add_action( 'init', 'register_newspost', 20 );
function register_newspost() {
    $labels = array(
        'name' => _x( 'News', 'my_custom_post','custom' ),
        'singular_name' => _x( 'News', 'my_custom_post', 'custom' ),
        'add_new' => _x( 'Add New', 'my_custom_post', 'custom' ),
        'add_new_item' => _x( 'Add New News', 'my_custom_post', 'custom' ),
        'edit_item' => _x( 'Edit News', 'my_custom_post', 'custom' ),
        'new_item' => _x( 'New News', 'my_custom_post', 'custom' ),
        'view_item' => _x( 'View News', 'my_custom_post', 'custom' ),
        'search_items' => _x( 'Search News', 'my_custom_post', 'custom' ),
        'not_found' => _x( 'No News found', 'my_custom_post', 'custom' ),
        'not_found_in_trash' => _x( 'No News found in Trash', 'my_custom_post', 'custom' ),
        'parent_item_colon' => _x( 'Parent News:', 'my_custom_post', 'custom' ),
        'menu_name' => _x( 'News', 'my_custom_post', 'custom' ),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'News Posts',
        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
        'taxonomies' => array('news_taxonomy'),
        'show_ui' => true,
        'show_in_menu' => true,
        //'menu_position' => 5,
        //'menu_icon' => get_stylesheet_directory_uri() . '/functions/panel/images/catchinternet-small.png',
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'can_export' => true,
        //'rewrite' => array('slug' => 'themes/%themes_categories%','with_front' => FALSE),
        'public' => true,
        'has_archive' => 'news',
        'capability_type' => 'post'
    );
    register_post_type( 'news', $args );//max 20 charachter cannot contain capital letters and spaces
}


add_action( 'init', 'tmg_advisory_board_init' );
/**
 * Register a Advisory Board post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function tmg_advisory_board_init() {
    $labels = array(
        'name'               => _x( 'Advisory Board', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Member', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Advisory Board', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Advisory Board', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'member', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Member', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Member', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Member', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Member', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Members', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Members', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Member:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No Members found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No Members found in Trash.', 'your-plugin-textdomain' )
    );

    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        //'rewrite'            => array( 'slug' => 'advisory-board' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
    );

    register_post_type( 'advisory_board', $args );
}

