<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package modern
 */

get_header();
?>

<section id="hero-text-block-block_5fcb2a699adfd" class="hero-text-block hero-text-block align-full">
    <div class="container py-4">
        <div class="row py-md-2">
            <div class="col-12 col-md-9 col-lg-10">
                <h4 class="subtitle_bar pt-3"><?php echo pll__('CAREERS/OPERATIONS'); ?></h4>
                <h2 class="the_title_hero"><?php echo the_title(); ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="career-application">
    <div class="container">
        <div class="row career-description-container">
            <div class="col-12 col-md-12">
                <?php echo the_content(); ?>
            </div>
        </div>
        <form class="needs-validation" method="POST" action="<?php echo get_template_directory_uri(); ?>/inc/forms/career_opportunity.php" enctype="multipart/form-data" novalidate>
            <div class="row">
                <div class="col-12 col-md-12 header">
                    <h3 class="title text-primary"><?php echo pll__('Personal Information'); ?></h3>
                </div>
                <div class="col-12 form">

                    <div class="row d-none">
                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="jobIdInput">Job ID</label>
                            <input type="text" class="form-control" name="jobID" id="jobIdInput" minlength="3" maxlength="50" placeholder="" value="<?php echo get_field('job_id', get_the_ID()); ?>"/>
                        </div>
                    </div>

                    <div class="row d-none">
                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="jobLocationInput">Job Location</label>
                            <input type="text" class="form-control" name="jobLocation" id="jobLocationInput" minlength="3" maxlength="50" placeholder="" value="<?php echo get_field('job_location', get_the_ID()); ?>"/>
                        </div>
                    </div>

                    <div class="row d-none">
                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="jobNameInput">Job Name</label>
                            <input type="text" class="form-control" name="jobName" id="jobNameInput" minlength="3" maxlength="50" placeholder="" value="<?php echo the_title(); ?>"/>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="nameInput"><?php echo pll__('Name'); ?></label>
                            <input type="text" class="form-control" name="name" id="nameInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('Name Placeholder'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="emailAddressInput"><?php echo pll__('E-mail Address'); ?></label>
                            <input type="email" class="form-control" name="emailAddress" id="emailAddressInput" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" placeholder="<?php echo pll__('E-mail Address Career Form Placeholder'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>

                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="homePhoneInput"><?php echo pll__('Home Phone'); ?></label>
                            <input type="tel" class="form-control" name="homePhone" id="homePhonesInput" minlength="8" maxlength="20" placeholder="<?php echo pll__('Home Phone Placeholder'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="buildingAddress"><?php echo pll__('Address'); ?></label>
                            <input type="text" class="form-control" name="buildingAddress" id="buildingAddressInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('Address Placeholder'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                        <div class="col-md-4 col-lg-3 mb-3">
                            <label class="custom-label" for="city"><?php echo pll__('City'); ?></label>
                            <input type="text" class="form-control" name="city" id="cityInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('City Placeholder'); ?>" required/>
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
                            <label class="custom-label" for="postalCode"><?php echo pll__('Postal Code'); ?></label>
                            <input type="text" class="form-control" name="postalCode" id="postalCodeInput" minlength="4" maxlength="9" placeholder="<?php echo pll__('e.g l4ylE4'); ?>" required/>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>                
                    </div>
                </div>


                <div class="col-12 col-md-12 header">
                    <h3 class="title text-primary"><?php echo pll__('EXPERIENCE'); ?></h3>
                </div>
                <div class="col-12 form">
                    <div id="contentExperience">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label class="custom-label" for="companyInput"><?php echo pll__('Company'); ?></label>
                                <input type="text" class="form-control company" id="companyInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('Company Placeholder'); ?>" required/>
                                <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                                <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                            </div>

                            <div class="col-12 col-md-6 mb-3">
                                <label class="custom-label" for="durationInput"><?php echo pll__('Duration'); ?></label>
                                <input type="text" class="form-control duration" id="durationInput" placeholder="<?php echo pll__('Duration Placeholder'); ?>" required/>
                                <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                                <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 icon-button">
                            <button id="addExperienceBtn"></button>
                            <label for=""><?php echo pll__('Add more'); ?></label>
                        </div>
                    </div>
                    <div class="row d-none">
                        <div class="col-12 col-md-6 mb-3">
                            <label class="custom-label" for="allExperiences">All Expriences</label>
                            <textarea class="form-control" id="allExperiences" rows="3" name="allExperiencesInput"></textarea>
                            <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                            <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12 header">
                    <h3 class="title text-primary"><?php echo pll__('Languages'); ?></h3>
                    <p class="fs-14 fw-400 fs-italic mb-0"><?php echo pll__('Click all that apply.'); ?></p>
                </div>
                <div class="col-12 form">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label class="custom-label" for="spokenInput"><?php echo pll__('Spoken'); ?></label>
                            <div class="form-check">
                                <input class="form-check-input checkbox-spoken" type="checkbox" value="" id="spokenCheckEnglish">
                                <label class="form-check-label" for="spokenCheckEnglish">
                                    <?php echo pll__('English'); ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input checkbox-spoken" type="checkbox" value="" id="spokenCheckFrench">
                                <label class="form-check-label" for="spokenCheckFrench">
                                    <?php echo pll__('French'); ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input checkbox-spoken" type="checkbox" value="" id="spokenCheckSpanish">
                                <label class="form-check-label" for="spokenCheckSpanish">
                                    <?php echo pll__('Spanish'); ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="spokenCheckOther">
                                <label class="form-check-label" for="spokenCheckOther">
                                    <?php echo pll__('Other'); ?>
                                </label>
                            </div>
                            <div id="" class="mt-3 d-none">
                                <textarea class="form-control" rows="3" id="spoken" name="spoken" minlength="1" maxlength="250"></textarea>
                            </div>                            
                            <div id="otherInputSpoken" class="mt-3 d-none">
                                <label class="custom-label" for="otherSpokenText"><?php echo pll__('Other'); ?></label>
                                <textarea class="form-control" rows="3" id="otherSpokenText" name="otherSpoken" placeholder="<?php echo pll__('Please specify'); ?>" minlength="1" maxlength="250"></textarea>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 mb-3">
                            <label class="custom-label" for="writtenInput"><?php echo pll__('Written'); ?></label>
                            <div class="form-check">
                                <input class="form-check-input checkbox-written" type="checkbox" value="" id="writtenCheckEnglish">
                                <label class="form-check-label" for="writtenCheckEnglish">
                                    <?php echo pll__('English'); ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input checkbox-written" type="checkbox" value="" id="writtenCheckFrench">
                                <label class="form-check-label" for="writtenCheckFrench">
                                    <?php echo pll__('French'); ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input checkbox-written" type="checkbox" value="" id="writtenCheckSpanish">
                                <label class="form-check-label" for="writtenCheckSpanish">
                                    <?php echo pll__('Spanish'); ?>
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="writtenCheckOther">
                                <label class="form-check-label" for="writtenCheckOther">
                                    <?php echo pll__('Other'); ?>
                                </label>
                            </div>
                            <div id="" class="mt-3 d-none">
                                <textarea class="form-control" rows="3" id="written" name="written" minlength="1" maxlength="250"></textarea>
                            </div> 
                            <div id="otherInputWritten" class="mt-3 d-none">
                                <label class="custom-label" for="otherWrittenText"><?php echo pll__('Other'); ?></label>
                                <textarea class="form-control" rows="3" id="otherWrittenText" name="otherWritten" placeholder="<?php echo pll__('Please specify'); ?>" minlength="1" maxlength="250"></textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-12 header">
                    <h3 class="title text-primary"><?php echo pll__('ATTACHMENTS'); ?></h3>
                </div>
                <div class="col-12 col-md-12 form">
                    <div class="form-file upload-file">
                        <label><?php echo pll__('Resume (Max file 2MB)'); ?></label>
                        <div class="content-file">
                            <label for="file" class="file">
                                <?php echo pll__('Upload file'); ?>
                                <input type="file" id="file" name="resume_file" class="hidden" required/>
                                <div class="invalid-feedback"><?php echo pll__('Field is required.'); ?></div>
                                <div class="valid-feedback"><?php echo pll__('Looks good!'); ?></div>
                            </label>
                            <div class="description"></div>
                        </div>
                    </div>
                    <div class="form-file upload-file">
                        <label><?php echo pll__('Additional documents (Max file 2MB)'); ?></label>
                        <div class="content-file">
                            <label for="fileAdditional" class="file">
                                <?php echo pll__('Upload file'); ?>
                                <input type="file" id="fileAdditional" name="file_additional" class="hidden"/>
                            </label>
                            <div class="description"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 footer-description">
                    <p class="font-italic">
                        <?php echo pll__('Disclaimer Careers Form'); ?>
                    </p>
                    <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                        <label class="custom-control-label" for="customControlValidation1"><?php echo pll__('I have read and understood the terms and conditions'); ?> <span class="required-label">*</span></label>
                        <div class="invalid-feedback">
                            <?php echo pll__( 'Field is required.' ); ?>
                        </div>
                        <div class="valid-feedback">
                            <?php echo pll__('Looks good!'); ?>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 d-flex justify-content-start align-items-center">
                            <div class="g-recaptcha" data-sitekey="6LefesAaAAAAAO8f8HO090hui6H-Fm3UNwq0B85r"></div>
                        </div>
                    </div>
                    <button class="button-secondary" type="submit" name="submit"><?php echo pll__('Submit your application'); ?></button>
                </div>

            </div>
        </form>
    </div>
</section>

<?php
get_footer();