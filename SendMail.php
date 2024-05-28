<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'path/to/PHPMailer/src/Exception.php';
// require 'path/to/PHPMailer/src/PHPMailer.php';
// require 'path/to/PHPMailer/src/SMTP.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = htmlspecialchars($_POST['name']);
//     $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
//     $message = htmlspecialchars($_POST['message']);
//     $to = "nguy4359@umn.edu";
//     $subject = "Contact Form Submission from $name";

//     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $mail = new PHPMailer(true);
//         try {
//             //Server settings
//             $mail->isSMTP();
//             $mail->Host = 'smtp.example.com'; // Set the SMTP server to send through
//             $mail->SMTPAuth = true;
//             $mail->Username = 'your-email@example.com'; // SMTP username
//             $mail->Password = 'your-email-password'; // SMTP password
//             $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
//             $mail->Port = 587;

//             //Recipients
//             $mail->setFrom('your-email@example.com', 'Webmaster');
//             $mail->addAddress($to);

//             // Content
//             $mail->isHTML(true);
//             $mail->Subject = $subject;
//             $mail->Body = nl2br("Name: $name\nEmail: $email\n\nMessage:\n$message");

//             $mail->send();
//             echo 'Message has been sent';
//         } catch (Exception $e) {
//             echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//         }
//     } else {
//         echo "Invalid email address.";
//     } else {
//         echo "Invalid request.";
//     }
// }
//test code
if (mail("nguy4359@umn.edu", "Test email", "This is a test email message.", "From: your-email@example.com")) {
    echo "Test email sent.";
} else {
    echo "Failed to send test email.";
}

?>


