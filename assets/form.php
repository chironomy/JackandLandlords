<?php $text = $_POST['text'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $text \n Message: $message";
$recipient = "samuelbsisson@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>