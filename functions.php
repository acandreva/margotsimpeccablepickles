<?php

/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages', 
        'before_widget' => '<div class="widget-sidebar">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
/*--- Footer Widget One--- */
    register_sidebar( array(
        'name' => ('Footer Widget One'),
        'id' => 'footer-widget-one',
        'description' => 'First widget for our footer', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
/*--- Footer Widget Two--- */
    register_sidebar( array(
        'name' => ('Footer Widget Two'),
        'id' => 'footer-widget-two',
        'description' => 'Second widget for our footer', 
        'before_widget' => '<div class="widget-footer">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
/*--- Footer Widget Three--- */
    register_sidebar( array(
        'name' => ('Footer Widget Three'),
        'id' => 'footer-widget-three',
        'description' => 'Third widget for our footer', 
        'before_widget' => '<div class="widget-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
    }
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu---------------
add_theme_support('menus');*/

function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu1' => __( 'Main Menu Left' ),
      'main-menu2' => __( 'Main Menu Right' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

/*-------------- Enable Post Thumbnails--------------- */
add_theme_support('post-thumbnails');

/*-------------- Custom Post Links--------------- */
function custom_web_resources() {
    $labels = array(
    /*--- Begin Labels Options ---*/
        'name'               => _x( 'Links', 'post type general name' ),
        'singular_name'      => _x( 'Link', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'weblink' ),
        'add_new_item'       => __( 'Add Link' ),
        'edit_item'          => __( 'Edit Links' ),
        'new_item'           => __( 'New Link' ),
        'all_items'          => __( 'All Links' ),
        'view_item'          => __( 'View Links' ),
        'search_items'       => __( 'Search Links' ),
        'not_found'          => __( 'No links found' ),
        'not_found_in_trash' => __( 'No links found in the Trash' ), 
        'parent_item_colon'  => '',
        'menu_name'          => 'Web Links'
    );
    $args = array(
    /*--- Begin Arguments Options ---*/
        'labels' => $labels,
        'description'   => 'Place to put useful links to other web resources',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
        'has_archive'   => true,
    ); 
    register_post_type( 'links', $args ); 
}
add_action('init', 'custom_web_resources');

/*-------------- Custom Taxonomies--------------- */
function custom_taxonomy_wie_init() {
    // create a new taxonomy
    register_taxonomy(
        'webdevelopment',
        'post',
        array(
            'hierarchical' => true,
            'label' => 'Web Development Types',
            'query_var' => true
        )
    );
}
add_action( 'init', 'custom_taxonomy_wie_init' );

?>