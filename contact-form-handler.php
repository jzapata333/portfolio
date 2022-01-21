<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'javier.zapata333@gmail.com';

    $email_subject = 'Portfolio-jz333 Inquiry';

    $email_body = 'User Name: $name.\n'.
                    'User Email: $visitor_email.\n'.
                        'User Message: $message.\n';
    
    $to = 'javier.zapata333@gmail.com';

    $headers = 'From: $email_from \r\n';

    $headers .= 'Reply to: $visitor_email \r\n';

    mail($to, $email_subject, $email_body, $headers);

    header('Location: index.html');

?>