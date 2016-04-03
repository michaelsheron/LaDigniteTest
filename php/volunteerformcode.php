<?php
if (isset($_POST['email'])) {
	$fname = $_POST['fname'];
	$org = $_POST['org'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$ph = $_POST['ph'];
	$interests = $_POST['interests'];
	
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$email = $_POST['email'];
	$skills = $_POST['skills'];
	
	$message = $_POST['message'];
	
	// create email body and send it
	
	$to = 'info@ladigniteglobal.org';
	$to2 = 'info@ladigniteglobal.org';
	$email_subject = "Contact form submitted by: $name";
	$email_body = "You have received a new message. \n\n".
	"Here are the details:\n\n".
	"First Name: $fname\n".
	"Last Name: $lname\n".
	"Organization: $org\n".
	"Address: $address\n".
	"City: $city\n".
	"State: $state\n".
	"Country: $country\n".
	"Zip: $zip\n".
	"Phone: $ph\n".
	"Email: $email\n".
	"Interests: $interests\n".
	"Skills: $skills\n".
	"Message: \n\n$message";
	$headers = "From: info@ladigniteglobal.org\n";
	$headers .= "Reply-To: $email";	
	mail($to,$email_subject,$email_body,$headers);
	mail($to2,$email_subject,$email_body,$headers);
}
?>