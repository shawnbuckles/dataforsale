<?php
// check if fields passed are empty
if(empty($_POST['organization'])  		||
   empty($_POST['country']) 		||
   empty($_POST['bid'])	||
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['organization'];
$email_address = $_POST['country'];
$message = $_POST['bid'];
	
// create email body and send it	
$to = 'shawn.buckles@gmail.com'; // put your email
$email_subject = "Nieuw bod op data";
$email_body =   "\n \nOrganisatie: $name \n ".
				"Land: $country\n Bod: \n $bid";
$headers = "From: eenzaam@shawnbuckles.nl\n";
mail($to,$email_subject,$email_body,$headers);
return true;			
?>