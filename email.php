<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "your-email@example.com"; // Your email address
    $subject = "Website Contact Form";
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>