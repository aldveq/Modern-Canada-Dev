<?php

    include '../../../../../wp-load.php';

    // Fields
    $firstName = isset($_POST['firstName']) && !empty($_POST['firstName']) ? $_POST['firstName'] : 'N/A';
    $lastName = isset($_POST['lastName']) && !empty($_POST['lastName']) ? $_POST['lastName'] : 'N/A';
    $phone = isset($_POST['phone']) && !empty($_POST['phone']) ? $_POST['phone'] : 'N/A';
    $emailAddress = isset($_POST['emailAddress']) && !empty($_POST['emailAddress']) ? $_POST['emailAddress'] : 'N/A';
    $homeAddress = isset($_POST['homeAddress']) && !empty($_POST['homeAddress']) ? $_POST['homeAddress'] : 'N/A';
    $city = isset($_POST['city']) && !empty($_POST['city']) ? $_POST['city'] : 'N/A';
    $province_list = isset($_POST['province_list']) && !empty($_POST['province_list']) ? $_POST['province_list'] : 'N/A';
    $postalCode = isset($_POST['postalCode']) && !empty($_POST['postalCode']) ? $_POST['postalCode'] : 'N/A';
    $dateOfbirth = isset($_POST['dateOfbirth']) && !empty($_POST['dateOfbirth']) ? $_POST['dateOfbirth'] : 'N/A';
    $preferredArea = isset($_POST['preferredArea']) && !empty($_POST['preferredArea']) ? $_POST['preferredArea'] : 'N/A';
    $preferredAreaCity = isset($_POST['preferredAreaCity']) && !empty($_POST['preferredAreaCity']) ? $_POST['preferredAreaCity'] : 'N/A';
    $preferredAreaProvince = isset($_POST['preferredAreaProvince']) && !empty($_POST['preferredAreaProvince']) ? $_POST['preferredAreaProvince'] : 'N/A';
    $preferredAreaHowDidYouHearAboutFO = isset($_POST['preferredAreaHowDidYouHearAboutFO']) && !empty($_POST['preferredAreaHowDidYouHearAboutFO']) ? $_POST['preferredAreaHowDidYouHearAboutFO'] : 'N/A';
    $preferredAreaLookingtoStart = isset($_POST['preferredAreaLookingtoStart']) && !empty($_POST['preferredAreaLookingtoStart']) ? $_POST['preferredAreaLookingtoStart'] : 'N/A';
    $preferredAreaPreviousFranchiseExperience = isset($_POST['preferredAreaPreviousFranchiseExperience']) && !empty($_POST['preferredAreaPreviousFranchiseExperience']) ? $_POST['preferredAreaPreviousFranchiseExperience'] : 'N/A';
    $preferredAreaAnticipatedOwnerInvolvement = isset($_POST['preferredAreaAnticipatedOwnerInvolvement']) && !empty($_POST['preferredAreaAnticipatedOwnerInvolvement']) ? $_POST['preferredAreaAnticipatedOwnerInvolvement'] : 'N/A';
    $preferredAreaCurrentlyEmployed = isset($_POST['preferredAreaCurrentlyEmployed']) && !empty($_POST['preferredAreaCurrentlyEmployed']) ? $_POST['preferredAreaCurrentlyEmployed'] : 'N/A';
    $preferredAreaCurrentOccupation = isset($_POST['preferredAreaCurrentOccupation']) && !empty($_POST['preferredAreaCurrentOccupation']) ? $_POST['preferredAreaCurrentOccupation'] : 'N/A';
    $preferredAreaRecentJob = isset($_POST['preferredAreaRecentJob']) && !empty($_POST['preferredAreaRecentJob']) ? $_POST['preferredAreaRecentJob'] : 'N/A';
    $preferredAreaOwnedBusiness = isset($_POST['preferredAreaOwnedBusiness']) && !empty($_POST['preferredAreaOwnedBusiness']) ? $_POST['preferredAreaOwnedBusiness'] : 'N/A';
    $preferredAreaBusinessPartners = isset($_POST['preferredAreaBusinessPartners']) && !empty($_POST['preferredAreaBusinessPartners']) ? $_POST['preferredAreaBusinessPartners'] : 'N/A';
    $preferredAreaRelativeInBusiness = isset($_POST['preferredAreaRelativeInBusiness']) && !empty($_POST['preferredAreaRelativeInBusiness']) ? $_POST['preferredAreaRelativeInBusiness'] : 'N/A';
    $preferredAreaRelativeInBusinessDetails = isset($_POST['preferredAreaRelativeInBusinessDetails']) && !empty($_POST['preferredAreaRelativeInBusinessDetails']) ? $_POST['preferredAreaRelativeInBusinessDetails'] : 'N/A';
    $preferredAreaSoleIncomeSource = isset($_POST['preferredAreaSoleIncomeSource']) && !empty($_POST['preferredAreaSoleIncomeSource']) ? $_POST['preferredAreaSoleIncomeSource'] : 'N/A';
    $preferredAreaSoleIncomeSourceExplain = isset($_POST['preferredAreaSoleIncomeSourceExplain']) && !empty($_POST['preferredAreaSoleIncomeSourceExplain']) ? $_POST['preferredAreaSoleIncomeSourceExplain'] : 'N/A';
    $preferredAreaNewFranchiseeBusinessReason = isset($_POST['preferredAreaNewFranchiseeBusinessReason']) && !empty($_POST['preferredAreaNewFranchiseeBusinessReason']) ? $_POST['preferredAreaNewFranchiseeBusinessReason'] : 'N/A';
    $preferredAreaSkillsExperienceFranchisee = isset($_POST['preferredAreaSkillsExperienceFranchisee']) && !empty($_POST['preferredAreaSkillsExperienceFranchisee']) ? $_POST['preferredAreaSkillsExperienceFranchisee'] : 'N/A';
    $preferredAreaPersonalGoals = isset($_POST['preferredAreaPersonalGoals']) && !empty($_POST['preferredAreaPersonalGoals']) ? $_POST['preferredAreaPersonalGoals'] : 'N/A';
    $preferredAreaLawsuit = isset($_POST['preferredAreaLawsuit']) && !empty($_POST['preferredAreaLawsuit']) ? $_POST['preferredAreaLawsuit'] : 'N/A';
    $preferredAreaLawsuitMoreInfo = isset($_POST['preferredAreaLawsuitMoreInfo']) && !empty($_POST['preferredAreaLawsuitMoreInfo']) ? $_POST['preferredAreaLawsuitMoreInfo'] : 'N/A';
    $preferredAreaConvicted = isset($_POST['preferredAreaConvicted']) && !empty($_POST['preferredAreaConvicted']) ? $_POST['preferredAreaConvicted'] : 'N/A';
    $preferredAreaConvictedExplain = isset($_POST['preferredAreaConvictedExplain']) && !empty($_POST['preferredAreaConvictedExplain']) ? $_POST['preferredAreaConvictedExplain'] : 'N/A';
    $preferredAreaBankruptcy = isset($_POST['preferredAreaBankruptcy']) && !empty($_POST['preferredAreaBankruptcy']) ? $_POST['preferredAreaBankruptcy'] : 'N/A';
    $preferredAreaBankruptcyDateFiled = isset($_POST['preferredAreaBankruptcyDateFiled']) && !empty($_POST['preferredAreaBankruptcyDateFiled']) ? $_POST['preferredAreaBankruptcyDateFiled'] : 'N/A';
    $preferredAreaBankruptcyDateDischarged = isset($_POST['preferredAreaBankruptcyDateDischarged']) && !empty($_POST['preferredAreaBankruptcyDateDischarged']) ? $_POST['preferredAreaBankruptcyDateDischarged'] : 'N/A';
    $capitalCash = isset($_POST['capitalCash']) && !empty($_POST['capitalCash']) ? $_POST['capitalCash'] : 'N/A';
    $capitalStocks = isset($_POST['capitalStocks']) && !empty($_POST['capitalStocks']) ? $_POST['capitalStocks'] : 'N/A';
    $capitalRRSP = isset($_POST['capitalRRSP']) && !empty($_POST['capitalRRSP']) ? $_POST['capitalRRSP'] : 'N/A';
    $capitalMarketValue = isset($_POST['capitalMarketValue']) && !empty($_POST['capitalMarketValue']) ? $_POST['capitalMarketValue'] : 'N/A';
    $capitalValueAssets = isset($_POST['capitalValueAssets']) && !empty($_POST['capitalValueAssets']) ? $_POST['capitalValueAssets'] : 'N/A';
    $capitalCurrentBalance = isset($_POST['capitalCurrentBalance']) && !empty($_POST['capitalCurrentBalance']) ? $_POST['capitalCurrentBalance'] : 'N/A';
    $capitalOtherDebts = isset($_POST['capitalOtherDebts']) && !empty($_POST['capitalOtherDebts']) ? $_POST['capitalOtherDebts'] : 'N/A';
    $checkEmailMoreInfo = isset($_POST['checkEmailMoreInfo']) && !empty($_POST['checkEmailMoreInfo']) ? $_POST['checkEmailMoreInfo'] : 'N/A';
    $checkCallMoreInfo = isset($_POST['checkCallMoreInfo']) && !empty($_POST['checkCallMoreInfo']) ? $_POST['checkCallMoreInfo'] : 'N/A';
    $checkTextMoreInfo = isset($_POST['checkTextMoreInfo']) && !empty($_POST['checkTextMoreInfo']) ? $_POST['checkTextMoreInfo'] : 'N/A';
    $page_slug = isset($_POST['page_slug']) && !empty($_POST['page_slug']) ? $_POST['page_slug'] : 'N/A';

    $client_message = 'First Name: '.$firstName."\r\n";
    $client_message .= 'Last Name: '.$lastName."\r\n";
    $client_message .= 'Cell Phone: '.$phone."\r\n";
    $client_message .= 'Email: '.$emailAddress."\r\n";
    $client_message .= 'Home Address: '.$homeAddress."\r\n";
    $client_message .= 'City: '.$city."\r\n";
    $client_message .= 'Province: '.$province_list."\r\n";
    $client_message .= 'Postal Code: '.$postalCode."\r\n";
    $client_message .= 'Date of birth: '.$dateOfbirth."\r\n";
    $client_message .= 'Preferred Area: '.$preferredArea."\r\n";
    $client_message .= 'Preferred City: '.$preferredAreaCity."\r\n";
    $client_message .= 'Preferred Province: '.$preferredAreaProvince."\r\n";
    $client_message .= 'How did you hear about our franchising opportunity?: '.$preferredAreaHowDidYouHearAboutFO."\r\n";
    $client_message .= 'Looking to start: '.$preferredAreaLookingtoStart."\r\n";
    $client_message .= 'Previous Franchise Experience: '.$preferredAreaPreviousFranchiseExperience."\r\n";
    $client_message .= 'Anticipated owner’s involvement: '.$preferredAreaAnticipatedOwnerInvolvement."\r\n";
    $client_message .= 'Are you currently employed?: '.$preferredAreaCurrentlyEmployed."\r\n";
    $client_message .= 'What is your current occupation?: '.$preferredAreaCurrentOccupation."\r\n";
    $client_message .= 'What is/was your single most favorite attribute of your current/most recent job?: '.$preferredAreaRecentJob."\r\n";
    $client_message .= 'Have you ever owned a business?: '.$preferredAreaOwnedBusiness."\r\n";
    $client_message .= 'Will you have business partners?: '.$preferredAreaBusinessPartners."\r\n";
    $client_message .= 'Will your spouse/relative be a partner or employee in the business?: '.$preferredAreaRelativeInBusiness."\r\n";
    $client_message .= 'Details: '.$preferredAreaRelativeInBusinessDetails."\r\n";
    $client_message .= 'Would this business be your sole income source?: '.$preferredAreaSoleIncomeSource."\r\n";
    $client_message .= 'Explain: '.$preferredAreaSoleIncomeSourceExplain."\r\n";
    $client_message .= 'Why do you want to be a franchisee instead of starting a non-franchised business?: '.$preferredAreaNewFranchiseeBusinessReason."\r\n";
    $client_message .= 'What skills/experience do you have that will help you be successful in this business?: '.$preferredAreaSkillsExperienceFranchisee."\r\n";
    $client_message .= 'Why do you think this franchise will enable you to reach your personal goals?: '.$preferredAreaPersonalGoals."\r\n";
    $client_message .= 'Are you now, or have you ever been party to any lawsuit – either as defendant or plaintiff?: '.$preferredAreaLawsuit."\r\n";
    $client_message .= 'Provide more information: '.$preferredAreaLawsuitMoreInfo."\r\n";
    $client_message .= 'Have you ever been convicted of a felony?: '.$preferredAreaConvicted."\r\n";
    $client_message .= 'Explain Felony: '.$preferredAreaConvictedExplain."\r\n";
    $client_message .= 'Have you ever filed for bankruptcy?: '.$preferredAreaBankruptcy."\r\n";
    $client_message .= 'Date filed: '.$preferredAreaBankruptcyDateFiled."\r\n";
    $client_message .= 'Date discharged: '.$preferredAreaBankruptcyDateDischarged."\r\n";
    $client_message .= 'Cash: '.$capitalCash."\r\n";
    $client_message .= 'Stocks/Bonds/mutual funds: '.$capitalStocks."\r\n";
    $client_message .= 'RRSP/TFSA/pension funds: '.$capitalRRSP."\r\n";
    $client_message .= 'Market value of real estate you own: '.$capitalMarketValue."\r\n";
    $client_message .= 'Value of other assets: '.$capitalValueAssets."\r\n";
    $client_message .= 'Current balance(s) on loans secured by real estate: '.$capitalCurrentBalance."\r\n";
    $client_message .= 'Other debts: '.$capitalOtherDebts."\r\n";
    $client_message .= 'It is OK for us to email you with more information: '.$checkEmailMoreInfo."\r\n";
    $client_message .= 'It is OK for us to call regarding this opportunity: '.$checkCallMoreInfo."\r\n";
    $client_message .= 'It is OK for us text you with updates: '.$checkTextMoreInfo."\r\n";
    $client_message .= 'Origin: '.$page_slug.'';

    // Redirections
    $general_french_thank_you_age_link = get_field('general_french_thank_you_page', 'option');
    $general_english_thank_you_age_link = get_field('general_english_thank_you_page', 'option');
    $error_french_page = get_field('error_french_page','option');
    $error_english_page = get_field('error_english_page','option');

    $redirect_destination = (pll_current_language('slug') == 'fr') ? $general_french_thank_you_age_link['url'] : $general_english_thank_you_age_link['url'];
    $redirect_destination_error = (pll_current_language('slug') == 'fr') ? $error_french_page['url'] : $error_english_page['url'];


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/plain' . "\r\n";

    if ( ! function_exists( 'wp_handle_upload' ) ) {
        require_once( '../../../../../wp-config.php' );
        require_once( '../../../../../wp-admin/includes/file.php' );
    }

    $uploaded_resume_file = $_FILES['resume_file'];

    $upload_resume_file_overrides = array(
        'test_form' => false
    );

    $uploaded_resume_file_wp_media_lib = wp_handle_upload( $uploaded_resume_file, $upload_resume_file_overrides );

    if ( isset( $uploaded_resume_file_wp_media_lib['error'] ) ): // Delivery without attachment

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
            $secret_key = '6LefesAaAAAAAIXSr2gsTeVTo2MXRDo44dn2ebIV';
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
            $response_data = json_decode($verify_response);

            if($response_data->success):
                // Delivery Configuration
                $recipients = get_field('modern_tf_rfc_form_recipients', 'option');

                $modern_tf_rfc_form_group = get_field('modern_tf_rfc_form_subject_text_group', 'option');
                $modern_tf_rfc_form_subject_text_in_english = $modern_tf_rfc_form_group['modern_tf_rfc_form_subject_text_in_english'];
                $modern_tf_rfc_form_subject_text_in_french = $modern_tf_rfc_form_group['modern_tf_rfc_form_subject_text_in_french'];

                $subject = (pll_current_language('slug') == 'fr') ? $modern_tf_rfc_form_subject_text_in_french : $modern_tf_rfc_form_subject_text_in_english;

                if(wp_mail($recipients, $subject, $client_message, $headers)):
                    header("Location:$redirect_destination");
                else:
                    header("Location:$redirect_destination_error");
                endif;
            else:
                header("Location:$redirect_destination_error");
            endif;

        else:
            header("Location:$redirect_destination_error");
        endif;

    elseif (  $uploaded_resume_file_wp_media_lib && ! isset( $uploaded_resume_file_wp_media_lib['error'] )  ): // Delivery with attachment

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
            $secret_key = '6LefesAaAAAAAIXSr2gsTeVTo2MXRDo44dn2ebIV';
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
            $response_data = json_decode($verify_response);

            if($response_data->success):

                $attachment_resume_file_upload_path = get_attachment_file_upload_path($uploaded_resume_file_wp_media_lib['url']);

                // Delivery Configuration
                $recipients = get_field('modern_tf_rfc_form_recipients', 'option');

                $modern_tf_rfc_form_group = get_field('modern_tf_rfc_form_subject_text_group', 'option');
                $modern_tf_rfc_form_subject_text_in_english = $modern_tf_rfc_form_group['modern_tf_rfc_form_subject_text_in_english'];
                $modern_tf_rfc_form_subject_text_in_french = $modern_tf_rfc_form_group['modern_tf_rfc_form_subject_text_in_french'];

                $subject = (pll_current_language('slug') == 'fr') ? $modern_tf_rfc_form_subject_text_in_french : $modern_tf_rfc_form_subject_text_in_english;
                $mail_attachment = array( WP_CONTENT_DIR . $attachment_resume_file_upload_path);

                if(wp_mail($recipients, $subject, $client_message, $headers, $mail_attachment)):
                    wp_delete_file( WP_CONTENT_DIR . $attachment_resume_file_upload_path);
                    header("Location:$redirect_destination");
                else:
                    wp_delete_file( WP_CONTENT_DIR . $attachment_resume_file_upload_path);
                    header("Location:$redirect_destination_error");
                endif;
            else:
                header("Location:$redirect_destination_error");
            endif;
        else:
            header("Location:$redirect_destination_error");
        endif;

    else: // No delivery

        $attachment_resume_file_upload_path = get_attachment_file_upload_path($uploaded_resume_file_wp_media_lib['url']);

        wp_delete_file( WP_CONTENT_DIR . $attachment_resume_file_upload_path);

        header("Location:$redirect_destination_error");

    endif;

    function get_attachment_file_upload_path($path_file) {

        $uploads_pos = strpos($path_file, '/uploads');
        $uploads_file_path = substr($path_file, $uploads_pos);

        return $uploads_file_path;

    }

?>
