<?php 
        include '../../../../../wp-load.php';

        $first_name = isset($_POST['firstName']) ? $_POST['firstName'] : '';
        $last_name = isset($_POST['lastName']) ? $_POST['lastName'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $company_name = isset($_POST['companyName']) ? $_POST['companyName'] : '';

        $client_message .= 'First Name: '.$first_name."\r\n";
        $client_message .= 'Last Name: '.$last_name."\r\n";
        $client_message .= 'Email: '.$email."\r\n";
        $client_message .= 'Company Name: '.$company_name."\r\n";

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
                $recipients = get_field('connect_with_us_territory_franchise_career_application_contact_us_forms_recipients', 'option');

                $single_industry_form_subject_text_group = get_field('single_industry_form_subject_text_group', 'option');
                $single_industry_application_form_subject_text_in_english = $single_industry_form_subject_text_group['single_industry_application_form_subject_text_in_english'];
                $single_industry_application_form_subject_text_in_french = $single_industry_form_subject_text_group['single_industry_application_form_subject_text_in_french'];

                $subject = (pll_current_language('slug') == 'fr') ? $single_industry_application_form_subject_text_in_french : $single_industry_application_form_subject_text_in_english;

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