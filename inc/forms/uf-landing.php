<?php 
        include '../../../../../wp-load.php';

        $first_name = isset($_POST['firstName']) ? $_POST['firstName'] : '';
        $last_name = isset($_POST['lastName']) ? $_POST['lastName'] : '';
        $city = isset($_POST['city']) ? $_POST['city'] : '';
        $province = isset($_POST['province']) ? $_POST['province'] : '';
        $phone_number = isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $page_slug = isset($_POST['page_slug']) ? $_POST['page_slug'] : '';

        $client_message .= 'First Name: '.$first_name."\r\n";
        $client_message .= 'Last Name: '.$last_name."\r\n";
        $client_message .= 'City: '.$city."\r\n";
        $client_message .= 'Province: '.$province."\r\n";
        $client_message .= 'Phone Number: '.$phone_number."\r\n";
        $client_message .= 'Email: '.$email."\r\n";
        $client_message .= 'Origin: '.$page_slug."\r\n";

        // Redirections
        $general_french_thank_you_age_link = get_field('general_french_thank_you_page', 'option');
        $general_english_thank_you_age_link = get_field('general_english_thank_you_page', 'option');
        $error_french_page = get_field('error_french_page','option');
        $error_english_page = get_field('error_english_page','option');

        $redirect_destination = (pll_current_language('slug') == 'fr') ? $general_french_thank_you_age_link['url'] : $general_english_thank_you_age_link['url'];
        $redirect_destination_error = (pll_current_language('slug') == 'fr') ? $error_french_page['url'] : $error_english_page['url'];

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $secret_key = '6LefesAaAAAAAIXSr2gsTeVTo2MXRDo44dn2ebIV';
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
            $response_data = json_decode($verify_response);
    
            if($response_data->success) {
                // Delivery Configuration
                $recipients = get_field('unit_franchise_landing_form_recipients', 'option');

                $unit_franchise_landing_form_subject_text_group = get_field('unit_franchise_landing_form_subject_text_group', 'option');
                $unit_franchise_landing_form_subject_text_in_english = $unit_franchise_landing_form_subject_text_group['unit_franchise_landing_form_subject_text_in_english'];
                $unit_franchise_landing_form_subject_text_in_french = $unit_franchise_landing_form_subject_text_group['unit_franchise_landing_form_subject_text_in_french'];

                $subject = (pll_current_language('slug') == 'fr') ? $unit_franchise_landing_form_subject_text_in_french : $unit_franchise_landing_form_subject_text_in_english;

                $headers = 'MIME-Version: 1.0' . "\r\n"; 
                $headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n"; 

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

?>