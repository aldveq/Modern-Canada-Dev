<?php
    $unit_franchise_landing_long_form_title = get_field('unit_franchise_landing_long_form_title');
    $unit_franchise_landing_long_form_description = get_field('unit_franchise_landing_long_form_description');
    $unit_franchise_landing_long_form_image = get_field('unit_franchise_landing_long_form_image');
    global $post;
    $page_slug = $post->post_name; 

    // Personal Information Group
        $unit_franchise_landing_long_form_personal_information_group = get_field('unit_franchise_landing_long_form_personal_information_group');
        if(!empty($unit_franchise_landing_long_form_personal_information_group)):
            $first = $unit_franchise_landing_long_form_personal_information_group['unit_franchise_landing_long_form_personal_information_group_first'];
            $last = $unit_franchise_landing_long_form_personal_information_group['unit_franchise_landing_long_form_personal_information_group_last'];
            $email_address = $unit_franchise_landing_long_form_personal_information_group['unit_franchise_landing_long_form_personal_information_group_e_mail_address'];
            $address = $unit_franchise_landing_long_form_personal_information_group['unit_franchise_landing_long_form_personal_information_group_address'];
            $city = $unit_franchise_landing_long_form_personal_information_group['unit_franchise_landing_long_form_personal_information_group_city'];
            $province = $unit_franchise_landing_long_form_personal_information_group['unit_franchise_landing_long_form_personal_information_group_province'];
            $postal_code = $unit_franchise_landing_long_form_personal_information_group['unit_franchise_landing_long_form_personal_information_group_postal_code'];
            $primary_phone = $unit_franchise_landing_long_form_personal_information_group['unit_franchise_landing_long_form_personal_information_group_primary_phone'];
            $secondary_phone = $unit_franchise_landing_long_form_personal_information_group['unit_franchise_landing_long_form_personal_information_group_secondary_phone'];
            $how_did_you_hear_about_us = $unit_franchise_landing_long_form_personal_information_group['unit_franchise_landing_long_form_personal_information_group_how_did_you_hear_about_us'];
        endif;
    // Personal Information Group

    // Languages Group
        $unit_franchise_landing_long_form_languages_group = get_field('unit_franchise_landing_long_form_languages_group');
        if(!empty($unit_franchise_landing_long_form_languages_group)):
            $spoken = $unit_franchise_landing_long_form_languages_group['unit_franchise_landing_long_form_languages_group_spoken'];
            $written = $unit_franchise_landing_long_form_languages_group['unit_franchise_landing_long_form_languages_group_written'];
            $english_proficiency = $unit_franchise_landing_long_form_languages_group['unit_franchise_landing_long_form_languages_group_english_proficiency'];
        endif;
    // Languages Group

    // Geographical Search Group
        $unit_franchise_landing_long_form_geographical_search_group = get_field('unit_franchise_landing_long_form_geographical_search_group');
        if(!empty($unit_franchise_landing_long_form_geographical_search_group)):
            $market_city_one = $unit_franchise_landing_long_form_geographical_search_group['unit_franchise_landing_long_form_geographical_search_group_market_city_one'];
            $market_city_two = $unit_franchise_landing_long_form_geographical_search_group['unit_franchise_landing_long_form_geographical_search_group_market_city_two'];
            $market_city_three = $unit_franchise_landing_long_form_geographical_search_group['unit_franchise_landing_long_form_geographical_search_group_market_city_three'];
            $relocate_in_canada = $unit_franchise_landing_long_form_geographical_search_group['unit_franchise_landing_long_form_geographical_search_group_relocate_in_canada'];
        endif;
    // Geographical Search Group

    // Business Matters / Eligibility Group
        $unit_franchise_landing_long_form_business_matters_eligibility_group = get_field('unit_franchise_landing_long_form_business_matters_eligibility_group');
        if(!empty($unit_franchise_landing_long_form_business_matters_eligibility_group)):
            $eligible_to_work_in_canada = $unit_franchise_landing_long_form_business_matters_eligibility_group['unit_franchise_landing_long_form_business_matters_eligibility_group_eligible_to_work_in_canada'];
            $own_business_or_franchise = $unit_franchise_landing_long_form_business_matters_eligibility_group['unit_franchise_landing_long_form_business_matters_eligibility_group_own_business_or_franchise'];
            $current_business_or_franchise = $unit_franchise_landing_long_form_business_matters_eligibility_group['unit_franchise_landing_long_form_business_matters_eligibility_group_current_business_or_franchise'];
            $working_for_a_cleaning_company = $unit_franchise_landing_long_form_business_matters_eligibility_group['unit_franchise_landing_long_form_business_matters_eligibility_group_working_for_a_cleaning_company'];
            $interested_in_acquiring_a_modern_franchise = $unit_franchise_landing_long_form_business_matters_eligibility_group['unit_franchise_landing_long_form_business_matters_eligibility_group_interested_in_acquiring_a_modern_franchise'];
            $believe_you_would_make_an_excellent_franchisee = $unit_franchise_landing_long_form_business_matters_eligibility_group['unit_franchise_landing_long_form_business_matters_eligibility_group_believe_you_would_make_an_excellent_franchisee'];
        endif;
    // Business Matters / Eligibility Group

    // Resume Group
        $unit_franchise_landing_long_form_resume_group = get_field('unit_franchise_landing_long_form_resume_group');
        if(!empty($unit_franchise_landing_long_form_resume_group)):
            $file = $unit_franchise_landing_long_form_resume_group['unit_franchise_landing_long_form_resume_group_file'];
            $terms_and_conditions = $unit_franchise_landing_long_form_resume_group['unit_franchise_landing_long_form_resume_group_terms_and_conditions'];
        endif;
    // Resume Group
