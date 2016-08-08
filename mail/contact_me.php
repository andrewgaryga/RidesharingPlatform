<?php
// Check for empty fields
if(empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$email_address = $_POST['email'];
$phone = $_POST['phone'];
	
	
// Create the email and send the message
$to = 'ponytale@meta.ua'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "BondRide Contact Form";
$email_body = "You have received a new message from your BondRide website contact form.\n\n"."Here are the details:\n\nEmail: $email_address\n\nPhone: $phone";
$headers = "From: noreply@bondride.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);

// send welcome email
$to = $email_address; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "BondRide Community Welcomes You!";
$email_body = "Hey there, \n\nWelcome to our world ☺.\n\nWe are very excited to have you as a part of the BondRide community. We founded BondRide because we wanted to create a trustworthy and inspiring place for you to connect with other travellers, reduce travel time and costs of your journey to and from airport.\n\nOur fantastic team are working tirelessly on the first version of the BondRide platform, and should be ready to launch in November. We will send you an email when everything is completed.\n\nUntil then, if you have any questions or concerns you can contact our support centre on customersupport@bondride.com\n\n"."\n\nSincerely,\n\nBondRide Team\n\nP.S. You can find us on Facebook and Twitter.";
$headers = "From: noreply@bondride.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: customersupport@bondride.com";	
mail($to,$email_subject,$email_body,$headers);

return true;			
?>