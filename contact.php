<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Load PHPMailer
require 'vendor/autoload.php';




    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer();

    // Set up SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server address
    $mail->SMTPAuth = true;
    $mail->Username = 'botchokfuture@gmail.com';  // Replace with your SMTP username
    $mail->Password = 'soadtxodzlonhmai';  // Replace with your SMTP password
    $mail->SMTPSecure = 'tls';  // Use 'tls' or 'ssl' depending on your SMTP server configuration
    $mail->Port = 587  ;  // Replace with your SMTP server port

    // Set up sender and recipient
    $mail->setFrom($email, $name);
    $mail->addAddress('botchokfuture@gmail.com', "botchokfuture");  // Replace with the recipient's email address

    // Set email subject and body
    $mail->Subject = $name;
    $mail->Body = "Name: $name\n";
    $mail->Body .= "Phone: $phone\n";
    $mail->Body .= "Company Name: $company\n";
    $mail->Body .= "Email: $email\n";
    $mail->Body .= "Inquiry Type: $type\n";
    $mail->Body .= "Message: $message\n";


    $mail ->send();
    echo "email sent"

?>
