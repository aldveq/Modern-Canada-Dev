<?php 
    $personal_information_disclaimer_text = get_field('personal_information_disclaimer_text');
    global $post;
    $page_slug = $post->post_name;
?>
<section class="personal-information-form">
    <div class="container">
        <form class="needs-validation" method="POST" enctype="multipart/form-data" action="<?php echo get_template_directory_uri(); ?>/inc/forms/modern-tf-rfc-form.php" novalidate>
            <!-- Personal Information -->
            <div class="row">
                <div class="col-12 col-md-12 header">
                    <h3 class="mb-0 title text-primary"><?php echo pll__('Personal Information'); ?></h3>
                    <p class="fs-14 fw-400 fs-italic"><?php echo pll__('Required fields'); ?> <span class="required-label">*</span></p>
                </div>

                <div class="col-12 body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="custom-label" for="firstNameInput"><?php echo pll__('First Name'); ?> <span class="required-label">*</span></label>
                            <input type="text" class="form-control" name="firstName" id="firstNameInput" minlength="3" maxlength="150" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="custom-label" for="lastNameInput"><?php echo pll__('Last Name'); ?> <span class="required-label">*</span></label>
                            <input type="text" class="form-control" name="lastName" id="lastNameInput" minlength="3" maxlength="150" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="custom-label" for="phoneInput"><?php echo pll__('Cell Phone'); ?> <span class="required-label">*</span></label>
                            <input type="tel" class="form-control" name="phone" id="phoneInput" minlength="8" maxlength="120" required="" />
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="custom-label" for="emailAddressInput"><?php echo pll__('E-mail Address'); ?> <span class="required-label">*</span></label>
                            <input type="email" class="form-control" name="emailAddress" id="emailAddressInput" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" required="" />
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label class="custom-label" for="homeAddressInput"><?php echo pll__('Home Address'); ?> <span class="required-label">*</span></label>
                            <input type="text" class="form-control" name="homeAddress" id="homeAddressInput" minlength="3" maxlength="1100" required="" />
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-4 mb-3">
                            <label class="custom-label" for="city"><?php echo pll__('City'); ?> <span class="required-label">*</span></label>
                            <input type="text" class="form-control" name="city" id="city" minlength="3" maxlength="150" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>

                        <div class="col-md-4 mb-3">
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

                        <div class="col-md-4 mb-3">
                            <label class="custom-label" for="postalCodeInput"><?php echo pll__('Postal Code'); ?> <span class="required-label">*</span></label> 
                            <input type="text" class="form-control" name="postalCode" id="postalCodeInput" minlength="3" maxlength="120" required="" />
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <label class="custom-label" for="dateOfbirthInput"><?php echo pll__('Date of birth'); ?> <span class="required-label">*</span></label>
                            <input type="date" class="form-control" name="dateOfbirth" id="dateOfbirthInput" required="" />
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Location of Interest -->
            <div class="row">
                <div class="col-12 col-md-12 header mb-4">
                    <h3 class="mb-0 title text-primary"><?php echo pll__('Location of Interest'); ?></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mb-3">
                    <label class="custom-label" for="preferredArea"><?php echo pll__('Preferred Area'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="preferredArea" id="preferredArea" minlength="3"  maxlength="150" required>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="custom-label" for="preferredAreaCity"><?php echo pll__('City'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="preferredAreaCity" id="preferredAreaCity" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-4 mb-3">
                    <label class="custom-label" for="preferredAreaProvince"><?php echo pll__('Province'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaProvince" id="preferredAreaProvince" required>
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

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaHowDidYouHearAboutFO"><?php echo pll__('How did you hear about our franchising opportunity?'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaHowDidYouHearAboutFO" id="preferredAreaHowDidYouHearAboutFO" required>
                        <option selected disabled value="<?php echo pll__('Please Select One'); ?>"><?php echo pll__('Please Select One'); ?></option>
                        <option value="<?php echo pll__('Word of mouth'); ?>"><?php echo pll__('Word of mouth'); ?></option>
                        <option value="<?php echo pll__('I am/was a regular customer'); ?>"><?php echo pll__('I am/was a regular customer'); ?></option>
                        <option value="<?php echo pll__('I have worked/am working as a Modern franchisee'); ?>"><?php echo pll__('I have worked/am working as a Modern franchisee'); ?></option>
                        <option value="<?php echo pll__('Referral'); ?>"><?php echo pll__('Referral'); ?></option>
                        <option value="<?php echo pll__('Online advertisement'); ?>"><?php echo pll__('Online advertisement'); ?></option>
                        <option value="<?php echo pll__('Other'); ?>"><?php echo pll__('Other'); ?></option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaLookingtoStart"><?php echo pll__('Looking to start'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaLookingtoStart" id="preferredAreaLookingtoStart" required>
                        <option value="<?php echo pll__('Immediately'); ?>"><?php echo pll__('Immediately'); ?></option>
                        <option value="<?php echo pll__('Within 3-6 months'); ?>"><?php echo pll__('Within 3-6 months'); ?></option>
                        <option value="<?php echo pll__('Within 7-12 months'); ?>"><?php echo pll__('Within 7-12 months'); ?></option>
                        <option value="<?php echo pll__('1 year or more'); ?>"><?php echo pll__('1 year or more'); ?></option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaPreviousFranchiseExperience"><?php echo pll__('Previous Franchise Experience'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaPreviousFranchiseExperience" id="preferredAreaPreviousFranchiseExperience" required>
                        <option selected disabled value="<?php echo pll__('Please Select One'); ?>"><?php echo pll__('Please Select One'); ?></option>
                        <option value="<?php echo pll__( 'Yes' ); ?>"><?php echo pll__( 'Yes' ); ?></option>
                        <option value="<?php echo pll__( 'No' ); ?>"><?php echo pll__( 'No' ); ?></option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaAnticipatedOwnerInvolvement"><?php echo pll__('Anticipated owner’s involvement'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaAnticipatedOwnerInvolvement" id="preferredAreaAnticipatedOwnerInvolvement" required>
                        <option selected disabled value="<?php echo pll__('Please Select One'); ?>"><?php echo pll__('Please Select One'); ?></option>
                        <option value="<?php echo pll__( 'Owner-operator' ); ?>"><?php echo pll__( 'Owner-operator' ); ?></option>
                        <option value="<?php echo pll__( 'Absentee owner' ); ?>"><?php echo pll__( 'Absentee owner' ); ?></option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaCurrentlyEmployed"><?php echo pll__('Are you currently employed?'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaCurrentlyEmployed" id="preferredAreaCurrentlyEmployed" required>
                        <option selected disabled value="<?php echo pll__('Please Select One'); ?>"><?php echo pll__('Please Select One'); ?></option>
                        <option value="<?php echo pll__( 'Yes' ); ?>"><?php echo pll__( 'Yes' ); ?></option>
                        <option value="<?php echo pll__( 'No' ); ?>"><?php echo pll__( 'No' ); ?></option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaCurrentOccupation"><?php echo pll__('What is your current occupation?'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="preferredAreaCurrentOccupation" id="preferredAreaCurrentOccupation" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaRecentJob"><?php echo pll__('What is/was your single most favorite attribute of your current/most recent job?'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="preferredAreaRecentJob" id="preferredAreaRecentJob" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="form-file no-style">
                        <label><?php echo pll__('Upload your current resume (optional)'); ?></label>
                        <label for="preferredAreaOptionalResume" class="file">
                            <input type="file" class="form-control-file" id="preferredAreaOptionalResume" name="resume_file" accept=".doc,.docx,.pdf" />
                        </label>
                        <small><?php echo pll__('Max file size 50MB'); ?></small>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaOwnedBusiness"><?php echo pll__('Have you ever owned a business?'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaOwnedBusiness" id="preferredAreaOwnedBusiness" required>
                        <option selected disabled value="<?php echo pll__('Please Select One'); ?>"><?php echo pll__('Please Select One'); ?></option>
                        <option value="<?php echo pll__( 'Yes, I am currently a business owner' ); ?>"><?php echo pll__( 'Yes, I am currently a business owner' ); ?></option>
                        <option value="<?php echo pll__( 'Yes, I owned business in the past' ); ?>"><?php echo pll__( 'Yes, I owned business in the past' ); ?></option>
                        <option value="<?php echo pll__( 'No' ); ?>"><?php echo pll__( 'No' ); ?></option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaBusinessPartners"><?php echo pll__('Will you have business partners?'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaBusinessPartners" id="preferredAreaBusinessPartners" required>
                        <option selected disabled value="<?php echo pll__('Please Select One'); ?>"><?php echo pll__('Please Select One'); ?></option>
                        <option value="<?php echo pll__( 'No' ); ?>"><?php echo pll__( 'No' ); ?></option>
                        <option value="<?php echo pll__( 'Yes' ); ?>"><?php echo pll__( 'Yes' ); ?></option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaRelativeInBusiness"><?php echo pll__('Will your spouse/relative be a partner or employee in the business?'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaRelativeInBusiness" id="preferredAreaRelativeInBusiness" required>
                        <option selected disabled value="<?php echo pll__('Please Select One'); ?>"><?php echo pll__('Please Select One'); ?></option>
                        <option value="<?php echo pll__( 'If yes, please be specific and provide details' ); ?>"><?php echo pll__( 'If yes, please be specific and provide details' ); ?></option>
                        <option value="<?php echo pll__( 'No' ); ?>"><?php echo pll__( 'No' ); ?></option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-12 mb-3 d-none">
                    <label class="custom-label" for="preferredAreaRelativeInBusinessDetails"><?php echo pll__('Details'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="preferredAreaRelativeInBusinessDetails" id="preferredAreaRelativeInBusinessDetails" minlength="3" maxlength="150"/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaSoleIncomeSource"><?php echo pll__('Would this business be your sole income source?'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaSoleIncomeSource" id="preferredAreaSoleIncomeSource" required>
                        <option selected disabled value="<?php echo pll__('Please Select One'); ?>"><?php echo pll__('Please Select One'); ?></option>
                        <option value="<?php echo pll__( 'Yes' ); ?>"><?php echo pll__( 'Yes' ); ?></option>
                        <option value="<?php echo pll__( 'If no, please explain' ); ?>"><?php echo pll__( 'If no, please explain' ); ?></option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-12 mb-3 d-none">
                    <label class="custom-label" for="preferredAreaSoleIncomeSourceExplain"><?php echo pll__('Explain'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="preferredAreaSoleIncomeSourceExplain" id="preferredAreaSoleIncomeSourceExplain" minlength="3" maxlength="150"/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaNewFranchiseeBusinessReason"><?php echo pll__('Why do you want to be a franchisee instead of starting a non-franchised business?'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="preferredAreaNewFranchiseeBusinessReason" id="preferredAreaNewFranchiseeBusinessReason" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaSkillsExperienceFranchisee"><?php echo pll__('What skills/experience do you have that will help you be successful in this business?'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="preferredAreaSkillsExperienceFranchisee" id="preferredAreaSkillsExperienceFranchisee" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaPersonalGoals"><?php echo pll__('Why do you think this franchise will enable you to reach your personal goals?'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="preferredAreaPersonalGoals" id="preferredAreaPersonalGoals" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaLawsuit"><?php echo pll__('Are you now, or have you ever been party to any lawsuit - either as defendant or plaintiff?'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaLawsuit" id="preferredAreaLawsuit" required>
                        <option selected disabled value="<?php echo pll__('Please Select One'); ?>"><?php echo pll__('Please Select One'); ?></option>
                        <option value="<?php echo pll__( 'No' ); ?>"><?php echo pll__( 'No' ); ?></option>
                        <option value="<?php echo pll__( 'Yes, provide more information:' ); ?>"><?php echo pll__( 'Yes, provide more information:' ); ?></option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-12 mb-3 d-none">
                    <label class="custom-label" for="preferredAreaLawsuitMoreInfo"><?php echo pll__('Provide more information'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="preferredAreaLawsuitMoreInfo" id="preferredAreaLawsuitMoreInfo" minlength="3" maxlength="150"/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaConvicted"><?php echo pll__('Have you ever been convicted of a felony?'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaConvicted" id="preferredAreaConvicted" required>
                        <option selected disabled value="<?php echo pll__('Please Select One'); ?>"><?php echo pll__('Please Select One'); ?></option>
                        <option value="<?php echo pll__( 'No' ); ?>"><?php echo pll__( 'No' ); ?></option>
                        <option value="<?php echo pll__( 'Yes, explain:' ); ?>"><?php echo pll__( 'Yes, explain:' ); ?></option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-12 mb-3 d-none">
                    <label class="custom-label" for="preferredAreaConvictedExplain"><?php echo pll__('Explain'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="preferredAreaConvictedExplain" id="preferredAreaConvictedExplain" minlength="3" maxlength="150"/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="preferredAreaBankruptcy"><?php echo pll__('Have you ever filed for bankruptcy?'); ?> <span class="required-label">*</span></label>
                    <select class="custom-select" name="preferredAreaBankruptcy" id="preferredAreaBankruptcy" required>
                        <option selected disabled value=""><?php echo pll__('Have you ever filed for bankruptcy?'); ?></option>
                        <option value="<?php echo pll__( 'No' ); ?>"><?php echo pll__( 'No' ); ?></option>
                        <option value="<?php echo pll__( 'Yes' ); ?>"><?php echo pll__( 'Yes' ); ?></option>
                    </select>
                    <div class="invalid-feedback">
                        <?php echo pll__( 'Field is required.' ); ?>
                    </div>
                    <div class="valid-feedback">
                        <?php echo pll__('Looks good!'); ?>
                    </div>
                </div>

                <div class="col-md-6 mb-4 d-none">
                    <label class="custom-label" for="preferredAreaBankruptcyDateFiled"><?php echo pll__('Date filed'); ?> <span class="required-label">*</span></label>
                    <input type="date" class="form-control" name="preferredAreaBankruptcyDateFiled" id="preferredAreaBankruptcyDateFiled"/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-6 mb-4 d-none">
                    <label class="custom-label" for="preferredAreaBankruptcyDateDischarged"><?php echo pll__('Date discharged'); ?> <span class="required-label">*</span></label>
                    <input type="date" class="form-control" name="preferredAreaBankruptcyDateDischarged" id="preferredAreaBankruptcyDateDischarged"/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

            </div>

            <!-- Capital Available to Invest -->
            <div class="row">
                <div class="col-12 col-md-12 header mt-4 mb-4">
                    <h3 class="mb-0 title text-primary"><?php echo pll__('Capital Available to Invest'); ?></h3>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="capitalCash"><?php echo pll__('Cash'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="capitalCash" id="capitalCash" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="capitalStocks"><?php echo pll__('Stocks/Bonds/mutual funds'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="capitalStocks" id="capitalStocks" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="capitalRRSP"><?php echo pll__('RRSP/TFSA/pension funds'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="capitalRRSP" id="capitalRRSP" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="capitalMarketValue"><?php echo pll__('Market value of real estate you own'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="capitalMarketValue" id="capitalMarketValue" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="capitalValueAssets"><?php echo pll__('Value of other assets'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="capitalValueAssets" id="capitalValueAssets" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="capitalCurrentBalance"><?php echo pll__('Current balance(s) on loans secured by real estate'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="capitalCurrentBalance" id="capitalCurrentBalance" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>

                <div class="col-md-12 mb-3">
                    <label class="custom-label" for="capitalOtherDebts"><?php echo pll__('Other debts'); ?> <span class="required-label">*</span></label>
                    <input type="text" class="form-control" name="capitalOtherDebts" id="capitalOtherDebts" minlength="3" maxlength="150" required/>
                    <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                    <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                </div>
            </div>

            <!-- Stay Informed -->
            <div class="row">
                <div class="col-12 col-md-12 header mt-4 mb-4">
                    <h3 class="mb-0 title text-primary"><?php echo pll__('Stay Informed'); ?></h3>
                </div>

                <div class="col-md-12 custom-control custom-checkbox mb-3 pl-5">
                    <input type="checkbox" class="custom-control-input" name="checkEmailMoreInfo" id="checkEmailMoreInfo">
                    <label class="custom-control-label" for="checkEmailMoreInfo"><?php echo pll__('It is OK for us to email you with more information'); ?></label>
                </div>

                <div class="col-md-12 custom-control custom-checkbox mb-3 pl-5">
                    <input type="checkbox" class="custom-control-input" name="checkCallMoreInfo" id="checkCallMoreInfo">
                    <label class="custom-control-label" for="checkCallMoreInfo"><?php echo pll__('It is OK for us to call regarding this opportunity'); ?></label>
                </div>

                <div class="col-md-12 custom-control custom-checkbox mb-3 pl-5">
                    <input type="checkbox" class="custom-control-input" name="checkTextMoreInfo" id="checkTextMoreInfo">
                    <label class="custom-control-label" for="checkTextMoreInfo"><?php echo pll__('It is OK for us text you with updates'); ?></label>
                </div>

                <div class="col-12 mt-2 mb-5">
                    <button class="button-primary-uppercase row-button" id="multi-checkboxes-btn"><?php echo pll__('Select All'); ?></button>
                </div>
            </div>

            <div class="row d-none">
                <div class="col-md-6 mb-3">
                    <label class="connect-with-us-container__label" for="page_slug">Page Slug</label>
                    <input type="text" class="form-control connect-with-us-container__input" name="page_slug" value="<?php echo $page_slug; ?>" required>
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

            <!-- Submit -->
            <div class="row">
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
            <h5 class="modal-title" id="exampleModalScrollableTitle"><?php echo pll__('Disclaimer'); ?></h5>
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