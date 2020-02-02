<?php 

	$to = "whitney.reid.codes@gmail.com"; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_name = $_POST['name'];
  $attending = $_POST['attending'];
	$guests = $_POST['guest'];
  $menuGuestOne = $_POST['menuGuestOne'];
  $menuGuestTwo = $_POST['menuGuestTwo'];
  $allergies = $_POST['allergies'];
  $drinking = $_POST['drinking'];
  $drinkingAnswer = $_POST['drinkingAnswer'];
  $hotel = $_POST['hotel'];
	$notes = $_POST['notes'];

	$subject = "Form submission";
	$message = $sender_name . " has send the contact message! The number of gustes of his / her is : " .  $guest . " and his / her selected services is " . $services . ". He / she worte the following... ". "\n\n" . $notes;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);

?>