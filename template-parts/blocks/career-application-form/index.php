<section class="career-application">
    <div class="container">
        <div class="row career-description-container">
            <div class="col-12 col-md-12">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                     in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                     in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                     in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt 
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                     in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                      cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="row">

            <div class="col-12 col-md-12 header">
                <h3 class="title text-primary"><?php echo pll__('Personal Information'); ?></h3>
            </div>
            <div class="col-12 form">
                <div class="row">
                    <div class="col-md-4 col-lg-3 mb-3">
                        <label class="custom-label" for="nameInput"><?php echo pll__('Name'); ?></label> 
                        <input type="text" class="form-control" name="name" id="nameInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('Name Placeholder'); ?>" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-lg-3 mb-3">
                        <label class="custom-label" for="emailAddressInput"><?php echo pll__('E-mail Address'); ?></label>
                        <input type="email" class="form-control" name="emailAddress" id="emailAddressInput" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-zA-Z]{2,4}" placeholder="<?php echo pll__('Text goes here'); ?>" />
                    </div>

                    <div class="col-md-4 col-lg-3 mb-3">
                        <label class="custom-label" for="homePhoneInput"><?php echo pll__('Home Phone'); ?></label>
                        <input type="tel" class="form-control" name="homePhone" id="homePhonesInput" minlength="8" maxlength="20" placeholder="<?php echo pll__('Text goes here'); ?>" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-lg-3 mb-3">
                        <label class="custom-label" for="buildingAddress"><?php echo pll__('Address'); ?></label>
                        <input type="text" class="form-control" name="buildingAddress" id="buildingAddressInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('Number of street and street name here'); ?>" />
                    </div>
                    <div class="col-md-4 col-lg-3 mb-3">
                        <label class="custom-label" for="city"><?php echo pll__('City'); ?></label>
                        <input type="text" class="form-control" name="city" id="cityInput" minlength="3" maxlength="50" placeholder="<?php echo pll__('Text goes here'); ?>" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-lg-3 mb-3">
                        <label class="custom-label" for="province">Province</label>
                        <select class="custom-select" name="province" id="provinceInput">
                            <option value="">Text goes here</option>
                            <option value="test1">Test 1</option>
                            <option value="test2">Test 2</option>
                        </select>
                    </div>
                    <div class="col-md-4 col-lg-3 mb-3">
                        <label class="custom-label" for="postalCode"><?php echo pll__('Postal Code'); ?></label>
                        <input type="text" class="form-control" name="postalCode" id="postalCodeInput" minlength="4" maxlength="9" placeholder="<?php echo pll__('e.g l4ylE4'); ?>" />
                    </div>                
                </div>
            </div>


            <div class="col-12 col-md-12 header">
                <h3 class="title text-primary">EXPERIENCE</h3>
            </div>
            <div class="col-12 form">
                <div id="contentExperience">
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label class="custom-label" for="companyInput">Company</label>
                            <input type="text" class="form-control" name="company" id="companyInput" minlength="3" maxlength="50" placeholder="Text goes here" />
                        </div>

                        <div class="col-12 col-md-6 mb-3">
                            <label class="custom-label" for="durationInput">Duration</label>
                            <input type="text" class="form-control" name="duration" id="durationInput" placeholder="Text goes here" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 icon-button">
                        <button id="addExperienceBtn"></button>
                        <label for="">Add more</label>
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
                        <label class="custom-label" for="spokenInput"><?php echo pll__( 'Spoken' ); ?></label>
                        <select class="custom-select" name="spoken" id="spokenInput">
                            <option selected disabled value=""><?php echo pll__('Choose...'); ?></option>
                            <option value="<?php echo pll__('French'); ?>"><?php echo pll__('French'); ?></option>
                            <option value="<?php echo pll__('English'); ?>"><?php echo pll__('English'); ?></option>
                        </select>
                    </div>

                    <div class="col-12 col-md-6 mb-3">
                        <label class="custom-label" for="writtenInput"><?php echo pll__('Written'); ?></label>
                        <select class="custom-select" name="written" id="writtenInput">
                            <option selected disabled value=""><?php echo pll__('Choose...'); ?></option>
                            <option value="<?php echo pll__('French'); ?>"><?php echo pll__('French'); ?></option>
                            <option value="<?php echo pll__('English'); ?>"><?php echo pll__('English'); ?></option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-12 header">
                <h3 class="title text-primary">ATTACHMENTS</h3>
            </div>
            <div class="col-12 col-md-12 form">
                <div class="form-file">
                    <label><?php echo pll__('Resume'); ?></label>
                    <label for="file" class="file">
                        Upload file
                        <input type="file" id="file" name="file" accept=".doc,.docx,.pdf" class="hidden" />
                    </label>
                </div>
                <div class="form-file">
                    <label>Additional documents</label>
                    <label for="fileAdditional" class="file">
                        Upload file
                        <input type="file" id="fileAdditional" name="fileAdditional" accept=".doc,.docx,.pdf" class="hidden" />
                    </label>
                </div>
            </div>
            <div class="col-12 col-md-12 footer-description">
                <p>
                    Disclaimer text goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
                    fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
                    qui officia deserunt mollit anim id est laborum.
                </p>
                <button class="button-secondary">Submit your application</button>
            </div>

        </div>
    </div>
</section>