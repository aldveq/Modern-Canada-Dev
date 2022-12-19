<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package modern
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- <meta charset="<?php bloginfo( 'charset' ); ?>"> -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text d-none" href="#primary"><?php esc_html_e( 'Skip to content', 'modern' ); ?></a>
	<header id="masthead" class="site-header fixed-top white-color-bg">
		<div class="pre-header w-100 px-md-4">
			<?php
				echo do_shortcode('[polylang_langswitcher]');
			?>

			<?php
				wp_nav_menu(array(
					'menu' => '',
					'container' => 'ul',
					'theme_location' => 'second-menu',
					'depth'	=> 1,
					'menu_class' => 'second-menu navbar-nav ml-0 d-none d-lg-flex',
					'walker' => new WP_Bootstrap_Navwalker(),
					'add_li_class'  => 'nav-item-secondary'
				));
			?>
			
		</div>

		<nav class="navbar navbar-expand-lg navbar-light py-md-4">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" id="navbarBrand">
				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );					
				?>
					<img src="<?php echo esc_url( $custom_logo_url )?>" alt="Modern" loading="lazy">
				</a>

				<button class="navbar-toggler navbar-toggler-button hamburger hamburger--elastic " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" id="navbarTogglerButton">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>

				<div class="collapse navbar-collapse justify-content-start justify-content-md-end navbar-collapse-container" id="navbarSupportedContent">
					<?php
						wp_nav_menu(array(
							'menu' => '',
							'container' => false,
							'container_class' => '',
							'fallback_cb' => false,
							'theme_location' => 'main-menu',
							'depth'	=> 4,
							'menu_class' => 'navbar-nav ml-0',
							'walker' => new WP_Bootstrap_Navwalker(),
							'add_li_class'  => 'nav-item'
						));
					?>
				</div>
			</div>
		</nav>
		
	</header><!-- #masthead -->
