<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "support@techaizen.com"; // Replace with your actual email address
    $subject = "New Contact Form Submission";

    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $query = $_POST["query"];

    $message = "Name: $full_name\nEmail: $email\nQuery: $query";

    $mail = new PHPMailer(true);

    try {
        $mail->setFrom($email);
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $message;

        // Uncomment the next line if you want to send HTML emails
        // $mail->isHTML(true);

        $mail->send();
        echo "Email sent successfully!";
    } catch (Exception $e) {
        echo "Error sending email: " . $mail->ErrorInfo;
    }
} else {
    echo "Invalid request.";
}
?>