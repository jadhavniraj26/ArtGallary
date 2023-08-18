<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $artType = $_POST["art_type"];
    $description = $_POST["description"];
    $deadline = $_POST["deadline"];
    $budget = $_POST["budget"];

    // You can now process this data, save it to a database, send emails, etc.

    // For example, sending an email to notify about the request:
    $to = "admin@example.com";
    $subject = "New Custom Artwork Request";
    $message = "Name: $name\nEmail: $email\nArtwork Type: $artType\nDescription: $description\nDeadline: $deadline\nBudget: $budget";
    mail($to, $subject, $message);

    echo "Request submitted successfully. We will get in touch with you soon!";
}
?>
