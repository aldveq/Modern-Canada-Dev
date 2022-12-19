<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package modern
 */

get_header();
$the_title_post = get_the_title();
$left_side_content = get_field('left_side_content', get_the_ID());
$form_instruction = pll__('Please submit the information below and a member from our team will be in touch to schedule your free cleaning trial.');
?>

<section class="single-industries-section-container py-4">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 single-industries-section-container__grid-col">
                <h1 class="single-industries-section-container__title"><?php echo the_title(); ?></h1>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ; ?>" class="mb-4">
                <p><?php echo $left_side_content; ?></p>
            </div>
            <div class="col-12 col-lg-6 single-industries-section-container__grid-col-two">
                <p class="single-industries-section-container__desc text-center mb-0"><?php echo pll__('Please submit the information below and a member from our team will be in touch to schedule your free cleaning trial.'); ?></p>
                <form class="single-industries-section-container__form p-4 needs-validation" method="POST" action="<?php echo get_template_directory_uri(); ?>/inc/forms/single-industry-form.php" id="single-industry-form" novalidate="">
                    <div class="form-row">
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="firstName"><?php echo pll__('First Name'); ?></label>
                            <input type="text" class="form-control connect-with-us-container__input" name="firstName" id="firstName" value="" required="">
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__('Field is required.'); ?>                            
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="lastName"><?php echo pll__('Last Name'); ?></label>
                            <input type="text" class="form-control connect-with-us-container__input" name="lastName" id="lastName" value="" required="">
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__('Field is required.'); ?>                            
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="email"><?php echo pll__('E-mail'); ?></label>
                            <input type="email" class="form-control connect-with-us-container__input" name="email" id="email" required="">
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__('Field is required.'); ?>                            
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="companyName"><?php echo pll__('Company Name'); ?></label>
                            <input type="text" class="form-control connect-with-us-container__input" name="companyName" id="companyName" required="">
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__('Field is required.'); ?>                            
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 d-flex justify-content-end align-items-center mb-3">
                            <div class="g-recaptcha" data-sitekey="6LefesAaAAAAAO8f8HO090hui6H-Fm3UNwq0B85r"></div>
                        </div>
                    </div>
                    <button class="btn btn-primary connect-with-us-container__submit mb-3" type="submit"><?php echo pll__('Get started'); ?></button>
                    <p class="font-italic"><?php echo pll__('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'); ?></p>
                </form>
            </div>
            <div class="col-12 mt-5">
                <?php echo the_content(); ?>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
