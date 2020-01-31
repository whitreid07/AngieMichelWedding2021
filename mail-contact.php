<?php 

	$to = ""; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_name = $_POST['name'];
	$services = $_POST['services'];
	$guest = $_POST['guest'];
	$notes = $_POST['notes'];


	$subject = "Form submission";
	$message = $sender_name . " has send the contact message! The number of gustes of his / her is : " .  $guest . " and his / her selected services is " . $services . ". He / she worte the following... ". "\n\n" . $notes;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>