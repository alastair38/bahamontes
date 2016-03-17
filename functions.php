<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// Customizer options
require_once(get_template_directory().'/assets/functions/customizer.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');
require_once(get_template_directory().'/assets/functions/menu-walkers.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Setup initial pages and assign to main menu
require_once(get_template_directory().'/assets/functions/setup-pages.php');


// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
require_once(get_template_directory().'/assets/functions/admin.php');

function my_pre_save_post( $post_id ) {
    // check if this is to be a new post
    if( $post_id != 'new_post' )
    {
        return $post_id;
    }
    $titleArray = $_POST['fields']['field_56e0946c2be5d'];
    $title = $titleArray['address'];
    // Create a new post
    $post = array(
        'post_status'  => 'draft',
        'post_title'  => $title,
        'post_type'  => 'locations',
    );
    // insert the post
    $post_id = wp_insert_post( $post );
    // update $_POST['return']
    $_POST['return'] = add_query_arg( array('post_id' => $post_id), $_POST['return'] );
    // return the new ID
    return $post_id;
}
add_filter('acf/pre_save_post' , 'my_pre_save_post' );
