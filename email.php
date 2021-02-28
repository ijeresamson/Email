<?php
$to = 'ijereifeanyi5@gamil.com';
$subject = 'This is an email';
$body = 'This is a test email'. "n/n". 'sending hope it went well.';
$header = 'From: SAMSON THE DEVELOPER <ijereifeanyisamson@gmail.com>';

if (@mail($to, $subject, $body, $header)) {
	echo "Email sent";
}else{
	echo "There is an error sending email";
}









?>