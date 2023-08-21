<?php
use phpmailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php'; // Include the PHPMailer library
require 'phpmailer/src/PHPMailer.php'; 
require 'phpmailer/src/SMTP.php'; 

if (isset($_POST['approve'])) {
    $to=$_POST['approve'];
    sendEmail($to, 'Your Job Application Approval', 'Congratulations! Your job application has been approved.');
    // echo "Approval email sent.";
     header("Location:\Sammer\student_register\admin\showintership.php");
} elseif (isset($_POST['reject'])) {
   $to=$_POST['reject'];
    sendEmail($to, 'Your Job Application Rejection', 'We regret to inform you that your job application has been rejected.');
   // echo "Rejection email sent.";
    header("Location:\Sammer\student_register\admin\showintership.php");

}


function sendEmail($recipient, $subject, $message) {
    $mail = new PHPMailer;
    $mail->isSMTP(); // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com'; // Specify SMTP server
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = 'narayan111thakare@gmail.com'; // SMTP username
    $mail->Password = 'xanvlqbjfbnxwulv'; // SMTP password
    $mail->SMTPSecure = 'ssl'; // Enable encryption, 'ssl' also accepted
    $mail->Port = 465; // TCP port to connect to

    $mail->setFrom('narayan111thakare@gmail.com', 'Narayan');
    $mail->addAddress($recipient);
    $mail->Subject = $subject;
    $mail->Body = $message;

    if (!$mail->send()) {
        echo 'Email could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>