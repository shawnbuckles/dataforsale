<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['country']) 		||
   empty($_POST['message'])	||
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$country = $_POST['country'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'shawn.buckles@gmail.com'; // put your email
$email_subject = "Contact form submitted by:  $name";
$email_body = "You have received a new message. \n\n".
				  " Here are the details:\n \nName: $name \n ".
				  "Email: $country\n Message \n $message";
$headers = "From: contacts@myprogrammingblog.com\n";
mail($to,$email_subject,$email_body,$headers);
return true;			
?>