?>

<section class="single-industries-section-container uf-landing-container py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 single-industries-section-container__grid-col">
                <?php 
                    if($unit_franchise_landing_long_form_title):
                        ?>
                            <h1 class="single-industries-section-container__title primary-text-color mt-0"><?php echo $unit_franchise_landing_long_form_title; ?></h1>
                        <?php
                    endif;
                ?>
                <?php 
                    if($unit_franchise_landing_long_form_description):
                        echo $unit_franchise_landing_long_form_description;
                    endif;
                ?>
            </div>
            <div class="col-12 col-lg-6 single-industries-section-container__grid-col-two">
                <?php 
                    if($unit_franchise_landing_long_form_image):
                        ?>
                            <img src="<?php echo $unit_franchise_landing_long_form_image['url']; ?>" alt="<?php echo $unit_franchise_landing_long_form_image['alt']; ?>" class="uf-landing-container__img mb-3">
                        <?php
                    endif;
                ?>
            </div>
            <div class="col-12">
                <form id="unit-form-aplication" class="needs-validation" method="POST" enctype="multipart/form-data" action="<?php echo get_template_directory_uri(); ?>/inc/forms/unit-franchise-application.php" novalidate>
                    <!-- Start accordion form sections  -->
                    <div class="accordion" id="accordionDataAplication">
                        <!-- Personal Information -->
                        <div class="card card-accordion-aplication">
                            <div id="collapsePersonalInfo" class="collapse show">
                                <div class="card-header" id="headingLanguages">
                                    <a class="btn btn-link btn-block text-left">
                                        <h3><?php echo pll__('Personal Information'); ?></h3>
                                        <p class="mb-0"><?php echo pll__('Required fields'); ?> <span class="required-label">*</span></p>
                                    </a>
                                </div>

                                <div class="card-body">
                                    
                                    <div class="form-row d-none">
                                        <div class="col-md-6 mb-3">
                                            <label class="custom-label" for="singleOpportunityIDField">Single Opportunity #ID <span class="required-label">*</span></label>
                                            <input type="text" class="form-control" name="singleOpportunityIDField" id="singleOpportunityIDField" minlength="3"  maxlength="50">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label class="custom-label" for="singleOpportunityLocationField">Single Opportunity Location<span class="required-label">*</span></label>
                                            <input type="text" class="form-control" name="singleOpportunityLocationField" id="singleOpportunityLocationField" minlength="3"  maxlength="50">
                                        </div>
                                    </div>

                                    <div class="form-row d-none">
                                        <div class="col-md-6 mb-3">
                                            <label class="custom-label" for="groupOpportunitiesField">Group Opportunities <span class="required-label">*</span></label>
                                            <textarea class="form-control" name="groupOpportunitiesField" id="groupOpportunitiesField"></textarea>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <?php
                                                if($first == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="nameInput"><?php echo pll__('First', 'modern-theme'); ?> <span class="required-label">*</span></label>
                                                        <input type="text" class="form-control" name="name_input" id="nameInput" minlength="3"  maxlength="50" placeholder="<?php echo pll__('First Placeholder'); ?>" required>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <label class="custom-label" for="nameInput"><?php echo pll__('First', 'modern-theme'); ?> <span class="required-label"></span></label>
                                                        <input type="text" class="form-control" name="name_input" id="nameInput" minlength="3"  maxlength="50" placeholder="<?php echo pll__('First Placeholder'); ?>">
                                                    <?php
                                                endif;
                                            ?>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <?php
                                                if($last == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="nameInput_last"><?php echo pll__('Last', 'modern-theme'); ?> <span class="required-label">*</span></label>
                                                        <input type="text" class="form-control" name="name_last_input" id="nameInput_last" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Last Placeholder'); ?>" required>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <label class="custom-label" for="nameInput_last"><?php echo pll__('Last', 'modern-theme'); ?> <span class="required-label"></span></label>
                                                        <input type="text" class="form-control" name="name_last_input" id="nameInput_last" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Last Placeholder'); ?>">
                                                    <?php
                                                endif;
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <?php
                                                if($email_address == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="emailAddress"><?php echo pll__( 'E-mail Address' ); ?> <span class="required-label">*</span></label>
                                                        <input type="email" class="form-control" name="email_address" id="emailAddress" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" placeholder="<?php echo pll__( 'Preferred email to contact you' ); ?>" required>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <label class="custom-label" for="emailAddress"><?php echo pll__( 'E-mail Address' ); ?> <span class="required-label"></span></label>
                                                        <input type="email" class="form-control" name="email_address" id="emailAddress" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" placeholder="<?php echo pll__( 'Preferred email to contact you' ); ?>">
                                                    <?php
                                                endif;
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <?php
                                                if($address == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="address_user_Input"><?php echo pll__('Address'); ?> <span class="required-label">*</span></label>
                                                        <input type="text" class="form-control" name="address_user"  id="address_user_Input" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Number of street and street name here'); ?>" required>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>      
                                                    <?php
                                                else:
                                                    ?>
                                                        <label class="custom-label" for="address_user_Input"><?php echo pll__('Address'); ?> <span class="required-label"></span></label>
                                                        <input type="text" class="form-control" name="address_user"  id="address_user_Input" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Number of street and street name here'); ?>">            
                                                    <?php
                                                endif;
                                            ?>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <?php
                                                if($city == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="cityInput"><?php echo pll__('City'); ?> <span class="required-label">*</span></label>
                                                        <input type="text" class="form-control" name="city_input" id="cityInput" minlength="3"  maxlength="50" placeholder="<?php echo pll__('City Placeholder'); ?>" required>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <label class="custom-label" for="cityInput"><?php echo pll__('City'); ?> <span class="required-label"></span></label>
                                                        <input type="text" class="form-control" name="city_input" id="cityInput" minlength="3"  maxlength="50" placeholder="<?php echo pll__('City Placeholder'); ?>">
                                                    <?php
                                                endif;
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <?php
                                                if($province == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="provinceInput"><?php echo pll__('Province'); ?> <span class="required-label">*</span></label>
                                                        <select class="custom-select" name="province_list" id="provinceInput" required>
                                                            <option selected disabled value=""><?php echo pll__('Use Dropdown for all provinces in  Canada'); ?></option>
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
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <label class="custom-label" for="provinceInput"><?php echo pll__('Province'); ?> <span class="required-label"></span></label>
                                                        <select class="custom-select" name="province_list" id="provinceInput">
                                                            <option selected disabled value=""><?php echo pll__('Use Dropdown for all provinces in  Canada'); ?></option>
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
                                                    <?php
                                                endif;
                                            ?>
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <?php
                                                if($postal_code == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="postalCodeInput"><?php echo pll__('Postal Code'); ?> <span class="required-label">*</span></label>
                                                        <input type="text" class="form-control" name="postal_code" id="postalCodeInput" minlength="3"  maxlength="20" placeholder="<?php echo pll__('e.g l4ylE4'); ?>" required>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else: 
                                                    ?>
                                                        <label class="custom-label" for="postalCodeInput"><?php echo pll__('Postal Code'); ?> <span class="required-label"></span></label>
                                                        <input type="text" class="form-control" name="postal_code" id="postalCodeInput" minlength="3"  maxlength="20" placeholder="<?php echo pll__('e.g l4ylE4'); ?>">
                                                    <?php
                                                endif;
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <?php
                                                if($primary_phone == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="phoneHomeInput"><?php echo pll__('Home Phone'); ?> <span class="required-label">*</span></label>
                                                        <input type="tel" class="form-control" name="home_phone" id="phoneHomeInput" minlength="8" maxlength="20" placeholder="<?php echo pll__('XXX-XXXX-XXXX'); ?>" required>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <label class="custom-label" for="phoneHomeInput"><?php echo pll__('Home Phone'); ?> <span class="required-label"></span></label>
                                                        <input type="tel" class="form-control" name="home_phone" id="phoneHomeInput" minlength="8" maxlength="20" placeholder="<?php echo pll__('XXX-XXXX-XXXX'); ?>">
                                                    <?php
                                                endif;
                                            ?>
                                        </div>

                                        <div class="col-md-6 col-lg-6 mb-3">
                                            <?php
                                                if($secondary_phone == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="cellPhoneInput"><?php echo pll__('Cell Phone (if applicable)'); ?> <span class="required-label">*</span></label>
                                                        <input type="tel" class="form-control" name="cell_phone" id="cellPhoneInput" minlength="8" maxlength="20" placeholder="<?php echo pll__('XXX-XXXX-XXXX'); ?>" required>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <label class="custom-label" for="cellPhoneInput"><?php echo pll__('Cell Phone (if applicable)'); ?></label>
                                                        <input type="tel" class="form-control" name="cell_phone" id="cellPhoneInput" minlength="8" maxlength="20" placeholder="<?php echo pll__('XXX-XXXX-XXXX'); ?>">
                                                    <?php
                                                endif;
                                            ?>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <?php
                                                if($how_did_you_hear_about_us == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="channel_hear_about_us"><?php echo pll__('How did you hear about us?'); ?> <span class="required-label">*</span></label>
                                                        <select class="custom-select" name="channel_select" id="channel_hear_about_us" required>
                                                            <option selected disabled value=""><?php echo pll__('Choose...'); ?></option>
                                                            <option value="<?php echo pll__('Newspaper'); ?>"><?php echo pll__('Newspaper'); ?></option>
                                                            <option value="Facebook">Facebook</option>
                                                            <option value="LinkedIn">LinkedIn</option>
                                                            <option value="<?php echo pll__('Modern Franchisee'); ?>"><?php echo pll__('Modern Franchisee'); ?></option>
                                                            <option value="other"><?php echo pll__('Other'); ?></option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <label class="custom-label" for="channel_hear_about_us"><?php echo pll__('How did you hear about us?'); ?> <span class="required-label"></span></label>
                                                        <select class="custom-select" name="channel_select" id="channel_hear_about_us">
                                                            <option selected disabled value=""><?php echo pll__('Choose...'); ?></option>
                                                            <option value="<?php echo pll__('Newspaper'); ?>"><?php echo pll__('Newspaper'); ?></option>
                                                            <option value="Facebook">Facebook</option>
                                                            <option value="LinkedIn">LinkedIn</option>
                                                            <option value="<?php echo pll__('Modern Franchisee'); ?>"><?php echo pll__('Modern Franchisee'); ?></option>
                                                            <option value="other"><?php echo pll__('Other'); ?></option>
                                                        </select>
                                                    <?php
                                                endif;
                                            ?>
                                        </div>

                                        <div id="other-input-channel" class="col-md-6 mb-3 d-none">
                                            <label class="custom-label" for="otherChannel"><?php echo pll__('Other'); ?></label>
                                            <textarea class="form-control" rows="3" id="otherChannel" name="otherchannel" placeholder="<?php echo pll__('Please specify'); ?>" minlength="1"  maxlength="250"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Language Information -->
                    <div class="accordion" id="accordionLanguageInformation">

                        <div class="card card-accordion-aplication">
                            <div class="card-header" id="headingLanguages">
                                <button class="btn btn-link btn-block text-left btn-arrow-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapseLang" aria-expanded="true" aria-controls="collapseLang">
                                    <h3 class="mb-0"><?php echo pll__('Languages'); ?> <img class="arrow-acordion" src="<?php echo get_bloginfo('template_url'); ?>/images/icons/arrow-down-acordion.svg" alt=""></h3>
                                    <p><?php echo pll__('Click all that apply.'); ?></p>
                                </button>
                            </div>

                            <div id="collapseLang" class="collapse show" aria-labelledby="headingLanguages" data-parent="#accordionLanguageInformation">
                                <div class="card-body">
                                    <div class="form-row">

                                        <div class="col-md-6 col-lg-3 mb-3">
                                            <?php
                                                if($spoken == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="spokenLanguage"><?php echo pll__( 'Spoken' ); ?> <span class="required-label">*</span></label>
                                                        <select class="custom-select" name="spokenLang" id="spokenLanguage" required>
                                                            <option selected disabled value=""><?php echo pll__('Choose...'); ?></option>
                                                            <option value="<?php echo pll__('French'); ?>"><?php echo pll__('French'); ?></option>
                                                            <option value="<?php echo pll__('English'); ?>"><?php echo pll__('English'); ?></option>
                                                            <option value="<?php echo pll__('French and English'); ?>"><?php echo pll__('French and English'); ?></option>
                                                            <option value="other"><?php echo pll__('Other'); ?></option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <label class="custom-label" for="spokenLanguage"><?php echo pll__( 'Spoken' ); ?></label>
                                                        <select class="custom-select" name="spokenLang" id="spokenLanguage">
                                                            <option selected disabled value=""><?php echo pll__('Choose...'); ?></option>
                                                            <option value="<?php echo pll__('French'); ?>"><?php echo pll__('French'); ?></option>
                                                            <option value="<?php echo pll__('English'); ?>"><?php echo pll__('English'); ?></option>
                                                            <option value="<?php echo pll__('French and English'); ?>"><?php echo pll__('French and English'); ?></option>
                                                            <option value="other"><?php echo pll__('Other'); ?></option>
                                                        </select>
                                                    <?php
                                                endif;
                                            ?>

                                            <div id="other-input-spoken" class="d-none mt-3">
                                                <label class="custom-label" for="otherSpoken"><?php echo pll__('Other'); ?></label>
                                                <textarea class="form-control" rows="3" id="otherSpoken" name="otherspoken" placeholder="<?php echo pll__('Please specify'); ?>" minlength="1"  maxlength="250"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3 mb-3">
                                            <?php
                                                if($written == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="whitten"><?php echo pll__('Written'); ?> <span class="required-label">*</span></label>
                                                        <select class="custom-select" name="whitten" id="whitten" required>
                                                            <option selected disabled value=""><?php echo pll__('Choose...'); ?></option>
                                                            <option value="<?php echo pll__('French'); ?>"><?php echo pll__('French'); ?></option>
                                                            <option value="<?php echo pll__('English'); ?>"><?php echo pll__('English'); ?></option>
                                                            <option value="<?php echo pll__('French and English'); ?>"><?php echo pll__('French and English'); ?></option>
                                                            <option value="other"><?php echo pll__('Other'); ?></option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <label class="custom-label" for="whitten"><?php echo pll__('Written'); ?></label>
                                                        <select class="custom-select" name="whitten" id="whitten">
                                                            <option selected disabled value=""><?php echo pll__('Choose...'); ?></option>
                                                            <option value="<?php echo pll__('French'); ?>"><?php echo pll__('French'); ?></option>
                                                            <option value="<?php echo pll__('English'); ?>"><?php echo pll__('English'); ?></option>
                                                            <option value="<?php echo pll__('French and English'); ?>"><?php echo pll__('French and English'); ?></option>
                                                            <option value="other"><?php echo pll__('Other'); ?></option>
                                                        </select>
                                                    <?php
                                                endif;
                                            ?>

                                            <div id="other-input-whitten" class="d-none mt-3">
                                                <label class="custom-label" for="otherwhitten"><?php echo pll__('Other'); ?></label>
                                                <textarea class="form-control" rows="3" id="otherwhitten" name="otherwhitten" placeholder="<?php echo pll__('Please specify'); ?>" minlength="1"  maxlength="250"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-3 mb-3">
                                            <?php
                                                if($english_proficiency == 'required'):
                                                    ?>
                                                        <label class="custom-label" for="englsihProficiency"><?php echo pll__('English proficiency'); ?> <span class="required-label">*</span></label>
                                                        <select class="custom-select" name="englishProficiency" id="englsihProficiency" required>
                                                            <option selected disabled value=""><?php echo pll__('Choose...'); ?></option>
                                                            <option value="<?php echo pll__('Fluent'); ?>"><?php echo pll__('Fluent'); ?></option>
                                                            <option value="<?php echo pll__('Advanced'); ?>"><?php echo pll__('Advanced'); ?></option>
                                                            <option value="<?php echo pll__('Intermediate'); ?>"><?php echo pll__('Intermediate'); ?></option>
                                                            <option value="<?php echo pll__('Elementary'); ?>"><?php echo pll__('Elementary'); ?></option>
                                                            <option value="<?php echo pll__('Beginner'); ?>"><?php echo pll__('Beginner'); ?></option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <label class="custom-label" for="englsihProficiency"><?php echo pll__('English proficiency'); ?></label>
                                                        <select class="custom-select" name="englishProficiency" id="englsihProficiency">
                                                            <option selected disabled value=""><?php echo pll__('Choose...'); ?></option>
                                                            <option value="<?php echo pll__('Fluent'); ?>"><?php echo pll__('Fluent'); ?></option>
                                                            <option value="<?php echo pll__('Advanced'); ?>"><?php echo pll__('Advanced'); ?></option>
                                                            <option value="<?php echo pll__('Intermediate'); ?>"><?php echo pll__('Intermediate'); ?></option>
                                                            <option value="<?php echo pll__('Elementary'); ?>"><?php echo pll__('Elementary'); ?></option>
                                                            <option value="<?php echo pll__('Beginner'); ?>"><?php echo pll__('Beginner'); ?></option>
                                                        </select>
                                                    <?php
                                                endif;
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Geographical Reach -->
                    <div class="accordion" id="accordionGeographicalReach">
                        <!-- Geographical Reach -->
                        <div class="card card-accordion-aplication">
                            <div class="card-header" id="headingGeographical">
                                <button class="btn btn-link btn-block text-left btn-arrow-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapseGeographical" aria-expanded="true" aria-controls="collapseGeographical">
                                    <h3 class="mb-0"><?php echo pll__('Geographical Reach'); ?> <img class="arrow-acordion" src="<?php echo get_bloginfo('template_url'); ?>/images/icons/arrow-down-acordion.svg" alt=""></h3>
                                </button>
                            </div>
                            <div id="collapseGeographical" class="collapse show" aria-labelledby="headingGeographical" data-parent="#accordionGeographicalReach">
                                <div class="card-body">
                                    <div class="form-row">
                                        <?php
                                            if($market_city_one == 'required' || $market_city_two == 'required' || $market_city_three == 'required'):
                                                ?>
                                                    <div class="col-12">
                                                        <label class="custom-label" for="identifyTopThreeMarkets"><?php echo pll__('Identify top three markets (City)'); ?> <span class="required-label">*</span></label>
                                                    </div>
                                                <?php
                                            elseif ($market_city_one == 'no_required' && $market_city_two == 'no_required' && $market_city_three == 'no_required'):
                                                ?>  
                                                    <div class="col-12">
                                                        <label class="custom-label" for="identifyTopThreeMarkets"><?php echo pll__('Identify top three markets (City)'); ?> <span class="required-label"></span></label>
                                                    </div>
                                                <?php
                                            endif;
                                        ?>
                                        <div class="col-md-6 col-lg-3 mb-3">
                                            <?php
                                                if($market_city_one == 'required'):
                                                    ?>
                                                        <input type="text" class="form-control" name="identifyMarketsOne" id="identifyTopThreeMarkets" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Option One'); ?>" required>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <input type="text" class="form-control" name="identifyMarketsOne" id="identifyTopThreeMarkets" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Option One'); ?>">
                                                    <?php
                                                endif;
                                            ?>
                                            
                                        </div>

                                        <div class="col-md-6 col-lg-3 mb-3">
                                            <?php
                                                if($market_city_two == 'required'):
                                                    ?>
                                                        <input type="text" class="form-control" name="identifyMarketsTwo" id="identifyTopThreeMarketTwo" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Option Two'); ?>" required>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>  
                                                        <input type="text" class="form-control" name="identifyMarketsTwo" id="identifyTopThreeMarketTwo" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Option Two'); ?>">
                                                    <?php
                                                endif;
                                            ?>
                                        </div>

                                        <div class="col-md-6 col-lg-3 mb-3">
                                            <?php
                                                if($market_city_three == 'required'):
                                                    ?>
                                                        <input type="text" class="form-control" name="identifyMarketsThree" id="identifyTopThreeMarketThree" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Option Three'); ?>" required>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <input type="text" class="form-control" name="identifyMarketsThree" id="identifyTopThreeMarketThree" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Option Three'); ?>">
                                                    <?php
                                                endif;
                                            ?>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        <?php
                                            if($relocate_in_canada == 'required'):
                                                ?>
                                                    <div class="col-12">
                                                        <label class="custom-label" for="relocateSelect"><?php echo pll__('Are you willing to relocate anywhere in Canada? If yes, please provide details.'); ?> <span class="required-label">*</span></label>
                                                    </div>
                                                <?php
                                            else:
                                                ?>  
                                                    <div class="col-12">
                                                        <label class="custom-label" for="relocateSelect"><?php echo pll__('Are you willing to relocate anywhere in Canada? If yes, please provide details.'); ?> <span class="required-label"></span></label>
                                                    </div>
                                                <?php
                                            endif;
                                        ?>

                                        <div class="col-md-6 mb-3">
                                            <?php
                                                if($relocate_in_canada == 'required'):
                                                    ?>                                                    
                                                        <select class="custom-select" name="relocateSelect" id="relocateSelect" required>
                                                            <option selected disabled value=""><?php echo pll__('Choose...'); ?></option>
                                                            <option value="yes"><?php echo pll__('Yes'); ?></option>
                                                            <option value="<?php echo pll__('No'); ?>"><?php echo pll__('No'); ?></option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback"> 
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <select class="custom-select" name="relocateSelect" id="relocateSelect">
                                                            <option selected disabled value=""><?php echo pll__('Choose...'); ?></option>
                                                            <option value="yes"><?php echo pll__('Yes'); ?></option>
                                                            <option value="<?php echo pll__('No'); ?>"><?php echo pll__('No'); ?></option>
                                                        </select>
                                                    <?php
                                                endif;
                                            ?>
                                        </div>
                                        
                                        <div class="col-md-6 mb-3">
                                            <textarea class="form-control d-none" rows="4" id="relocateAnywhere" name="relocateTextArea" placeholder="<?php echo pll__('Please specify'); ?>" minlength="1"  maxlength="250"></textarea>
                                            <div class="invalid-feedback">
                                                <?php echo pll__( 'Field is required.' ); ?>
                                            </div>
                                            <div class="valid-feedback">
                                                <?php echo pll__('Looks good!'); ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Business matters/ eligibility -->
                    <div class="accordion" id="accordionBusinessMatters">
                        <div class="card card-accordion-aplication">
                            <div class="card-header" id="headingBusinessMatters">
                                <button class="btn btn-link btn-block text-left btn-arrow-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapseBusinessMatters" aria-expanded="true" aria-controls="collapseBusinessMatters">
                                    <h3 class="mb-0"><?php echo pll__('Business matters / eligibility'); ?> <img class="arrow-acordion" src="<?php echo get_bloginfo('template_url'); ?>/images/icons/arrow-down-acordion.svg" alt=""> </h3>
                                </button>
                            </div>
                            <div id="collapseBusinessMatters" class="collapse show" aria-labelledby="headingBusinessMatters" data-parent="#accordionBusinessMatters">
                                <div class="card-body">
                                    
                                    <div class="form-row">
                                        <?php
                                            if($eligible_to_work_in_canada == 'required'):
                                                ?>
                                                    <div class="col-12">
                                                        <label class="custom-label" for="legallyEligible"><?php echo pll__('Are you legally eligible to work in Canada?'); ?> <span class="required-label">*</span></label>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 mb-3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="legallyEligible" id="inlineRadio1" value="<?php echo pll__('Yes'); ?>" required checked>
                                                            <label class="form-check-label" for="inlineRadio1"><?php echo pll__('Yes'); ?></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="legallyEligible" id="inlineRadio2" value="<?php echo pll__('No'); ?>" required>
                                                            <label class="form-check-label" for="inlineRadio2"><?php echo pll__('No'); ?></label>
                                                        </div>
                                                    </div>
                                                <?php
                                            else:
                                                ?>
                                                    <div class="col-12">
                                                        <label class="custom-label" for="legallyEligible"><?php echo pll__('Are you legally eligible to work in Canada?'); ?> <span class="required-label"></span></label>
                                                    </div>
                                                    <div class="col-md-6 col-lg-6 mb-3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="legallyEligible" id="inlineRadio1" value="<?php echo pll__('Yes'); ?>" checked>
                                                            <label class="form-check-label" for="inlineRadio1"><?php echo pll__('Yes'); ?></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="legallyEligible" id="inlineRadio2" value="<?php echo pll__('No'); ?>">
                                                            <label class="form-check-label" for="inlineRadio2"><?php echo pll__('No'); ?></label>
                                                        </div>
                                                    </div>
                                                <?php
                                            endif;
                                        ?>
                                    </div>

                                    <div class="form-row">

                                        <?php
                                            if($own_business_or_franchise == 'required'):
                                                ?>
                                                    <div class="col-md-6 col-lg-4 mb-3">
                                                        <label class="custom-label w-100" for="haveBusinessOrFranchise"><?php echo pll__('Have you ever owned your own business or Franchise?'); ?> <span class="required-label">*</span></label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="haveBusinessOrFranchise" id="radioBusinessFranchise1" value="yes" required checked>
                                                            <label class="form-check-label" for="radioBusinessFranchise1"><?php echo pll__('Yes'); ?></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="haveBusinessOrFranchise" id="radioBusinessFranchise2" value="<?php echo pll__('No'); ?>" required>
                                                            <label class="form-check-label" for="radioBusinessFranchise2"><?php echo pll__('No'); ?></label>
                                                        </div>
                                                    </div>
                                                <?php
                                            else:
                                                ?>
                                                    <div class="col-md-6 col-lg-4 mb-3">
                                                        <label class="custom-label w-100" for="haveBusinessOrFranchise"><?php echo pll__('Have you ever owned your own business or Franchise?'); ?> <span class="required-label"></span></label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="haveBusinessOrFranchise" id="radioBusinessFranchise1" value="yes" checked>
                                                            <label class="form-check-label" for="radioBusinessFranchise1"><?php echo pll__('Yes'); ?></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="haveBusinessOrFranchise" id="radioBusinessFranchise2" value="<?php echo pll__('No'); ?>">
                                                            <label class="form-check-label" for="radioBusinessFranchise2"><?php echo pll__('No'); ?></label>
                                                        </div>
                                                    </div>
                                                <?php
                                            endif;
                                        ?>

                                        <div class="col-md-6 col-lg-6 mb-3" id="havebusinessAreatext">
                                            <label for="haveBusinessOrFranchiseArea" class="custom-label"><?php echo pll__('Specify name of business or Franchise'); ?></label>
                                            <textarea class="form-control" rows="2" id="haveBusinessOrFranchiseArea" name="haveBusinessOrFranchiseArea" placeholder="<?php echo pll__('Specify name of business or Franchise'); ?>" minlength="1"  maxlength="250"></textarea>
                                            <div class="invalid-feedback">
                                                <?php echo pll__( 'Field is required.' ); ?>
                                            </div>
                                            <div class="valid-feedback">
                                                <?php echo pll__('Looks good!'); ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <?php
                                            if($current_business_or_franchise == 'required'):
                                                ?>
                                                    <div class="col-md-6 col-lg-4 mb-3">
                                                        <label class="custom-label w-100" for="currentBusinessOrFranchise"><?php echo pll__('Do you currently own your own business or Franchise?'); ?>  <span class="required-label">*</span></label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="currentBusinessOrFranchise" id="currentBusinessOrFranchise1" value="<?php echo pll__('Yes'); ?>" required checked>
                                                            <label class="form-check-label" for="currentBusinessOrFranchise1"> <?php echo pll__('Yes'); ?></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="currentBusinessOrFranchise" id="currentBusinessOrFranchise2" value="<?php echo pll__('No'); ?>" required>
                                                            <label class="form-check-label" for="currentBusinessOrFranchise2"><?php echo pll__('No'); ?></label>
                                                        </div>
                                                    </div>
                                                <?php
                                            else:
                                                ?>  
                                                    <div class="col-md-6 col-lg-4 mb-3">
                                                        <label class="custom-label w-100" for="currentBusinessOrFranchise"><?php echo pll__('Do you currently own your own business or Franchise?'); ?>  <span class="required-label"></span></label>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="currentBusinessOrFranchise" id="currentBusinessOrFranchise1" value="<?php echo pll__('Yes'); ?>" checked>
                                                            <label class="form-check-label" for="currentBusinessOrFranchise1"> <?php echo pll__('Yes'); ?></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="currentBusinessOrFranchise" id="currentBusinessOrFranchise2" value="<?php echo pll__('No'); ?>">
                                                            <label class="form-check-label" for="currentBusinessOrFranchise2"><?php echo pll__('No'); ?></label>
                                                        </div>
                                                    </div>
                                                <?php
                                            endif;
                                        ?>

                                        <div class="col-md-6 col-lg-6 mb-3" id="currentlyBusinessSpecify">
                                            <label for="relocateAnywhere" class="custom-label"><?php echo pll__('Specify name of business or Franchise'); ?></label>
                                            <textarea class="form-control" rows="2" id="relocateAnywhere" name="currentlyBusinessSpecifyArea" placeholder="<?php echo pll__('Specify name of business or Franchise'); ?>" minlength="1"  maxlength="250"></textarea>
                                            <div class="invalid-feedback">
                                                <?php echo pll__( 'Field is required.' ); ?>
                                            </div>
                                            <div class="valid-feedback">
                                                <?php echo pll__('Looks good!'); ?>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-row">
                                        
                                        <?php
                                            if($working_for_a_cleaning_company == 'required'):
                                                ?>
                                                    <div class="col-12">
                                                        <label class="custom-label" for="workForACleaningCompany"><?php echo pll__('Have you ever or do you still work for a cleaning company?'); ?> <span class="required-label">*</span></label>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4 mb-3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="workForACleaningCompany" id="workForACleaningCompany1" value="<?php echo pll__('Yes'); ?>" required checked>
                                                            <label class="form-check-label" for="workForACleaningCompany1"><?php echo pll__('Yes'); ?></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="workForACleaningCompany" id="workForACleaningCompany2" value="<?php echo pll__('No'); ?>" required>
                                                            <label class="form-check-label" for="workForACleaningCompany2"><?php echo pll__('No'); ?></label>
                                                        </div>
                                                    </div>
                                                <?php
                                            else:
                                                ?>
                                                    <div class="col-12">
                                                        <label class="custom-label" for="workForACleaningCompany"><?php echo pll__('Have you ever or do you still work for a cleaning company?'); ?> <span class="required-label"></span></label>
                                                    </div>
                                                    <div class="col-md-6 col-lg-4 mb-3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="workForACleaningCompany" id="workForACleaningCompany1" value="<?php echo pll__('Yes'); ?>" checked>
                                                            <label class="form-check-label" for="workForACleaningCompany1"><?php echo pll__('Yes'); ?></label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="workForACleaningCompany" id="workForACleaningCompany2" value="<?php echo pll__('No'); ?>">
                                                            <label class="form-check-label" for="workForACleaningCompany2"><?php echo pll__('No'); ?></label>
                                                        </div>
                                                    </div>
                                                <?php
                                            endif;
                                        ?>

                                        <div class="col-md-6 col-lg-6 mb-3" id="cleaningCompanyArea">
                                            <laber class="custom-label" for="cleaninglabelarea"><?php echo pll__('Specify name of cleaning company'); ?></laber>
                                            <textarea class="form-control" rows="2" id="cleaninglabelarea" name="cleaningCompanyArea" placeholder="<?php echo pll__('Specify name of cleaning company'); ?>" minlength="1"  maxlength="250"></textarea>
                                            <div class="invalid-feedback">
                                                <?php echo pll__( 'Field is required.' ); ?>
                                            </div>
                                            <div class="valid-feedback">
                                                <?php echo pll__('Looks good!'); ?>
                                            </div>
                                        </div>

                                    </div>
                                    
                                    <div class="form-row">
                                        
                                        <?php
                                            if($interested_in_acquiring_a_modern_franchise == 'required'):
                                                ?>
                                                    <div class="col-12">
                                                        <label class="custom-label" for="why_are_you_interested_acquiring"><?php echo pll__('Why are you interested in acquiring a Modern Franchise?'); ?>  <span class="required-label">*</span></label>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <textarea class="form-control" rows="4" id="why_are_you_interested_acquiring" name="why_are_you_interested_acquiring" placeholder="<?php echo pll__('Please specify'); ?>" minlength="1" maxlength="250" required></textarea>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    </div>
                                                <?php
                                            else:
                                                ?>
                                                    <div class="col-12">
                                                        <label class="custom-label" for="why_are_you_interested_acquiring"><?php echo pll__('Why are you interested in acquiring a Modern Franchise?'); ?>  <span class="required-label"></span></label>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <textarea class="form-control" rows="4" id="why_are_you_interested_acquiring" name="why_are_you_interested_acquiring" placeholder="<?php echo pll__('Please specify'); ?>" minlength="1" maxlength="250"></textarea>
                                                    </div>
                                                <?php
                                            endif;
                                        ?>

                                    </div>

                                    <div class="form-row">
                                        <?php
                                            if($believe_you_would_make_an_excellent_franchisee == 'required'):
                                                ?>
                                                    <div class="col-12">
                                                        <label class="custom-label" for="tell_us_you_belive"><?php echo pll__('Tell us why you believe you would make an excellent Franchisee for Modern Cleaining?'); ?> <span class="required-label">*</span></label>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <textarea class="form-control" rows="4" id="tell_us_you_belive" name="tell_us_you_belive" placeholder="<?php echo pll__('Please specify'); ?>" minlength="1" maxlength="250" required></textarea>
                                                        <div class="invalid-feedback">
                                                            <?php echo pll__( 'Field is required.' ); ?>
                                                        </div>
                                                        <div class="valid-feedback">
                                                            <?php echo pll__('Looks good!'); ?>
                                                        </div>
                                                    </div>
                                                <?php
                                            else:
                                                ?>
                                                    <div class="col-12">
                                                        <label class="custom-label" for="tell_us_you_belive"><?php echo pll__('Tell us why you believe you would make an excellent Franchisee for Modern Cleaining?'); ?> <span class="required-label"></span></label>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <textarea class="form-control" rows="4" id="tell_us_you_belive" name="tell_us_you_belive" placeholder="<?php echo pll__('Please specify'); ?>" minlength="1" maxlength="250"></textarea>
                                                    </div>
                                                <?php
                                            endif;
                                        ?>
                                    </div>

                                    <div class="form-row d-none">
                                        <div class="col-md-6 mb-3">
                                            <label class="connect-with-us-container__label" for="page_slug">Page Slug</label>
                                            <input type="text" class="form-control connect-with-us-container__input" name="page_slug" value="<?php echo $page_slug; ?>" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Your Preferences -->
                    <div class="accordion" id="accordionYourPreferences">
                        <div class="card card-accordion-aplication">
                            <div class="card-header bg-tranparent" id="headingPreferences">
                                <button class="btn btn-link btn-block text-left btn-arrow-collapse collapsed" type="button" data-toggle="collapse" data-target="#collapsePreferences" aria-expanded="true" aria-controls="collapsePreferences">
                                    <h3 class="mb-0"><?php echo pll__('Resume'); ?><img class="arrow-acordion" src="<?php echo get_bloginfo('template_url'); ?>/images/icons/arrow-down-acordion.svg" alt=""></h3>
                                </button>
                            </div>

                            <div id="collapsePreferences" class="collapse show" aria-labelledby="headingPreferences" data-parent="#accordionYourPreferences">
                                <div class="card-body pb-0">
                                    <div class="form-row">
                                        <div class="form-file upload-file no-style">
                                            <?php
                                                if($file == 'required'):
                                                    ?>
                                                        <label for="exampleFormControlFile1"><?php echo pll__('Max file size 2MB'); ?></label>
                                                        <label for="file" class="file">
                                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="resume_file" required/>
                                                            <div class="invalid-feedback">
                                                                <?php echo pll__( 'Field is required.' ); ?>
                                                            </div>
                                                            <div class="valid-feedback">
                                                                <?php echo pll__('Looks good!'); ?>
                                                            </div>
                                                        </label>
                                                    <?php
                                                else: 
                                                    ?>
                                                        <label for="exampleFormControlFile1"><?php echo pll__('Max file size 2MB'); ?></label>
                                                        <label for="file" class="file">
                                                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="resume_file"/>
                                                        </label>
                                                    <?php
                                                endif;
                                            ?>

                                        </div>
                                        <div class="col-12 my-3">
                                            <?php
                                                if($terms_and_conditions == 'required'):
                                                    ?>
                                                        <div class="custom-control custom-checkbox mb-3">
                                                            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                                                            <label class="custom-control-label" for="customControlValidation1"><span class="UFTFTermsAndConditionsCheckbox"></span> <span class="required-label">*</span></label>
                                                            <div class="invalid-feedback">
                                                                <?php echo pll__( 'Field is required.' ); ?>
                                                            </div>
                                                            <div class="valid-feedback">
                                                                <?php echo pll__('Looks good!'); ?>
                                                            </div>
                                                        </div>
                                                    <?php
                                                else:
                                                    ?>
                                                        <div class="custom-control custom-checkbox mb-3">
                                                            <input type="checkbox" class="custom-control-input" id="customControlValidation1">
                                                            <label class="custom-control-label" for="customControlValidation1"><span class="UFTFTermsAndConditionsCheckbox"></span> <span class="required-label"></span></label>
                                                            <div class="invalid-feedback">
                                                                <?php echo pll__( 'Field is required.' ); ?>
                                                            </div>
                                                            <div class="valid-feedback">
                                                                <?php echo pll__('Looks good!'); ?>
                                                            </div>
                                                        </div>
                                                    <?php
                                                endif;
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Submit-->
                    <div class="accordion" id="accordionSubmit">
                        <div class="card card-accordion-aplication">
                            <div>
                                <div class="card-body pt-0">
                                    <div class="form-row">
                                        <div class="col-12 d-flex justify-content-start align-items-center mb-3">
                                            <div class="g-recaptcha" data-sitekey="6LefesAaAAAAAO8f8HO090hui6H-Fm3UNwq0B85r"></div>
                                        </div>
                                        <div class="col-12">
                                            <div class="content-btn btn-form-aplication">
                                                <button type="submit" class="modern-website-button modern-website-button__primary text-left"><span class="modern-website-button__text"><?php echo pll__('SUBMIT APPLICATION'); ?></span><span class="modern-website-button__icon"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End accordion form sections  -->
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="disclaimerUnitTerritoryFranchiseModal">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle"><?php echo pll__('Unit Franchise Disclaimer'); ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <h5 class="text-primary"><?php echo pll__('Please Read Carefully'); ?> *</h5>
            <p><?php echo get_field('unit_franchise_landing_long_form_form_disclaimer'); ?></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo pll__('Close'); ?></button>
        </div>
    </div>
  </div>
</div>