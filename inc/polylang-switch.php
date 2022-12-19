<?php 

function custom_polylang_langswitcher() {
    $output = '';
    if ( function_exists( 'pll_the_languages' ) ) {
        $args   = [
            'show_flags' => 0,
            'show_names' => 1,
            'display_names_as' => 'slug',
            'echo'       => 0,
		];
		$lang = pll_the_languages( $args ); 

		$output = "
			<div class='custom-switch-languages'>
				$lang
			</div>";
	}
    return $output;
}
add_shortcode( 'polylang_langswitcher', 'custom_polylang_langswitcher' );