<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate input (you can add more validation as needed)

    // Email configuration
    $to = "noormashraaf@gmail.com"; // Replace with your email address
    $subject = "New Message from $name";
    $headers = "From: $email\r\nReply-To: $email";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // Redirect to a thank-you page or show a success message
    header("Location: thank-you.html");
    exit();
}
?>
