<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    
    $email_from = 'mnavas313@gmail.com';
    $email_subject = "New Form Submission";
    
    $email_body = "User name: $name.\n".
                   "User email: $visitor_email.\n".
                   "User message: $message.\n";
    $to = "mnavas313@gmail.com";
    $headers = "form: $email_from\r\n";
    $headers = "Reply_to: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$g=headers);
    header("location: index.html");
 ?>