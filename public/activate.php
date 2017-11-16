<?php 
	include '../includes/init.php'; 
	logged_in_redirect();
	include("../includes/layouts/loginHeader.php"); 
?>

<?php

	if(isset($_GET['success']) === true && empty($_GET['success']) === true) {
?>
<div class="registerSuccess">
<?php
		echo 'You have been successfully activated. <br />';
?>
	<br />
	<a href="index.php">Back to Log In</a>
</div>
<?php
	} else if(isset($_GET['email'], $_GET['email_code'])) {
		$email       = trim($_GET['email']);
		$email_code  = trim($_GET['email_code']);
		
		if(email_exists($email) === false) {
			$errors[] = 'Can\'t find that bloody email address.';
		} else if(activate($email, $email_code) === false) {
			$errors[] = 'We had problems activation your account';
		}
		
		if(empty($errors) === false) {
?>
	<div class="activateErrors">
<?php			
			echo output_errors($errors);
?>
<?php			
		} else {
			header('Location: activate.php?success');
			exit();
		}
			
	} else {
		header('Location: index.php');
		exit();
	}
?>
	
	
	
	
<?php include("../includes/layouts/footerIndex.php"); ?>