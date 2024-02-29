<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $query = $_POST["query"];

    // Set recipient email address
    $to = "support@techaizen.com";

    // Set subject
    $subject = "New Contact Form Submission";

    // Build the email message
    $message = "Full Name: $full_name\n";
    $message .= "Email: $email\n";
    $message .= "Query:\n$query";

    // Set additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=utf-8\r\n";

    // Attempt to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email. Please try again later.";
    }
} else {
    // Redirect if accessed directly
    header("Location: index.html");
    exit();
}
?>