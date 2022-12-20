<?php 
    $personal_information_disclaimer_text = get_field('personal_information_disclaimer_text');
	global $post;
?>
<section class="personal-information-form">
    <div class="container">
        <form class="needs-validation" method="POST" action="<?php echo get_template_directory_uri(); ?>/inc/forms/territory_franchise_application_form.php" novalidate>
            <div class="row">
                <div class="col-12 col-md-12 header">
                    <h3 class="mb-0 title text-primary"><?php echo pll__('Personal Information'); ?></h3>
                    <p class="fs-14 fw-400 fs-italic"><?php echo pll__('Required fields'); ?> <span class="required-label">*</span></p>
                </div>

                <div class="col-12 body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="custom-label" for="firstNameInput"><?php echo pll__('First'); ?> <span class="required-label">*</span></label>
                            <input type="text" class="form-control" name="firstName" id="firstNameInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('First Placeholder'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="custom-label" for="lastNameInput"><?php echo pll__('Last'); ?> <span class="required-label">*</span></label>
                            <input type="text" class="form-control" name="lastName" id="lastNameInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('Last Placeholder'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="custom-label" for="emailAddressInput"><?php echo pll__('E-mail Address'); ?> <span class="required-label">*</span></label>
                            <input type="email" class="form-control" name="emailAddress" id="emailAddressInput" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" placeholder="<?php echo pll__('Preferred email to contact you'); ?>" required="" />
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="custom-label" for="address"><?php echo pll__('Address'); ?> <span class="required-label">*</span></label>
                            <input type="text" class="form-control" name="address" id="address" minlength="3" maxlength="50" placeholder="<?php echo pll__('Address Placeholder'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="custom-label" for="city"><?php echo pll__('City'); ?> <span class="required-label">*</span></label>
                            <input type="text" class="form-control" name="city" id="city" minlength="3" maxlength="50" placeholder="<?php echo pll__('City Placeholder'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
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
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="custom-label" for="postalCodeInput"><?php echo pll__('Targeted areas (Postal Code)'); ?><span class="required-label">*</span></label> 
                            <input type="text" class="form-control" name="postalCode" id="postalCodeInput" minlength="3" maxlength="20" placeholder="<?php echo pll__('e.g l4ylE4'); ?>" required="" />
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="custom-label" for="phoneInput"><?php echo pll__('Phone Number'); ?> <span class="required-label">*</span></label>
                            <input type="tel" class="form-control" name="phone" id="phoneInput" minlength="8" maxlength="20" placeholder="<?php echo pll__('Phone Number Territory Franchise Form Placeholder'); ?>" required="" />
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="custom-label" for="secondaryPhoneInput"><?php echo pll__('Cell Phone (if applicable)'); ?> <span class="required-label"></span></label>
                            <input type="tel" class="form-control" name="secondaryPhone" id="secondaryPhoneInput" minlength="8" maxlength="20" placeholder="<?php echo pll__('XXX-XXXX-XXXX'); ?>"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label class="custom-label" for="investmentLevelInput"><?php echo pll__('Investment Level'); ?> <span class="required-label">*</span></label>
                            <input type="text" class="form-control" name="investmentLevel" id="investmentLevelInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('Investment Level Placeholder'); ?>" required="" />
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 header mb-4">
                    <h3 class="mb-0 title text-primary"><?php echo pll__('Geographical Reach'); ?></h3>
                </div>

                <div class="col-12">
                    <label class="custom-label" for="identifyTopThreeMarkets"><?php echo pll__('Identify top three markets (City)'); ?> <span class="required-label">*</span></label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" name="identifyMarketsOne" id="identifyTopThreeMarkets" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Option One'); ?>" required>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" name="identifyMarketsTwo" id="identifyTopThreeMarketTwo" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Option Two'); ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <input type="text" class="form-control" name="identifyMarketsThree" id="identifyTopThreeMarketThree" minlength="3"  maxlength="50" placeholder="<?php echo pll__('Option Three'); ?>">
                </div>
            </div>

            <div class="row">
                <div class="col-12 body">
                    <div class="row">
                        <div class="col-md-12 custom-control custom-checkbox mb-3 pl-5">
                            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                            <label class="custom-control-label" for="customControlValidation1"><span class="UFTFTermsAndConditionsCheckbox"></span> <span class="required-label">*</span></label>

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

            <div class="row">
				<div class="col-12 d-none">
                    <input type="text" class="form-control" name="page_template" value="<?php echo esc_attr(get_page_template_slug($post->ID)); ?>" hidden>
				</div>
                <div class="col-12 d-flex justify-content-start align-items-center mb-4">
                    <div class="g-recaptcha" data-sitekey="6LefesAaAAAAAO8f8HO090hui6H-Fm3UNwq0B85r"></div>
                </div>
                <div class="col-12 col-md-12">
                    <button class="button-primary-uppercase row-button"><?php echo pll__('SUBMIT APPLICATION'); ?> <span /></button>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" tabindex="-1" aria-labelledby="disclaimerUnitTerritoryFranchiseModal" aria-hidden="true" id="disclaimerUnitTerritoryFranchiseModal">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle"><?php echo pll__('Territory Franchise Disclaimer'); ?></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <p class="fs-12 text-grey description font-italic"><?php echo $personal_information_disclaimer_text; ?></p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo pll__('Close'); ?></button>
        </div>
    </div>
  </div>
</div>