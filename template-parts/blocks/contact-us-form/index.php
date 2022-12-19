<section class="contact-us-form">
    <div class="container">
        <div class="row">
            <form class="needs-validation w-100" method="POST" action="<?php echo get_template_directory_uri(); ?>/inc/forms/contact_us_form.php" novalidate>
                <div class="col-12 body">
                    <div class="row">
                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="nameInput"><?php echo pll__('Name'); ?></label>
                            <input type="text" class="form-control" name="name" id="nameInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('Name Contact Us Form'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>

                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="emailAddressInput"><?php echo pll__('E-mail Address'); ?></label>
                            <input type="email" class="form-control" name="emailAddress" id="emailAddressInput" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" placeholder="<?php echo pll__('Email Address Contact Us Form'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="companyName"><?php echo pll__('Company Name'); ?></label>
                            <input type="text" class="form-control" name="companyName" id="companyNameInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('Company Name Placeholder'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>

                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="buildingAddress"><?php echo pll__('Building Address'); ?></label>
                            <input type="text" class="form-control" name="buildingAddress" id="buildingAddressInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('Building Address Placeholder'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>

                    </div>

                    <div class="row">
                        
                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="city"><?php echo pll__('City'); ?></label>
                            <input type="text" class="form-control" name="city" id="cityInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('City Placeholder'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>

                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="postalCode"><?php echo pll__('Postal Code'); ?></label>
                            <input type="text" class="form-control" name="postalCode" id="postalCodeInput" minlength="4" maxlength="9" placeholder="<?php echo pll__('e.g l4ylE4'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>   
                        
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="province"><?php echo pll__('Province'); ?></label>
                            <select class="custom-select" name="province" id="provinceInput" required>
                                <option value=""><?php echo pll__('Select Province'); ?></option>
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
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>   

                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="phoneInput"><?php echo pll__('Phone Number'); ?></label>
                            <input type="tel" class="form-control" name="phone" id="phoneInput" minlength="8" maxlength="20" placeholder="<?php echo pll__('Phone Number Contact Us Form'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>          
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-lg-6 mb-3">
                            <label class="custom-label" for="subject"><?php echo pll__('Subject'); ?></label>
                            <input type="text" class="form-control" name="subject" id="subjectInput" minlength="4" maxlength="1000" placeholder="<?php echo pll__('Subject Placeholder'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12 mb-12">
                            <label class="custom-label" for="howCanWeHelpYou"><?php echo pll__('How can we help you?'); ?> <span class="required-label">*</span></label>
                            <textarea type="text" class="form-control no-resize" name="howCanWeHelpYou" id="howCanWeHelpYouInput" minlength="4" maxlength="5000" placeholder="<?php echo pll__('How can we help you? Placeholder'); ?>" rows="6" required></textarea>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-end align-items-center mb-4">
                            <div class="g-recaptcha" data-sitekey="6LefesAaAAAAAO8f8HO090hui6H-Fm3UNwq0B85r"></div>
                        </div>
                        <div class="col-12 mb-12 text-right">
                            <button class="button-secondary"><?php echo pll__('Submit'); ?></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>