<?php

$recipient = "youremail@domain.com";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
$time = $_POST['time'];
$seats = $_POST['seats'];
$message = $_POST['message'];
$subject = 'Table Reservation';

if(isset($_POST['email'])) {
  if(preg_match('(\w[-._\w]*\w@\w[-._\w]*\w\.\w{2,})', $_POST['email'])) {
    $msg = 'E-mail address is valid';
  } else {
    $msg = 'Invalid email address';
  }

  $ip = getenv('REMOTE_ADDR');
  $host = gethostbyaddr($ip);
  $mess = "Name: ".$name."\n";
  $mess .= "Email: ".$email."\n";
  $mess .= "Phone: ".$phone."\n";
  $mess .= "Date: ".$date."\n";
  $mess .= "Time: ".$time."\n";
  $mess .= "Seats: ".$seats."\n";
  $mess .= "Message: ".$message."\n\n";
  $mess .= "IP:".$ip." HOST: ".$host."\n";

  $headers = "From: <".$email.">\r\n";

  if(isset($_POST['url']) && $_POST['url'] == '') {

    $sent = mail($recipient, $subject, $mess, $headers);
  }
} else {
  die('Invalid entry!');
}
?>