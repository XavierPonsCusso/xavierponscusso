<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $message = $_POST['message'];
  $to = 'xavierponscusso@gmail.com'; // replace with your email address
  $subject = 'If you want a response, please provide some contact form.';
  $headers = 'From: '.$name.' <'.$to.'>'."\r\n".'Reply-To: '.$to."\r\n".'X-Mailer: PHP/'.phpversion();
  mail($to, $subject, $message, $headers);
  echo 'Done!';
} else {
  echo 'Error: Just contact to xavierponscusso@gmail.com.';
}
?>