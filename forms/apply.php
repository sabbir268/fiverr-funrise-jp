<?php
session_start();
require_once('sendmail.php');

if (isset($_POST)) {
  $message = "
      <html>
        <head>
        <title>Contact form infomrmation</title>
        </head>
        <body>
        <table>
        <tr>
        <td>First Name</td>
        <td>" . $_POST['first_name'] . "</td>
        </tr>
        <tr>
        <td>Last Name</td>
        <td>" . $_POST['last_name'] . "</td>
        </tr>
        <tr>
        <td>Case Type</td>
        <td>" . $_POST['case_type'] . "</td>
        </tr>
        <td>Case Type If Other</td>
        <td>" . $_POST['case_type_other'] . "</td>
        </tr>
        <tr>
        <td>Need amount</td>
        <td>" . $_POST['amount'] . "</td>
        </tr>
        <tr>
        <td>Street Address</td>
        <td>" . $_POST['street'] . "</td>
        </tr>
        <tr>
        <td>City</td>
        <td>" . $_POST['city'] . "</td>
        </tr>
        <tr>
        <td>State</td>
        <td>" . $_POST['state'] . "</td>
        </tr>
        <tr>
        <td>State </td>
        <td>" . $_POST['zipcode'] . "</td>
        </tr>
        <tr>
        <td>Email</td>
        <td>" . $_POST['email'] . "</td>
        </tr>
        <tr>
        <td>Phone</td>
        <td>" . $_POST['phone'] . "</td>
        </tr>
        
    </table>
  </body>
  </html>";



  $mail = sendMail("Apply for legal funding", $_POST['email'], "josepharmato5@gmail.com", $message);

  if ($mail == 'success') {
    $_SESSION['status'] = 'ok';
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  } else {
    $_SESSION['status'] = 'error';
    echo "Something went wrong <br> redirecting......";
    sleep(3);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  }
} else {
  $_SESSION['status'] = 'error';
  echo "Something went wrong <br> redirecting......";
  sleep(3);
  header('Location: ' . $_SERVER['HTTP_REFERER']);
}
