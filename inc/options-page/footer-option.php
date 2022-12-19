<?php
/**
 * ACF Option Page Registry
 *
 *
 * @package Modern
 */

function register_acf_options_pages() {

	$parentFranchise = acf_add_options_page(array(
		'page_title' 	=> 'Franchise Opportunities',
		'menu_title'	=> 'Franchise Opportunities',
		'menu_slug' 	=> 'franchise-settings',
		'capability'	=> 'edit_posts',
		'icon_url'      => 'dashicons-list-view'
	));

	foreach (['en','fr'] as $lang) {
		acf_add_options_sub_page(array(
			'page_title' 	=> "Franchise Opportunities-${lang}",
			'menu_title'	=> "Franchise Opportunities-${lang}",
			'menu_slug' => "franchise_opportunities-${lang}",
			'parent_slug'	=> 'franchise-settings',
			'post_id' => $lang,
			'parent' => $parentFranchise['menu_slug'],
		));
	}
	
	if( function_exists('acf_add_options_page') ) {
		$parent = acf_add_options_page(array(
			'page_title' 	=> 'Footer',
			'menu_title'	=> 'Footer',
			'menu_slug' 	=> 'footer-settings',
			'capability'	=> 'edit_posts',
			'icon_url' => 'dashicons-list-view'
		));
	}
	foreach (['en','fr'] as $lang) {
		acf_add_options_sub_page(array(
			'page_title' 	=> "Footer-${lang}",
			'menu_title'	=> "Footer-${lang}",
			'menu_slug' => "footer-settings-${lang}",
			'parent_slug'	=> 'footer-settings',
			'post_id' => $lang,
			'parent' => $parent['menu_slug'],
		));
	}
}
add_action('acf/init', 'register_acf_options_pages');
