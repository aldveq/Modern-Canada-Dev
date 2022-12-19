<?php 
        include '../../../../../wp-load.php';

        $connect_with_us_name = isset($_POST['connect_with_us_name']) ? $_POST['connect_with_us_name'] : '';
        $connect_with_us_company_name = isset($_POST['connect_with_us_company_name']) ? $_POST['connect_with_us_company_name'] : '';
        $connect_with_us_email = isset($_POST['connect_with_us_email']) ? $_POST['connect_with_us_email'] : '';
        $connect_with_us_building_address = isset($_POST['connect_with_us_building_address']) ? $_POST['connect_with_us_building_address'] : '';
        $connect_with_us_phone_number = isset($_POST['connect_with_us_phone_number']) ? $_POST['connect_with_us_phone_number'] : '';
        $connect_with_us_subject = isset($_POST['connect_with_us_subject']) ? $_POST['connect_with_us_subject'] : '';
        $connect_with_us_message = isset($_POST['connect_with_us_message']) ? $_POST['connect_with_us_message'] : '';

        // Translation of the labels

        $name_label = (pll_current_language('slug') == 'fr') ? 'Name - FR' : 'Name';
        $company_name_label = (pll_current_language('slug') == 'fr') ? 'Company Name - FR' : 'Company Name';
        $email_label = (pll_current_language('slug') == 'fr') ? 'Email - FR' : 'Email';
        $building_address_label = (pll_current_language('slug') == 'fr') ? 'Building Address - FR' : 'Building Address';
        $phone_number_label = (pll_current_language('slug') == 'fr') ? 'Phone Number - FR' : 'Phone Number';
        $subject_label = (pll_current_language('slug') == 'fr') ? 'Subject - FR' : 'Subject';
        $message_label = (pll_current_language('slug') == 'fr') ? 'Message - FR' : 'Message';

        $connect_with_us_form_label = (pll_current_language('slug') == 'fr') ? 'CONNECT WITH US - FORM FR' : 'CONNECT WITH US - FORM';
        $new_connect_with_us_from_label = (pll_current_language('slug') == 'fr') ? 'New connect with us form from modern.soaq.co FR' : 'New connect with us form from modern.soaq.co';
        $new_connect_with_us_form_label = (pll_current_language('slug') == 'fr') ? 'This is a new connect with us form FR' : 'This is a new connect with us form';
        $information_label = (pll_current_language('slug') == 'fr') ? 'Information FR' : 'Information';
        $field_label = (pll_current_language('slug') == 'fr') ? 'Field FR' : 'Field';
        $value_label = (pll_current_language('slug') == 'fr') ? 'Value FR' : 'Value';
        $all_rights_reserved_label = (pll_current_language('slug') == 'fr') ? '© Modern, All Rights Reserved. FR' : '© Modern, All Rights Reserved.';

        $currentDate = date("l jS \of F Y");

        // Redirections
        $general_french_thank_you_age_link = get_field('general_french_thank_you_page', 'option');
        $general_english_thank_you_age_link = get_field('general_english_thank_you_page', 'option');
        $error_french_page = get_field('error_french_page','option');
        $error_english_page = get_field('error_english_page','option');
    
        $redirect_destination = (pll_current_language('slug') == 'fr') ? $general_french_thank_you_age_link['url'] : $general_english_thank_you_age_link['url'];
        $redirect_destination_error = (pll_current_language('slug') == 'fr') ? $error_french_page['url'] : $error_english_page['url'];

        $client_message = '<div style="background-color:#E7E7E7;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#2F318D;background-color:#2F318D;width:100%;">
            <tbody>
                <tr>
                    <td>
                        <div style="margin:0px auto;max-width:600px;">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                                <tbody>
                                <tr>
                                    <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0;text-align:center;">
                                        <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                            <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                                <tbody><tr>
                                                    <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                        <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:150px;"> 
                                                                        <img class="" style="width: 180px;" src="https://modern.soaq.co/wp-content/uploads/2020/11/modern-white.svg" alt="">
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            <tr>
                                                <td align="center" style="font-size:0px;padding:10px 25px;padding-top:30px;word-break:break-word;">
                                                    <div style="font-family:sans-serif;font-size:16px;font-weight:bold;letter-spacing:1px;line-height:24px;text-align:center;text-transform:uppercase;color:#ffffff;">'.$connect_with_us_form_label.' <br> <span style="color: #979797; font-weight: normal">-</span></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;">
                                                    <div style="font-family:sans-serif;font-size:13px;font-weight:bold;letter-spacing:1px;line-height:20px;text-align:center;text-transform:uppercase;color:#fff;">
                                                        '.$new_connect_with_us_from_label.' <br> ' . $currentDate . '
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody></table>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="body-section" style="-webkit-box-shadow: 1px 4px 11px 0px rgba(0, 0, 0, 0.15); -moz-box-shadow: 1px 4px 11px 0px rgba(0, 0, 0, 0.15); box-shadow: 1px 4px 11px 0px rgba(0, 0, 0, 0.15); margin: 0px auto; max-width: 600px;">
            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                <tbody>
                    <tr>
                        <td style="direction:ltr;font-size:0px;padding:20px 0;padding-bottom:0;padding-top:0;text-align:center;">
                        
                            <div style="background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;">
                                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
                                    <tbody>
                                        <tr>
                                            <td style="direction:ltr;font-size:0px;padding:20px 0;padding-left:15px;padding-right:15px;text-align:center;">
                                                <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                                                        <tbody><tr>
                                                            <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                <div style="font-family:sans-serif;font-size:20px;font-weight:bold;line-height:24px;text-align:left;color:#212b35;">'.$new_connect_with_us_form_label.'</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                <div style="font-family:sans-serif;font-size:16px;font-weight:bold;line-height:24px;text-align:left;color:#9FC754;">'.$information_label.'</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                <table cellpadding="0" cellspacing="0" width="100%" border="0" style="color:#000000;font-family:sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;border:none;">
                                                                <tbody><tr style="border-bottom:1px solid #ecedee;text-align:left;padding:15px 0;">
                                                                    <th style="padding: 0 15px 0 0;">'.$field_label.'</th>
                                                                    <th style="padding: 0 15px;">'.$value_label.'</th>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;"> '.$name_label.'</td>
                                                                    <td style="padding: 0 15px;">'.$connect_with_us_name.'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$company_name_label.'</td>
                                                                    <td style="padding: 0 15px;">'.$connect_with_us_company_name.'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$email_label.'</td>
                                                                    <td style="padding: 0 15px;">'.$connect_with_us_email.'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$building_address_label.'</td>
                                                                    <td style="padding: 0 15px;">'.$connect_with_us_building_address.'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$phone_number_label.'</td>
                                                                    <td style="padding: 0 15px;">'.$connect_with_us_phone_number.'</td>
                                                                </tr>
                                                                 <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$subject_label.'</td>
                                                                    <td style="padding: 0 15px;">'.$connect_with_us_subject.'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$message_label.'</td>
                                                                    <td style="padding: 0 15px;">'.$connect_with_us_message.'</td>
                                                                </tr>
                                                                </tbody></table>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
            <tbody>
                <tr>
                    <td>
                        <div style="margin:0px auto;max-width:600px;">
                            <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                                <tbody>
                                    <tr>
                                        <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
                                            <div style="margin:0px auto;max-width:600px;">
                                                <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
                                                    <tbody>
                                                        <tr>
                                                            <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">

                                                                <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="vertical-align:top;padding:0;">
                                                                                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="" width="100%">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                                                    <div style="font-family:sans-serif;font-size:11px;font-weight:400;line-height:16px;text-align:center;color:#445566;">'.$all_rights_reserved_label.'</div>
                                                                                                </td>
                                                                                            </tr>
                                                                                    </tbody></table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>';

    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $secret_key = '6LefesAaAAAAAIXSr2gsTeVTo2MXRDo44dn2ebIV';
		$verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
		$response_data = json_decode($verify_response);

        if($response_data->success) {
            // Delivery Configuration
            $recipients = get_field('connect_with_us_territory_franchise_career_application_contact_us_forms_recipients', 'option');
        
            $headers = 'MIME-Version: 1.0' . "\r\n"; 
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n"; 
        
            if(wp_mail($recipients, $connect_with_us_subject, $client_message, $headers)) {
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