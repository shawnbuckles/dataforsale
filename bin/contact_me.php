<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'shawn.buckles@gmail.com'; // put your email
$email_subject = "Nieuw bod op mijn ziel";
$email_body = "Iemand heeft een bod uitgebracht op jouw ziel. \n\n".
				  " De details:\n \nName: $name \n ".
				  "Email: $email_address\n Bod: $message";
$headers = "From: duivel@shawnbuckles.nl\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>