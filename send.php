<?php
require_once "Mail.php";
$from = "Sandra Sender <sender@example.com>";
$to = "Ramona Recipient <recipient@example.com>";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
$host = "mail.example.com";
$username = soundaryaquit@gmail.com;
$password = Angry birds;
$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));
$mail = $smtp->send($to, $headers, $body);
if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
 } else {
  echo("<p>Message successfully sent!</p>");
 }
?>