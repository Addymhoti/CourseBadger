<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$subject = trim($_POST['subject']);
	$message = trim($_POST['message']);
	$email_to = "musimwaak@gmail.com";
	if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
		$name = htmlspecialchars($name);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo '<p class="flag">****Enter a valid email address****</p>';
		}
		$subject = htmlspecialchars($subject);
		$message = htmlspecialchars($message);
		$my_message = "$message. From $name Reply to: $email , sent from your websie at localhost.";
		mail($email_to, $subject, $my_message);
	}
	else{
		echo '<p class="flag">****Please fill in every field****</p>';
	}
}