<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['country']) 		||
   empty($_POST['bid'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['country'];
$message = $_POST['bid'];
	
// create email body and send it	
$to = 'shawn.buckles@gmail.com'; // put your email
$email_subject = "Nieuw bod op data";
$email_body =   "\n \nOrganisatie: $name \n ".
				"Land: $country\n  \n $bid";
$headers = "From: eenzaam@shawnbuckles.nl\n";
mail($to,$email_subject,$email_body,$headers);
return true;			
?>