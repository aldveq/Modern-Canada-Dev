<?php 

    include '../../../../../wp-load.php';
    
    $single_opportunity_id_field = isset($_POST['singleOpportunityIDField']) && !empty($_POST['singleOpportunityIDField']) ? $_POST['singleOpportunityIDField'] : 'N/A';
    $single_opportunity_location_field = isset($_POST['singleOpportunityLocationField']) && !empty($_POST['singleOpportunityLocationField']) ? $_POST['singleOpportunityLocationField'] : 'N/A';
    $group_opportunities_field = isset($_POST['groupOpportunitiesField']) && !empty($_POST['groupOpportunitiesField']) ? $_POST['groupOpportunitiesField'] : 'N/A'; 

    $single_opportunity = $single_opportunity_id_field . '  ' . $single_opportunity_location_field;
    $opp_s = ($single_opportunity_id_field == 'N/A' && $single_opportunity_location_field == 'N/A') ? $group_opportunities_field : $single_opportunity;

    $name_user = isset($_POST['name_input']) && !empty($_POST['name_input']) ? $_POST['name_input'] : 'N/A';
    $name_last_user = isset($_POST['name_last_input']) && !empty($_POST['name_last_input']) ? $_POST['name_last_input'] : 'N/A';
    $email_address = isset($_POST['email_address']) && !empty($_POST['email_address']) ? $_POST['email_address'] : 'N/A';
    $user_address = isset($_POST['address_user']) && !empty($_POST['address_user']) ? $_POST['address_user'] : 'N/A';
    $city_input = isset($_POST['city_input']) && !empty($_POST['city_input']) ? $_POST['city_input'] : 'N/A';
    $province_list = isset($_POST['province_list']) && !empty($_POST['province_list']) ? $_POST['province_list'] : 'N/A';
    $postal_code = isset($_POST['postal_code']) && !empty($_POST['postal_code']) ? $_POST['postal_code'] : 'N/A';
    $home_phone = isset($_POST['home_phone']) && !empty($_POST['home_phone']) ? $_POST['home_phone'] : 'N/A';
    $cell_phone = isset($_POST['cell_phone']) && !empty($_POST['cell_phone']) ? $_POST['cell_phone'] : 'N/A';
    $channel_select = isset($_POST['channel_select']) && !empty($_POST['channel_select']) ? $_POST['channel_select'] : 'N/A';
    $otherchannel = isset($_POST['otherchannel']) && !empty($_POST['otherchannel']) ? $_POST['otherchannel'] : 'N/A';
    $spokenLang = isset($_POST['spokenLang']) && !empty($_POST['spokenLang']) ? $_POST['spokenLang'] : 'N/A';
    $otherspoken = isset($_POST['otherspoken']) && !empty($_POST['otherspoken']) ? $_POST['otherspoken'] : 'N/A';
    $whitten = isset($_POST['whitten']) && !empty($_POST['whitten']) ? $_POST['whitten'] : 'N/A';
    $otherwhitten = isset($_POST['otherwhitten']) && !empty($_POST['otherwhitten']) ? $_POST['otherwhitten'] : 'N/A';
    $englishProficiency = isset($_POST['englishProficiency']) && !empty($_POST['englishProficiency']) ? $_POST['englishProficiency'] : 'N/A';
    $identifyMarketsOne = isset($_POST['identifyMarketsOne']) && !empty($_POST['identifyMarketsOne']) ? $_POST['identifyMarketsOne'] : 'N/A';
    $identifyMarketsTwo = isset($_POST['identifyMarketsTwo']) && !empty($_POST['identifyMarketsTwo']) ? $_POST['identifyMarketsTwo'] : 'N/A';
    $identifyMarketsThree = isset($_POST['identifyMarketsThree']) && !empty($_POST['identifyMarketsThree']) ? $_POST['identifyMarketsThree'] : 'N/A';
    $relocateSelect = isset($_POST['relocateSelect']) && !empty($_POST['relocateSelect']) ? $_POST['relocateSelect'] : 'N/A';
    $relocateTextArea = isset($_POST['relocateTextArea']) && !empty($_POST['relocateTextArea']) ? $_POST['relocateTextArea'] : 'N/A';
    $legallyEligible = isset($_POST['legallyEligible']) && !empty($_POST['legallyEligible']) ? $_POST['legallyEligible'] : 'N/A';
    $haveBusinessOrFranchise = isset($_POST['haveBusinessOrFranchise']) && !empty($_POST['haveBusinessOrFranchise']) ? $_POST['haveBusinessOrFranchise'] : 'N/A';
    $haveBusinessOrFranchiseArea = isset($_POST['haveBusinessOrFranchiseArea']) && !empty($_POST['haveBusinessOrFranchiseArea']) ? $_POST['haveBusinessOrFranchiseArea'] : 'N/A';
    $currentBusinessOrFranchise = isset($_POST['currentBusinessOrFranchise']) && !empty($_POST['currentBusinessOrFranchise']) ? $_POST['currentBusinessOrFranchise'] : 'N/A';
    $currentlyBusinessSpecifyArea = isset($_POST['currentlyBusinessSpecifyArea']) && !empty($_POST['currentlyBusinessSpecifyArea']) ? $_POST['currentlyBusinessSpecifyArea'] : 'N/A';
    $workForACleaningCompany = isset($_POST['workForACleaningCompany']) && !empty($_POST['workForACleaningCompany']) ? $_POST['workForACleaningCompany'] : 'N/A';
    $cleaningCompanyArea = isset($_POST['cleaningCompanyArea']) && !empty($_POST['cleaningCompanyArea']) ? $_POST['cleaningCompanyArea'] : 'N/A';
    $why_are_you_interested_acquiring = isset($_POST['why_are_you_interested_acquiring']) && !empty($_POST['why_are_you_interested_acquiring']) ? $_POST['why_are_you_interested_acquiring']: 'N/A';
    $tell_us_you_belive = isset($_POST['tell_us_you_belive']) && !empty($_POST['tell_us_you_belive']) ? $_POST['tell_us_you_belive']: 'N/A';
    $page_slug = isset($_POST['page_slug']) ? $_POST['page_slug'] : 'N/A';

    $client_message = 'Opp(s): '.$opp_s."\r\n";
    $client_message .= 'First: '.$name_user."\r\n";
    $client_message .= 'Last: '.$name_last_user."\r\n";
    $client_message .= 'Email Address: '.$email_address."\r\n";
    $client_message .= 'Street Address: '.$user_address."\r\n";
    $client_message .= 'City: '.$city_input."\r\n";
    $client_message .= 'Province: '.$province_list."\r\n";
    $client_message .= 'Postal Code: '.$postal_code."\r\n";
    $client_message .= 'Primary Phone: '.$home_phone."\r\n";
    $client_message .= 'Secondary Phone: '.$cell_phone."\r\n";
    $client_message .= 'How did you hear about us: '.$channel_select."\r\n";
    $client_message .= 'How did you hear about us - Other: '.$otherchannel."\r\n";
    $client_message .= 'Spoken: '.$spokenLang."\r\n";
    $client_message .= 'Spoken - Other: '.$otherspoken."\r\n";
    $client_message .= 'Written: '.$whitten."\r\n";
    $client_message .= 'Written - Other: '.$otherwhitten."\r\n";
    $client_message .= 'English Proficiency: '.$englishProficiency."\r\n";
    $client_message .= 'Markets One: '.$identifyMarketsOne."\r\n";
    $client_message .= 'Markets Two: '.$identifyMarketsTwo."\r\n";
    $client_message .= 'Markets Three: '.$identifyMarketsThree."\r\n";
    $client_message .= 'Are you willing to relocate anywhere in Canada: '.$relocateSelect."\r\n";
    $client_message .= 'Relocation details: '.$relocateTextArea."\r\n";
    $client_message .= 'Are you legally eligible to work in Canada: '.$legallyEligible."\r\n";
    $client_message .= 'Have you ever owned your own business or Franchise: '.$haveBusinessOrFranchise."\r\n";
    $client_message .= 'Specify name of business or Franchise: '.$haveBusinessOrFranchiseArea."\r\n";
    $client_message .= 'Do you currently own your own business or Franchise: '.$currentBusinessOrFranchise."\r\n";
    $client_message .= 'Specify name of current business or Franchise: '.$currentlyBusinessSpecifyArea."\r\n";
    $client_message .= 'Have you ever or do you still work for a cleaning company: '.$workForACleaningCompany."\r\n";
    $client_message .= 'Specify name of cleaning company: '.$cleaningCompanyArea."\r\n";
    $client_message .= 'Why are you interested in acquiring a Modern Franchise: '.$why_are_you_interested_acquiring."\r\n";
    $client_message .= 'Tell us why you believe you would make an excellent Franchisee for Modern Cleaining: '.$tell_us_you_belive."\r\n";
    $client_message .= 'Origin: '.$page_slug.'';

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

    // Redirections
    $general_french_thank_you_age_link = get_field('general_french_thank_you_page', 'option');
    $general_english_thank_you_age_link = get_field('general_english_thank_you_page', 'option');
    $error_french_page = get_field('error_french_page','option');
    $error_english_page = get_field('error_english_page','option');

    $redirect_destination = (pll_current_language('slug') == 'fr') ? $general_french_thank_you_age_link['url'] : $general_english_thank_you_age_link['url'];
    $redirect_destination_error = (pll_current_language('slug') == 'fr') ? $error_french_page['url'] : $error_english_page['url'];
    
    if ( isset( $uploaded_resume_file_wp_media_lib['error'] ) ) {

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $secret_key = '6LefesAaAAAAAIXSr2gsTeVTo2MXRDo44dn2ebIV';
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
            $response_data = json_decode($verify_response);
    
            if($response_data->success) {
                // Delivery Configuration
                $recipients = get_field('connect_with_us_territory_franchise_career_application_contact_us_forms_recipients', 'option');
                
                $unit_franchise_subject_field_group = get_field('unit_franchise_application_form_subject_text_group', 'option');
                $unit_franchise_application_form_subject_text_in_english = $unit_franchise_subject_field_group['unit_franchise_application_form_subject_text_in_english'];
                $unit_franchise_application_form_subject_text_in_french = $unit_franchise_subject_field_group['unit_franchise_application_form_subject_text_in_french'];

                $subject = (pll_current_language('slug') == 'fr') ? $unit_franchise_application_form_subject_text_in_french : $unit_franchise_application_form_subject_text_in_english;


                if(wp_mail($recipients, $subject, $client_message, $headers)) {
                    header("Location:$redirect_destination");
                } else {
                    header("Location:$redirect_destination_error");
                }
            } else {
                header("Location:$redirect_destination_error");
            }
        } else {
            header("Location:$redirect_destination_error");
        }
        
    }
    elseif (  $uploaded_resume_file_wp_media_lib && ! isset( $uploaded_resume_file_wp_media_lib['error'] )  ) {

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $secret_key = '6LefesAaAAAAAIXSr2gsTeVTo2MXRDo44dn2ebIV';
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
            $response_data = json_decode($verify_response);
    
            if($response_data->success) {

                $attachment_resume_file_upload_path = get_attachment_file_upload_path($uploaded_resume_file_wp_media_lib['url']);
                // Delivery Configuration
                $recipients = get_field('connect_with_us_territory_franchise_career_application_contact_us_forms_recipients', 'option');
                
                $unit_franchise_subject_field_group = get_field('unit_franchise_application_form_subject_text_group', 'option');
                $unit_franchise_application_form_subject_text_in_english = $unit_franchise_subject_field_group['unit_franchise_application_form_subject_text_in_english'];
                $unit_franchise_application_form_subject_text_in_french = $unit_franchise_subject_field_group['unit_franchise_application_form_subject_text_in_french'];

                $subject = (pll_current_language('slug') == 'fr') ? $unit_franchise_application_form_subject_text_in_french : $unit_franchise_application_form_subject_text_in_english;
                $mail_attachment = array( WP_CONTENT_DIR . $attachment_resume_file_upload_path);

                if(wp_mail($recipients, $subject, $client_message, $headers, $mail_attachment)) {
                    wp_delete_file( WP_CONTENT_DIR . $attachment_resume_file_upload_path);
                    header("Location:$redirect_destination");
                } else {
                    wp_delete_file( WP_CONTENT_DIR . $attachment_resume_file_upload_path);
                    header("Location:$redirect_destination_error");
                }
            } else {
                header("Location:$redirect_destination_error");
            }
        } else {
            header("Location:$redirect_destination_error");
        }
    } else {

        $error_french_page = get_field('error_french_page','option');
        $error_english_page = get_field('error_english_page','option');

        $attachment_resume_file_upload_path = get_attachment_file_upload_path($uploaded_resume_file_wp_media_lib['url']);

        wp_delete_file( WP_CONTENT_DIR . $attachment_resume_file_upload_path);

        header("Location:$redirect_destination_error");
    }

    function get_attachment_file_upload_path($path_file) {

        $uploads_pos = strpos($path_file, '/uploads');
        $uploads_file_path = substr($path_file, $uploads_pos);

        return $uploads_file_path;

    }

?>