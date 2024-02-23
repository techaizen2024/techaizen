<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "support@techaizen.com";
    $subject = "New Contact Form Submission";
    $message = "Name: " . $_POST["full_name"] . "\nEmail: " . $_POST["email"] . "\nQuery: " . $_POST["query"];
    $headers = "From: " . $_POST["email"];

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>