<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package modern
 */

$callusText = get_field('text_call_us', pll_current_language('slug'));
$phoneNumber = get_field('phone_number', pll_current_language('slug'));
$email_us_at_text = get_field('footer_text_email_us_at', pll_current_language('slug'));
$footer_email = get_field('footer_email', pll_current_language('slug'));
$copyText = get_field('main_text_copy_right', pll_current_language('slug'));
$addressText = get_field('address_text', pll_current_language('slug'));
?>

	<footer id="footerSite" class="footer-site">
		<div class="container py-4">
			<div class="row py-3 py-lg-4">
				<div class="col-12 col-sm-8 col-lg-9 py-3 py-sm-0 order-1 order-sm-0 order-md-0">
					<?php 
						$footerLogo = get_field('footer_brand',pll_current_language('slug'));
						if( !empty( $footerLogo ) ): ?>
						<img class="footer-logo my-2" src="<?php echo esc_url($footerLogo['url']); ?>" alt="<?php echo esc_attr($fotterLogo['alt']); ?>" />
					<?php endif; ?>
				</div>

				<?php
					if(is_page('unit-franchise') || is_page('unit-franchise-fr') || is_page('submit-an-application') || is_page('unit-franchise-application-fr')):
						?>
							<div class="col-12 col-sm-4 col-lg-3 phone-col order-0 order-sm-1 order-md-1 text-sm-right">
								<?php if(!empty($email_us_at_text)){ ?>
									<h5 class="call-us text-light-grey"><?php echo __($email_us_at_text, 'modern'); ?></h5> 
								<?php } ?>	
									
								<?php if(!empty($footer_email)){ ?>
									<a class="phone-number text-light-grey email-us-at" href="mailto:<?php echo $footer_email; ?>"><?php echo $footer_email; ?></a>
								<?php } ?>	
								<hr class="line">
							</div>
						<?php
					else:
						?>
							<div class="col-12 col-sm-4 col-lg-3 phone-col order-0 order-sm-1 order-md-1 text-sm-right">
								<?php if(!empty($callusText)){ ?>
									<h5 class="call-us text-light-grey"><?php echo __($callusText, 'modern'); ?></h5> 
								<?php } ?>	

								<?php if(!empty($phoneNumber)){ ?>
									<a class="phone-number text-light-grey" href="tel:<?php echo $phoneNumber; ?>">
										<?php echo $phoneNumber; ?>
									</a>
								<?php } ?>	
								<hr class="line">
							</div>
						<?php
					endif;
				?>

				<div class="col-12 order-2 ">
					<?php if(!empty($copyText)){ ?>
						<h4 class="copyText text-light-grey"><?php echo __($copyText, 'modern'); ?></h4>
					<?php } ?>
					<?php if(!empty($addressText)){ ?>
						<p class="addressText text-light-grey"><?php echo __($addressText, 'modern');?></p>
					<?php } ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

	<div class="loader-container" id="loader">
		<div class="lds-dual-ring"></div>
		<p>Loading...</p>
	</div>
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>
