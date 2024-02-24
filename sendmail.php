<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Replace "your-email@example.com" with your actual email address
    $to = "support@techaizen.com";
    $subject = "New Contact Form Submission";
    
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $query = $_POST["query"];

    $message = "Name: $full_name\nEmail: $email\nQuery: $query";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>