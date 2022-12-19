<?php 
        include '../../../../../wp-load.php';

        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';

        $client_message .= 'Name: '.$name."\r\n";
        $client_message .= 'Email: '.$email."\r\n";

        // Delivery Configuration
        $recipients = get_field('download_pdf_fact_sheet_form_recipients', 'option');

        $subject = 'PDF Request';

        $headers = 'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n"; 

        if(wp_mail($recipients, $subject, $client_message, $headers)) {
            $reponse_success = array(
                'status' => 200,
                'response' => true,
                'error' => false
            );
            echo json_encode($reponse_success);
        } else {
            $reponse_error = array(
                'status' => 500,
                'response' => false,
                'error' => true
            );
            echo json_encode($reponse_error);
        }
?>