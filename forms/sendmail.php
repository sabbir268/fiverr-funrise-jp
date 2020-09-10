<?php
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;


function sendMail($subject, $from = "sendmail@jplegalfunding.co", $sentTo, $body)
{

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <' . $from . '>' . "\r\n";

    $mail = mail($sentTo, $subject, $body, $headers);

    if ($mail == 'success') {
        $_SESSION['status'] = 'ok';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['status'] = 'error';
        echo "Something went wrong <br> redirecting......";
        sleep(3);
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}

// sabbir@112358
