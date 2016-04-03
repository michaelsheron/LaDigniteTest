<?php

$errors = array(); // array to hold validation errors
$data = array(); // array to pass back data
// validate the variables ======================================================
// if any of these variables don't exist, add an error to our $errors array
if (empty($_POST['name']))
$errors['name'] = 'Name is required.';
if (empty($_POST['email']))
$errors['email'] = 'Email is required.';
if (empty($_POST['superheroAlias']))
$errors['superheroAlias'] = 'Superhero alias is required.';
// return a response ===========================================================
// if there are any errors in our errors array, return a success boolean of false
if ( ! empty($errors)) {
// if there are items in our errors array, return those errors
$data['success'] = false;
$data['errors'] = $errors;
} else {
// if there are no errors process our form, then return a message
// DO ALL YOUR FORM PROCESSING HERE
// THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)
// show a message of success and provide a true success variable

$name = 'ralf';
$email_address = 'bburton@ladigniteglobal.org';
$message = 'some message';
//print($name);
//echo(" name printed");
//
//
//// create email body and send it
$to = 'bburton@ladigniteglobal.org';
$email_subject = "Contact form submitted by: $name";
$email_body = "You have received a new message. \n\n".
" Here are the details:\n \nName: $name \n ".
"Email: $email_address\n Message \n $message";
$headers = "From: info@ladigniteglobal.org\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);

$data['success'] = true;
$data['message'] = 'Success!';
}
// return all our data to an AJAX call
echo json_encode($data);




// check if fields passed are empty
//if(empty($_POST['name']) ||
//empty($_POST['email']) ||
//empty($_POST['message'])	||
//!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//{
	//echo "No arguments Provided!";
	//return false;
//}


//$name = $_POST['name'];
//$email_address = $_POST['email'];
//$message = $_POST['message'];
//print($name);
//echo(" name printed");
////
////
////// create email body and send it
//$to = 'bburton@ladigniteglobal.org';
//$email_subject = "Contact form submitted by: $name";
//$email_body = "You have received a new message. \n\n".
//" Here are the details:\n \nName: $name \n ".
//"Email: $email_address\n Message \n $message";
//$headers = "From: info@ladigniteglobal.org\n";
//$headers .= "Reply-To: $email_address";	
//mail($to,$email_subject,$email_body,$headers);
//return true;	
?>