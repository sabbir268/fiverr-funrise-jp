<?php
session_start();
require_once('sendmail.php');
if (isset($_POST)) {
  $message = "<html>
        <head>
        <title>Contact form infomrmation</title>
        </head>
        <body>
        <table>
        <tr>
        <th>Full Name</th>
        <th>" . $_POST['name'] . "</th>
        </tr>
        <tr>
        <td>Email</td>
        <td>" . $_POST['email'] . "</td>
        </tr>
        <tr>
        <td>Message</td>
        <td>" . $_POST['message'] . "</td>
        </tr>
        </table>
        </body>
        </html>";

  $mail = sendMail("Contact form data", $_POST['email'], "contact@jplegalfunding.co", $message);

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
