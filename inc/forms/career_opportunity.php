<?php 
        include '../../../../../wp-load.php';

        $post_data = $_POST;

        $job_id = isset($_POST['jobID']) ? $_POST['jobID'] : '';
        $job_location = isset($_POST['jobLocation']) ? $_POST['jobLocation'] : '';
        $job_name = isset($_POST['jobName']) ? $_POST['jobName'] : '';
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email_address = isset($_POST['emailAddress']) ? $_POST['emailAddress'] : '';
        $home_phone = isset($_POST['homePhone']) ? $_POST['homePhone'] : '';
        $building_address = isset($_POST['buildingAddress']) ? $_POST['buildingAddress'] : '';
        $province = isset($_POST['province']) ? $_POST['province'] : '';
        $postal_code = isset($_POST['postalCode']) ? $_POST['postalCode'] : '';
        $all_experiences_input = isset($_POST['allExperiencesInput']) ? $_POST['allExperiencesInput'] : '';
        $spoken = isset($_POST['spoken']) ? $_POST['spoken'] : '';
        $otherSpoken = isset($_POST['otherSpoken']) ? $_POST['otherSpoken'] : '';
        $written = isset($_POST['written']) ? $_POST['written'] : '';
        $otherWritten = isset($_POST['otherWritten']) ? $_POST['otherWritten'] : '';

        // Translation of the labels

        $job_id_label = (pll_current_language('slug') == 'fr') ? 'Job ID - FR' : 'Job ID';
        $job_name_label = (pll_current_language('slug') == 'fr') ? 'Job Name - FR' : 'Job Name';
        $job_location_label = (pll_current_language('slug') == 'fr') ? 'Job Location - FR' : 'Job Location';
        $name_label = (pll_current_language('slug') == 'fr') ? 'Name - FR' : 'Name';
        $email_address_label = (pll_current_language('slug') == 'fr') ? 'Email Address - FR' : 'Email Address';
        $phone_number_label = (pll_current_language('slug') == 'fr') ? 'Phone Number - FR' : 'Phone Number';
        $province_label = (pll_current_language('slug') == 'fr') ? 'Province - FR' : 'Province';
        $postal_code_label = (pll_current_language('slug') == 'fr') ? 'Postal Code - FR' : 'Postal Code';
        $spoken_label = (pll_current_language('slug') == 'fr') ? 'Spoken - FR' : 'Spoken';
        $other_spoken_label = (pll_current_language('slug') == 'fr') ? 'Other Spoken - FR' : 'Other Spoken';
        $written_label = (pll_current_language('slug') == 'fr') ? 'Written - FR' : 'Written';
        $other_written_label = (pll_current_language('slug') == 'fr') ? 'Other Written - FR' : 'Other Written';
        $experience_information_label = (pll_current_language('slug') == 'fr') ? 'Experiences Information - FR' : 'Experiences Information';
        $company_label = (pll_current_language('slug') == 'fr') ? 'Company - FR' : 'Company';
        $duration_label = (pll_current_language('slug') == 'fr') ? 'Duration - FR' : 'Duration';

        $careers_operations_form_label = (pll_current_language('slug') == 'fr') ? 'CAREERS/OPERATIONS - FORM FR' : 'CAREERS/OPERATIONS - FORM';
        $careers_operations_from_label = (pll_current_language('slug') == 'fr') ? 'New careers/operations form from modern.soaq.co FR' : 'New careers/operations form from modern.soaq.co';
        $new_careers_operations_form_label = (pll_current_language('slug') == 'fr') ? 'This is a new careers/operations form FR' : 'This is a new careers/operations form';
        $information_label = (pll_current_language('slug') == 'fr') ? 'Information FR' : 'Information';
        $field_label = (pll_current_language('slug') == 'fr') ? 'Field FR' : 'Field';
        $value_label = (pll_current_language('slug') == 'fr') ? 'Value FR' : 'Value';
        $all_rights_reserved_label = (pll_current_language('slug') == 'fr') ? '© Modern, All Rights Reserved. FR' : '© Modern, All Rights Reserved.';

        $currentDate = date("l jS \of F Y");

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
                                                    <div style="font-family:sans-serif;font-size:16px;font-weight:bold;letter-spacing:1px;line-height:24px;text-align:center;text-transform:uppercase;color:#ffffff;">'.$careers_operations_form_label.' <br> <span style="color: #979797; font-weight: normal">-</span></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;">
                                                    <div style="font-family:sans-serif;font-size:13px;font-weight:bold;letter-spacing:1px;line-height:20px;text-align:center;text-transform:uppercase;color:#fff;">
                                                        '.$careers_operations_from_label.' <br> ' . $currentDate . '
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
                                                                <div style="font-family:sans-serif;font-size:20px;font-weight:bold;line-height:24px;text-align:left;color:#212b35;">'.$new_careers_operations_form_label.'</div>
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
                                                                    <td style="padding: 0 15px 0 0;">'.$job_id_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $job_id . '</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$job_name_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $job_name . '</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$job_location_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $job_location . '</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$name_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $name . '</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$email_address_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $email_address . '</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$phone_number_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $home_phone . '</td>
                                                                </tr>
                                                                 <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$building_address_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $building_address . '</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$province_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $province . '</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$postal_code_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $postal_code . '</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$spoken_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $spoken . '</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$other_spoken_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $otherSpoken . '</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$written_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $written . '</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding: 0 15px 0 0;">'.$other_written_label.'</td>
                                                                    <td style="padding: 0 15px;">' . $otherWritten . '</td>
                                                                </tr>
                                                                </tbody></table>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                <div style="font-family:sans-serif;font-size:16px;font-weight:bold;line-height:24px;text-align:left;color:#9FC754;">'.$experience_information_label.'</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                                                                <table cellpadding="0" cellspacing="0" width="100%" border="0" style="color:#000000;font-family:sans-serif;font-size:13px;line-height:22px;table-layout:auto;width:100%;border:none;">
                                                                <tbody><tr style="border-bottom:1px solid #ecedee;text-align:left;padding:15px 0;">
                                                                    <th style="padding: 0 15px 0 0;">'.$company_label.'</th>
                                                                    <th style="padding: 0 15px 0 0;">'.$duration_label.'</th>
                                                                </tr>
                                                                ' . $all_experiences_input . '
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

    if ( ! function_exists( 'wp_handle_upload' ) ) {
        require_once( '../../../../../wp-config.php' );
        require_once( '../../../../../wp-admin/includes/file.php' );
    }
    
    $uploaded_resume_file = $_FILES['resume_file'];
    $uploaded_file_additional = $_FILES['file_additional'];
    
    $upload_resume_file_overrides = array(
        'test_form' => false
    );

    $upload_file_additional_overrides = array(
        'test_form' => false
    );
    
    $uploaded_resume_file_wp_media_lib = wp_handle_upload( $uploaded_resume_file, $upload_resume_file_overrides );
    $uploaded_file_additional_wp_media_lib = wp_handle_upload( $uploaded_file_additional, $upload_file_additional_overrides );

    // Redirections
    $general_french_thank_you_age_link = get_field('general_french_thank_you_page', 'option');
    $general_english_thank_you_age_link = get_field('general_english_thank_you_page', 'option');
    $error_french_page = get_field('error_french_page','option');
    $error_english_page = get_field('error_english_page','option');

    $redirect_destination = (pll_current_language('slug') == 'fr') ? $general_french_thank_you_age_link['url'] : $general_english_thank_you_age_link['url'];
    $redirect_destination_error = (pll_current_language('slug') == 'fr') ? $error_french_page['url'] : $error_english_page['url'];
    
    if ( ($uploaded_resume_file_wp_media_lib && ! isset( $uploaded_resume_file_wp_media_lib['error'] )) &&  $uploaded_file_additional['size'] == 0) {

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $secret_key = '6LefesAaAAAAAIXSr2gsTeVTo2MXRDo44dn2ebIV';
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
            $response_data = json_decode($verify_response);
    
            if($response_data->success) {

                $attachment_resume_file_upload_path = get_attachment_file_upload_path($uploaded_resume_file_wp_media_lib['url']);
      
                // Delivery Configuration
                $english_career_form_recipients = get_field('english_career_form_recipients', 'option');
                $french_career_form_recipients = get_field('french_career_form_recipients', 'option');

                $recipients = (pll_current_language('slug') == 'fr') ?  $french_career_form_recipients : $english_career_form_recipients;

                $headers = 'MIME-Version: 1.0' . "\r\n"; 
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";


                $career_job_application_subject_field_group = get_field('career_job_application_form_subject_text_group', 'option');
                $careerjob_application_form_subject_text_in_english = $career_job_application_subject_field_group['careerjob_application_form_subject_text_in_english'];
                $careerjob_application_form_subject_text_in_french = $career_job_application_subject_field_group['careerjob_application_form_subject_text_in_french'];

                $subject = (pll_current_language('slug') == 'fr') ? $careerjob_application_form_subject_text_in_french : $careerjob_application_form_subject_text_in_english;


                $mail_attachment = array( WP_CONTENT_DIR . $attachment_resume_file_upload_path);

                if(wp_mail($recipients, $subject, $client_message, $headers, $mail_attachment)) {
                    wp_delete_file( WP_CONTENT_DIR . $attachment_resume_file_upload_path);
                    sendEmailToApplicant($email_address);
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

    } elseif (($uploaded_resume_file_wp_media_lib && ! isset( $uploaded_resume_file_wp_media_lib['error'] )) && ($uploaded_file_additional_wp_media_lib && ! isset( $uploaded_file_additional_wp_media_lib['error'] ))) {

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
            $secret_key = '6LefesAaAAAAAIXSr2gsTeVTo2MXRDo44dn2ebIV';
            $verify_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
            $response_data = json_decode($verify_response);
    
            if($response_data->success) {
                $attachment_resume_file_upload_path = get_attachment_file_upload_path($uploaded_resume_file_wp_media_lib['url']);
                $attachment_file_additional_upload_path = get_attachment_file_upload_path($uploaded_file_additional_wp_media_lib['url']);
              
                // Delivery Configuration
                $english_career_form_recipients = get_field('english_career_form_recipients', 'option');
                $french_career_form_recipients = get_field('french_career_form_recipients', 'option');
        
                $recipients = (pll_current_language('slug') == 'fr') ?  $french_career_form_recipients : $english_career_form_recipients;
        
                $headers = 'MIME-Version: 1.0' . "\r\n"; 
                $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        
                $career_job_application_subject_field_group = get_field('career_job_application_form_subject_text_group', 'option');
                $careerjob_application_form_subject_text_in_english = $career_job_application_subject_field_group['careerjob_application_form_subject_text_in_english'];
                $careerjob_application_form_subject_text_in_french = $career_job_application_subject_field_group['careerjob_application_form_subject_text_in_french'];
                $subject = (pll_current_language('slug') == 'fr') ? $careerjob_application_form_subject_text_in_french : $careerjob_application_form_subject_text_in_english;
        
                $mail_attachment = array( WP_CONTENT_DIR . $attachment_resume_file_upload_path, WP_CONTENT_DIR . $attachment_file_additional_upload_path);
        
                if(wp_mail($recipients, $subject, $client_message, $headers, $mail_attachment)) {
                    wp_delete_file( WP_CONTENT_DIR . $attachment_resume_file_upload_path);
                    wp_delete_file( WP_CONTENT_DIR . $attachment_file_additional_upload_path);
                    sendEmailToApplicant($email_address);
                    header("Location:$redirect_destination");
                } else {
                    wp_delete_file( WP_CONTENT_DIR . $attachment_resume_file_upload_path);
                    wp_delete_file( WP_CONTENT_DIR . $attachment_file_additional_upload_path);
        
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
        $redirect_destination_error = (pll_current_language('slug') == 'fr') ? $error_french_page['url'] : $error_english_page['url'];

        $attachment_resume_file_upload_path = get_attachment_file_upload_path($uploaded_resume_file_wp_media_lib['url']);
        $attachment_file_additional_upload_path = get_attachment_file_upload_path($uploaded_file_additional_wp_media_lib['url']);

        wp_delete_file( WP_CONTENT_DIR . $attachment_resume_file_upload_path);
        wp_delete_file( WP_CONTENT_DIR . $attachment_file_additional_upload_path);

        header("Location:$redirect_destination_error");
    }

    function get_attachment_file_upload_path($path_file) {

        $uploads_pos = strpos($path_file, '/uploads');
        $uploads_file_path = substr($path_file, $uploads_pos);

        return $uploads_file_path;

    }

    function sendEmailToApplicant($email_address_applicant) {
        $careers_operations_form_label_applicant = (pll_current_language('slug') == 'fr') ? 'Thank You! FR' : 'Thank You!';
        $careers_operations_applicant_text_content = (pll_current_language('slug') == 'fr') ? get_field('french_job_application_thank_you_message', 'option') : get_field('english_job_application_thank_you_message', 'option');
        $all_rights_reserved_label_applicant = (pll_current_language('slug') == 'fr') ? '© Modern, All Rights Reserved. FR' : '© Modern, All Rights Reserved.';
        $current_date_applicant = date("l jS \of F Y");

        $client_message_applicant = '<div style="background-color:#E7E7E7;">
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
                                                    <div style="font-family:sans-serif;font-size:16px;font-weight:bold;letter-spacing:1px;line-height:24px;text-align:center;text-transform:uppercase;color:#ffffff;">'.$careers_operations_form_label_applicant.' <br> <span style="color: #979797; font-weight: normal">-</span></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="font-size:0px;padding:10px 25px;padding-top:0;word-break:break-word;">
                                                    <div style="font-family:sans-serif;font-size:13px;font-weight:bold;letter-spacing:1px;line-height:20px;text-align:center;text-transform:uppercase;color:#fff;">
                                                        ' . $current_date_applicant . '
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
                                                                <div style="font-family:sans-serif;font-size:20px;font-weight:bold;line-height:24px;text-align:left;color:#212b35;">'.$careers_operations_applicant_text_content.'</div>
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
                                                                                                <div style="font-family:sans-serif;font-size:11px;font-weight:400;line-height:16px;text-align:center;color:#445566;">'.$all_rights_reserved_label_applicant.'</div>
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
        
        $headers_applicant = 'MIME-Version: 1.0' . "\r\n"; 
        $headers_applicant .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $subject_applicant = (pll_current_language('slug') == 'fr') ? "Thank you, we've received your application! FR" : "Thank you, we've received your application!";

        wp_mail($email_address_applicant, $subject_applicant, $client_message_applicant, $headers_applicant);
    }

 
?>