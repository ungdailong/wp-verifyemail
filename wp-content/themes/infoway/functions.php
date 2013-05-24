<?php
include_once get_template_directory() . '/functions/infoway-functions.php';
$functions_path = get_template_directory() . '/functions/';
/* These files build out the options interface.  Likely won't need to edit these. */
require_once ($functions_path . 'admin-functions.php');  // Custom functions and plugins
require_once ($functions_path . 'admin-interface.php');  // Admin Interfaces (options,framework, seo)
/* These files build out the theme specific options and associated functions. */
require_once ($functions_path . 'theme-options.php');   // Options panel settings and custom settings
require_once ($functions_path . 'themes-page.php');
/* ----------------------------------------------------------------------------------- */
/* jQuery Enqueue */
/* ----------------------------------------------------------------------------------- */

function infoway_wp_enqueue_scripts() {
    if (!is_admin()) {

        wp_enqueue_script('jquery');
        wp_enqueue_script('infoway-ddsmoothmenu', get_template_directory_uri() . '/js/ddsmoothmenu.js', array('jquery'));
        wp_enqueue_script('infoway-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'));
    } elseif (is_admin()) {
        
    }
}

add_action('init', 'infoway_wp_enqueue_scripts');
/* ----------------------------------------------------------------------------------- */
/* Custom Jqueries Enqueue */
/* ----------------------------------------------------------------------------------- */

function infoway_custom_jquery() {
    wp_enqueue_script('mobile-menu', get_template_directory_uri() . "/js/mobile-menu.js", array('jquery'));
}

add_action('wp_footer', 'infoway_custom_jquery');

//
function infoway_get_option($name) {
    $options = get_option('infoway_options');
    if (isset($options[$name]))
        return $options[$name];
}

//
function infoway_update_option($name, $value) {
    $options = get_option('infoway_options');
    $options[$name] = $value;
    return update_option('infoway_options', $options);
}

//
function infoway_delete_option($name) {
    $options = get_option('infoway_options');
    unset($options[$name]);
    return update_option('infoway_options', $options);
}

//Enqueue comment thread js
function infoway_enqueue_scripts() {
    if (is_singular() and get_site_option('thread_comments')) {
        wp_print_scripts('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'infoway_enqueue_scripts');
?>
