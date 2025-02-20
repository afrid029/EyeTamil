<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require '../vendor/autoload.php';
// require 'C/PHPMailer/src/Exception.php';
// require '/Controllers/PHPMailer/src/Exception.php';
require './PHPMailer/src/Exception.php';
// require './PHPMailer/src/PHPMailer.php';
// require '/Controllers/PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/PHPMailer.php';
// require './PHPMailer/src/SMTP.php';
// require '/Controllers/PHPMailer/src/SMTP.php';
require './PHPMailer/src/SMTP.php';


if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $description = $_POST['description'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();  // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Set the SMTP server to send through (e.g., Gmail, Mailgun, etc.)
        $mail->SMTPAuth = true;  // Enable SMTP authentication
        $mail->Username = 'massdesignit@gmail.com';  // SMTP username (email)
        $mail->Password = '';  // SMTP password -- App Password from Gmail 2FA
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` for SSL
        $mail->Port = 587;  // SMTP port (587 for TLS, 465 for SSL)

        //Recipients
        $mail->setFrom($email, $name);  // Set the sender's email address and name
        $mail->addAddress('massdesignit@gmail.com', 'Eye Tamil FM');  // Add recipient's email address and name
        //$mail->addReplyTo('another_email@example.com', 'Reply-to Name');  // Optional: Set a reply-to email address

        //Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'New Sponsor | Eye Tamil FM ';
        $mail->Body    = "<h4>Hi Eye Tamil FM,</h4>
                            <h4>You have received message from $name from $company company</h4>
                            <h4>Message : </h4>
                            <h4 style = 'font-style: italic; opacity: 0.8'> \" $description \"</h4>
                            
                            <h4>With Regards,<br>$name<br>$company<br>$contact<br>$email.</h4>";

        if ($mail->send()) {
            // echo 'Message has been sent';
    
            echo json_encode([
                'status' => true,
                'message' => 'Thanks for reaching us. We will get back to you shortley!'
            ]);
            
        } else {
      
        
            echo json_encode([
                'status' => false,
                'message' => $mail->ErrorInfo
            ]);
           
        }
    } catch (Exception $e) {
        // Catch any exceptions
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        // $_SESSION['message'] = $mail->ErrorInfo;
        // $_SESSION['status'] = false;
        // $_SESSION['fromAction'] = true;
        // header("Location: /");

        echo json_encode([
            'status' => false,
            'message' => $mail->ErrorInfo
        ]);
    }

}else {
    header('Location: /');
    exit();
}
?>