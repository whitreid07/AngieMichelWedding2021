<?php 

	$to = "welcometotheam@welcometotheam.com"; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_name = $_POST['name'];
	$events = $_POST['events'];
	$guest_name = $_POST['guest_name'];
	$your_meal = $_POST['your_meal'];
	$guest_meal = $_POST['guest_meal'];
  $allergies = $_POST['allergies'];
  $guest_allergies = $_POST['guest_allergies'];
  $drinking = $_POST['drinking'];
  $guest_drinking = $_POST['drinking'];
  $alcohol_preference = $_POST['alcohol_preference'];
  $guest_alcohol_preference = $_POST['guest_alcohol_preference'];
  $need_accommodations = $_POST['need_accommodations'];
  $guest_accommodations = $_POST['guest_accommodations'];
	$notes = $_POST['notes'];


	$subject = "Angie & Michel's Wedding 2020 Form submission";
	$message = $sender_name . " is attending: " . $events . "\n\n". "Guest name is: " . $guest_name . "\n\n". "Your meal is: " . $your_meal . "\n\n". "Guest meal is: " . $guest_meal . "\n\n". "Do you have allergies? " . $allergies . "\n\n". "Does your guest have allergies? " . $guest_allergies . "\n\n". "Are you drinking? " . $drinking . "\n\n". "Is your guest drinking? " . $guest_drinking . "\n\n". "Your alcohol preference is: " . $alcohol_preference . "\n\n". "Guest alcohol preference is: " . $guest_alcohol_preference . "\n\n". "Do you need accommodations? " . $guest_accommodations . "\n\n". "Does your guest need accommodations? " .  $need_accommodations. "\n\n". "Any additional info or song requests? " .$notes;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);
?>