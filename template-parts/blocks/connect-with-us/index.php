<?php 
    $connect_with_us_title = get_field('connect_with_us_title');
    $connect_with_us_description = get_field('connect_with_us_description');
?>

<div class="connect-with-us-container" id="connectWithUsContainer">
    <div class="container">
        <div class="row">
            <div class="col-12 text-lg-center">
                <?php if($connect_with_us_title): ?>
                    <h2 class="connect-with-us-container__title mb-md-5 mb-lg-3"><?php echo $connect_with_us_title; ?></h2>
                <?php endif; ?>
                <?php if($connect_with_us_description): ?>
                    <p class="connect-with-us-container__desc"><?php echo $connect_with_us_description; ?></p>
                <?php endif; ?>
            </div>
            <div class="col-12 pt-md-5">
                <form class="needs-validation" method="POST" action="<?php echo get_template_directory_uri(); ?>/inc/forms/connect_with_us_form.php"  id="connect-with-us-form" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="name"><?php echo pll__( 'Name' ); ?></label>
                            <input type="text" class="form-control connect-with-us-container__input" name="connect_with_us_name" id="name" value="" required>
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__( 'Field is required.' ); ?>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="companyName"><?php echo pll__( 'Company Name' ); ?></label>
                            <input type="text" class="form-control connect-with-us-container__input" name="connect_with_us_company_name" id="companyName" value="" required>
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__( 'Field is required.' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="email"><?php echo pll__( 'E-mail' ); ?></label>
                            <input type="email" class="form-control connect-with-us-container__input" name="connect_with_us_email" id="email" required>
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__( 'Field is required.' ); ?>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="buildingAddress"><?php echo pll__( 'Building Address' ); ?></label>
                            <input type="text" class="form-control connect-with-us-container__input" name="connect_with_us_building_address" id="buildingAddress" required>
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__( 'Field is required.' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="phoneNumber"><?php echo pll__('Phone Number'); ?></label>
                            <input type="tel" class="form-control connect-with-us-container__input" name="connect_with_us_phone_number" id="phoneNumber" required>
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__( 'Field is required.' ); ?>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="subject"><?php echo pll__( 'Subject' ); ?></label>
                            <input type="text" class="form-control connect-with-us-container__input" name="connect_with_us_subject" id="subject" required>
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__( 'Field is required.' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 mb-3 connect_with_us_container__input-container">
                            <label class="connect-with-us-container__label" for="message"><?php echo pll__('How can we help you?'); ?></label>
                            <textarea class="form-control connect-with-us-container__textarea" name="connect_with_us_message" id="message" rows="3" required></textarea>
                            <div class="valid-feedback">
                                <?php echo pll__('Looks good!'); ?>
                            </div>
                            <div class="invalid-feedback">
                                <?php echo pll__( 'Field is required.' ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <div class="g-recaptcha" data-sitekey="6LefesAaAAAAAO8f8HO090hui6H-Fm3UNwq0B85r"></div>
                        </div>
                    </div>
                    <button class="btn btn-primary connect-with-us-container__submit" type="submit"><?php echo pll__( 'Submit' ); ?></button>
                </form>
            </div>
        </div>
    </div>
</div>