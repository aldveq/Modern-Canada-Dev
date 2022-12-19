<?php 
/**
* ACF Custom Block Registry
*
*
* @package Modern Site
*/


function wpdc_add_custom_gutenberg_color_palette() {
	add_theme_support(
		'editor-color-palette',
		[
			[
				'name'  => esc_html__( 'Blue', 'wpdc' ),
				'slug'  => 'blue',
				'color' => '#2F318D',
			],
			[
				'name'  => esc_html__( 'Green', 'wpdc' ),
				'slug'  => 'green',
				'color' => '#9FC754',
			],
			[
				'name'  => esc_html__( 'Grey', 'wpdc' ),
				'slug'  => 'grey',
				'color' => '#f4f4fa',
            ],
            [
				'name'  => esc_html__( 'White', 'wpdc' ),
				'slug'  => 'white',
				'color' => '#ffffff',
            ],
		]
	);
}
add_action( 'after_setup_theme', 'wpdc_add_custom_gutenberg_color_palette' );