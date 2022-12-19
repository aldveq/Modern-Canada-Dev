<?php
/**
 * ACF Option Page Registry
 *
 *
 * @package Omnicomgroup
 */
function register_acf_forms_options() {
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    => 'Forms Options',
            'menu_title'    => 'Forms Options',
            'menu_slug'     => 'forms-options',
            'capability'    => 'edit_posts',
            'icon_url' => 'dashicons-admin-generic',
            'redirect'      => false,
        ));
    }
}
add_action('acf/init', 'register_acf_forms_options');
