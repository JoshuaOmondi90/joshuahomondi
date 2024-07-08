<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient email address
    $to = "joshuahochieng@gmail.com"; // Replace with your email address

    // Subject of the email
    $subject = "New Contact Form Submission";

    // Email content
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        $_SESSION['message'] = "Message sent successfully!";
    } else {
        $_SESSION['message'] = "Failed to send message.";
    }

    // Redirect back to the contact page
    header("Location: index.php#contact");
    exit;
} else {
    $_SESSION['message'] = "Invalid request.";
    header("Location: index.php#contact");
    exit;
}
?>
