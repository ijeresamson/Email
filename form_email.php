<?php
if(filter_has_var(INPUT_POST, 'contact_email')){
	$contact_email = $_POST['contact_email'];
// remove illegal chars
$contact_email = filter_var($contact_email, FILTER_SANITIZE_EMAIL);
echo $contact_email. '<br>';
if(filter_var($contact_email, FILTER_VALIDATE_EMAIL)){
	echo 'Email is valid';
} else{
	echo 'Email is not valid';
}
}


if(isset($_POST['contact_name']) && isset($_POST['contact_email']) && isset($_POST['contact_text'])) {
	$contact_name = $_POST['contact_name'];
	$contact_email = $_POST['contact_email'];
	$contact_text = $_POST['contact_text'];
	
	if(!empty($contact_name) && !empty($contact_email) && !empty($contact_text)) {
	if(strlen($contact_name)>25 || strlen($contact_email)>50 || strlen($contact_text)>1000)	{
		
	}else{
		
$to = 'ijereifeanyi5@gamil.com';
$subject = 'Contact from submitted.';
$body = $contact_name."\n". $contact_text;
$header = 'From: '.$contact_email;

if (@mail($to, $subject, $body, $header)) {
	echo "Thanks for contacting us. We\'ll be in touch soon.";
}else{
	echo "Sorry. there is an error, try again later";
	}
	}
	}else{
		echo "Field must not be empty";
	}
}
	
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<label>Name:</label><br>
<input type="text" name="contact_name" maxlength="25"> <br><br>

<label>Email adderss:</label>	<br>
<input type="text" name="contact_email" maxlength="50"><br><br>

<label>Message:</label><br>
<textarea name="contact_text" rows="6" cols="30" maxlength="1000"></textarea> <br><br>

<input type="submit" value="Send">	
</form>









