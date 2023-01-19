<?php 
        include '../../../../../wp-load.php';

        $firstName = isset($_POST['firstName']) && !empty($_POST['firstName']) ? $_POST['firstName'] : '';
        $lastName = isset($_POST['lastName']) && !empty($_POST['lastName']) ? $_POST['lastName'] : '';
        $emailAddress = isset($_POST['emailAddress']) && !empty($_POST['emailAddress']) ? $_POST['emailAddress'] : '';
        $address = isset($_POST['address']) && !empty($_POST['address']) ? $_POST['address'] : '';
        $city = isset($_POST['city']) && !empty($_POST['city']) ? $_POST['city'] : '';
        $province_list = isset($_POST['province_list']) && !empty($_POST['province_list']) ? $_POST['province_list'] : '';
        $postalCode = isset($_POST['postalCode']) && !empty($_POST['postalCode']) ? $_POST['postalCode'] : '';
        $phone = isset($_POST['phone']) && !empty($_POST['phone']) ? $_POST['phone'] : '';
        $secondaryPhone = isset($_POST['secondaryPhone']) && !empty($_POST['secondaryPhone']) ? $_POST['secondaryPhone'] : '';
        $investmentLevel = isset($_POST['investmentLevel']) && !empty($_POST['investmentLevel']) ? $_POST['investmentLevel'] : '';
        $identifyMarketsOne = isset($_POST['identifyMarketsOne']) && !empty($_POST['identifyMarketsOne']) ? $_POST['identifyMarketsOne'] : '';
        $identifyMarketsTwo = isset($_POST['identifyMarketsTwo']) && !empty($_POST['identifyMarketsTwo']) ? $_POST['identifyMarketsTwo'] : '';
        $identifyMarketsThree = isset($_POST['identifyMarketsThree']) && !empty($_POST['identifyMarketsThree']) ? $_POST['identifyMarketsThree'] : '';
		$pageTemplate = isset($_POST['page_template']) && !empty($_POST['page_template']) ? $_POST['page_template'] : '';

        $client_message = 'First: '.$firstName."\r\n";
        $client_message .= 'Last: '.$lastName."\r\n";
        $client_message .= 'Email Address: '.$emailAddress."\r\n";
        $client_message .= 'Address: '.$address."\r\n";
        $client_message .= 'City: '.$city."\r\n";
        $client_message .= 'Province: '.$province_list."\r\n";
        $client_message .= 'Targeted Areas (Postal Code): '.$postalCode."\r\n";
        $client_message .= 'Phone Number: '.$phone."\r\n";
        $client_message .= 'Secondary Number: '.$secondaryPhone."\r\n";
        $client_message .= 'Investment Level: '.$investmentLevel."\r\n";
        $client_message .= 'Market One: '.$identifyMarketsOne."\r\n";
        $client_message .= 'Market Two: '.$identifyMarketsTwo."\r\n";
        $client_message .= 'Market Three: '.$identifyMarketsThree."\r\n";

        // Redirections
		$redirect_destination = '';
        $general_french_thank_you_age_link = get_field('general_french_thank_you_page', 'option');
        $general_english_thank_you_age_link = get_field('general_english_thank_you_page', 'option');
		$territory_franchise_english_thank_you_page_g_ad = get_field('territory_franchise_english_thank_you_page_g_ad', 'option');
		$territory_franchise_french_thank_you_page_g_ad = get_field('territory_franchise_french_thank_you_page_g_ad', 'option');
        $error_french_page = get_field('error_french_page','option');
        $error_english_page = get_field('error_english_page','option');
		$redirect_destination_error = (pll_current_language('slug') == 'fr') ? $error_french_page['url'] : $error_english_page['url'];

		if ($pageTemplate === 'template-ad.php') {
			$redirect_destination = (pll_current_language('slug') == 'fr') ? $territory_franchise_french_thank_you_page_g_ad['url'] : $territory_franchise_english_thank_you_page_g_ad['url'];
		} else {		
			$redirect_destination = (pll_current_language('slug') == 'fr') ? $general_french_thank_you_age_link['url'] : $general_english_thank_you_age_link['url'];
		}


        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $secret_key = '6LefesAaAAAAAIXSr2gsTeVTo2MXRDo44dn2ebIV';
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
            $response_data = json_decode($verify_response);
    
            if($response_data->success) {
                // Delivery Configuration
                $english_territory_franchise_form_recipients = get_field('english_territory_franchise_form_recipients', 'option');
                $french_territory_franchise_form_recipients = get_field('french_territory_franchise_form_recipients', 'option');
                $recipients = (pll_current_language('slug') == 'fr') ? $french_territory_franchise_form_recipients : $english_territory_franchise_form_recipients;

				$subject = '';

                if ($pageTemplate === 'template-ad.php'):
					$territory_franchise_gad_subject_field_group = get_field('territory_franchise_application_form_subject_text_group_ga_campaign', 'option');
                	$territory_franchise_application_form_subject_gac_text_in_english = $territory_franchise_gad_subject_field_group['territory_franchise_application_form_subject_gac_text_in_english'];
                	$territory_franchise_application_form_subject_gac_text_in_french = $territory_franchise_gad_subject_field_group['territory_franchise_application_form_subject_gac_text_in_french'];
					$subject = (pll_current_language('slug') == 'fr') ? $territory_franchise_application_form_subject_gac_text_in_french : $territory_franchise_application_form_subject_gac_text_in_english;
				else:
					$territory_franchise_subject_field_group = get_field('territory_franchise_application_form_subject_text_group', 'option');
                	$territory_franchise_application_form_subject_text_in_english = $territory_franchise_subject_field_group['territory_franchise_application_form_subject_text_in_english'];
                	$territory_franchise_application_form_subject_text_in_french = $territory_franchise_subject_field_group['territory_franchise_application_form_subject_text_in_french'];
					$subject = (pll_current_language('slug') == 'fr') ? $territory_franchise_application_form_subject_text_in_french : $territory_franchise_application_form_subject_text_in_english;
				endif;
				

                $headers = 'MIME-Version: 1.0' . "\r\n"; 
                $headers .= 'Content-type: text/plain' . "\r\n"; 

                if(wp_mail($recipients, $subject, $client_message, $headers)) {
                    header("Location:$redirect_destination");
                } else {
                    header("Location:$redirect_destination_error");
                }
            } 
			else {
                header("Location:$redirect_destination_error");
            }
        } 
		else {
            header("Location:$redirect_destination_error");
        }
?>