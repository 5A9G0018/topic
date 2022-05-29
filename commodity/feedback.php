<?php

    $to = '5A9G0043@stust.edu.tw';//your email 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Create email headers
    $headers .= 'From: '.$email."\r\n".
        'Reply-To: '.$email."\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Compose a simple HTML email message
    $message = '<html><body>';
    $message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
    $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
    $message .= '</body></html>';

    // Sending email
    if(mail($to, $name, $message, $headers)){
        echo '$message';
    } else{
        echo 'Unable to send email. Please try again.';
    }


?>