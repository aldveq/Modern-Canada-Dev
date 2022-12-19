<?php
    $unit_franchise_landing_title = get_field('unit_franchise_landing_title');
    $unit_franchise_landing_image = get_field('unit_franchise_landing_image');
    $unit_franchise_landing_description = get_field('unit_franchise_landing_description');
    $unit_franchise_landing_form_title = get_field('unit_franchise_landing_form_title');
    $unit_franchise_landing_form_desclaimer_text = get_field('unit_franchise_landing_form_desclaimer_text');
    global $post;
    $page_slug = $post->post_name; 
?>

<section class="single-industries-section-container uf-landing-container py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 single-industries-section-container__grid-col">
                <?php 
                    if($unit_franchise_landing_title):
                        ?>
                            <h1 class="single-industries-section-container__title primary-text-color mt-0"><?php echo $unit_franchise_landing_title; ?></h1>
                        <?php
                    endif;
                ?>
                <?php 
                    if($unit_franchise_landing_image):
                        ?>
                            <img src="<?php echo $unit_franchise_landing_image['url']; ?>" alt="<?php echo $unit_franchise_landing_image['alt']; ?>" class="uf-landing-container__img mb-3">
                        <?php
                    endif;
                ?>
                <?php 
                    if($unit_franchise_landing_description):
                        echo $unit_franchise_landing_description;
                    endif;
                ?>
            </div>
            <div class="col-12 col-lg-6 single-industries-section-container__grid-col-two">
                <?php
                    if($unit_franchise_landing_form_title):
                        ?>  
                            <p class="single-industries-section-container__desc text-center mb-0"><?php echo $unit_franchise_landing_form_title; ?></p>
                        <?php
                    endif;
                ?>
                <form class="single-industries-section-container__form p-4 needs-validation" method="POST" action="<?php echo get_template_directory_uri(); ?>/inc/forms/uf-landing.php" id="uf-landing" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="firstName"><?php echo pll__('First Name'); ?></label>
                            <input type="text" class="form-control connect-with-us-container__input" name="firstName" id="firstName" required>
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__('Field is required.'); ?>                            
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="lastName"><?php echo pll__('Last Name'); ?></label>
                            <input type="text" class="form-control connect-with-us-container__input" name="lastName" id="lastName" required>
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
                            <label class="connect-with-us-container__label" for="city"><?php echo pll__('City'); ?></label>
                            <input type="text" class="form-control connect-with-us-container__input" name="city" id="city" required>
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__('Field is required.'); ?>                            
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="province"><?php echo pll__('Province'); ?></label>
                            <select class="form-control connect-with-us-container__input uf-landing-container__select" name="province" id="province" required>
                                <option selected="" disabled="" value=""><?php echo pll__('Use dropdown for all provinces'); ?></option>
                                <option value="Alberta">Alberta</option>
                                <option value="British Columbia">British Columbia</option>
                                <option value="Manitoba">Manitoba</option>
                                <option value="New Brunswick">New Brunswick</option>
                                <option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
                                <option value="Northwest Territories">Northwest Territories</option>
                                <option value="Nova Scotia">Nova Scotia</option>
                                <option value="Nunavut">Nunavut</option>
                                <option value="Ontario">Ontario</option>
                                <option value="Prince Edward Island">Prince Edward Island</option>
                                <option value="Quebec">Quebec</option>
                                <option value="Saskatchewan">Saskatchewan</option>
                                <option value="Yukon">Yukon</option>
                            </select>
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
                            <label class="connect-with-us-container__label" for="phoneNumber"><?php echo pll__('Phone Number'); ?></label>
                            <input type="tel" class="form-control connect-with-us-container__input" name="phoneNumber" id="phoneNumber" required>
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__('Field is required.'); ?>                            
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="email"><?php echo pll__('E-mail Address'); ?></label>
                            <input type="email" class="form-control connect-with-us-container__input" name="email" id="email" required>
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__('Field is required.'); ?>                            
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 d-none">
                            <label class="connect-with-us-container__label" for="page_slug">Page Slug</label>
                            <input type="text" class="form-control connect-with-us-container__input" name="page_slug" value="<?php echo $page_slug; ?>" required>
                        </div>
                    </div>
                    <div class="form-row mb-3">
                        <div class="col-12 d-flex justify-content-end align-items-center">
                            <div class="g-recaptcha" data-sitekey="6LefesAaAAAAAO8f8HO090hui6H-Fm3UNwq0B85r"></div>
                        </div>
                    </div>
                    <button class="btn btn-primary connect-with-us-container__submit mb-3" type="submit"><?php echo pll__('Get started'); ?></button>
                    <?php
                        if($unit_franchise_landing_form_title):
                           echo $unit_franchise_landing_form_desclaimer_text;
                        endif;
                    ?>
                </form>
            </div>
        </div>
    </div>
</section>