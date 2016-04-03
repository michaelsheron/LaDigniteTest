<?php

if (isset($_POST['name'])) {
	$name = strip_tags($_POST['name']);
	$email = strip_tags($_POST['Email']);
	$message = strip_tags($_POST['sug']);
	echo "Name        =".$name."</br>";    
	echo "Email        =".$email."</br>";    
	echo "Message        =".$message."</br>";    
	echo "<span class=\"label label-info\" >your message has been submitted from php.. Thank you</span>"."</br>";
	
	$name = $_POST['name'];
	$email = $_POST['Email'];
	$message = $_POST['sug'];	
	
	echo "Name        =".$name."</br>";    
	echo "Email        =".$email."</br>";    
	echo "Message        =".$message."</br>";    
	echo "<span class=\"label label-info\" >your message has been submitted from php.. Thank you</span>";
	
	$to = 'info@ladigniteglobal.org';
	$email_subject = "Contact form submitted by: $name";
	$email_body = "You have received a new message. \n\n".
	" Here are the details:\n \nName: $name \n ".
	"Email: $email\n Message \n $message";
	$headers = "From: info@ladigniteglobal.org\n";
	$headers .= "Reply-To: $email";	
	mail($to,$email_subject,$email_body,$headers);
}

//
//print_r($_REQUEST);
//// $_REQUEST['name'] has to be an input name in the form. Yours probably has $_REQUEST['Name'] (notice "name" vs "Name")
//    if (isset($_REQUEST['name'])) {
//        $name = strip_tags($_REQUEST['name']);
//        $email = strip_tags($_REQUEST['email']);
//        $message= strip_tags($_REQUEST['message']);
//        echo "Name      =".$name."</br>";   
//        echo "Email     =".$email."</br>";  
//        echo "Message       =".$message."</br>";    
//        echo "<span class=\"label label-info\" >your message has been submitted .. Thank you</span>";
//    }
//
//print_r($_REQUEST);
//$name = $_POST['name'];
//$email_address = $_POST['email'];
//$message = $_POST['message'];
//
//$to = 'info@ladigniteglobal.org';
//$email_subject = "Contact form submitted by: $name";
//$email_body = "You have received a new message. \n\n".
//" Here are the details:\n \nName: $name \n ".
//"Email: $email_address\n Message \n $message";
//$headers = "From: info@ladigniteglobal.org\n";
//$headers .= "Reply-To: $email_address";	
//mail($to,$email_subject,$email_body,$headers);
//return true;	
?>
