
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    
    .login-container {
      max-width: 600px;
      margin: 0 auto;
      margin-top: 40px;
      margin-bottom: 90px;

      padding: 20px;
      border-radius: 10px;
      background-color: #fff;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
<?php  require_once 'header.php'; ?>


  <div class="login-container">
  

    <center><h1>Contact Us</h1></center>
    <form  method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script> -->
  <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  
</body>
</html>
<?php
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls'; // Use 'ssl' if required by your SMTP server
        $mail->Port = 587; // Use the appropriate port for your SMTP server

        // SMTP authentication credentials
        $mail->Username = '18project03@gmail.com'; // Replace with your email address
        $mail->Password = 'qkiswsrxmprjxucb'; // Replace with your email password

        // Set sender and recipient
        $mail->setFrom($email, $name);
        $mail->addAddress('18project03@gmail.com'); // Replace with the recipient's email address

        // Email subject and body
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "Name: $name\nEmail: $email\n\n$message";

        // Send the email
        if ($mail->send()) {
            echo '<script>swal("Good job!", "Message Send Successfully !", "success");</script>';
        } else {
            echo '<script>swal("Oops!", "Something went wrong, Retry Again!", "error");</script>';
        }
    } catch (Exception $e) {
        
        echo '<script>swal("Oops!", "Something went wrong, Retry Again!", "error");</script>';

    }
}
?>


