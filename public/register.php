<?php include '../includes/init.php'; ?>
<?php  logged_in_redirect(); ?>
<?php include("../includes/layouts/loginHeader.php"); ?>

<?php 
	if(empty($_POST) === false) {
		$required_fields = array('username', 'password', 're_password', 'first_name', 'email');
		//echo '<pre>', print_r($_POST, true), '</pre>';
		foreach ($_POST as $key => $value) {
			if (empty($value) && in_array($key, $required_fields) === true) {
				$errors[] = 'Fields marked with * are required.';
				break 1;
			}
		}		
	}
	
	if(empty($errors)) {
		if(user_exists($_POST['username']) === true ) {
			$errors[] = 'The username \'' . $_POST['username'] . '\' is already taken.';
		}
		if(preg_match("/\\s/", $_POST['username']) == true) {
			$errors[] = 'Username must not contain any spaces.';
		}
		if(strlen($_POST['password']) < 6 || strlen($_POST['password']) > 32) {
			$errors[] = 'Password must be between 6 and 32 characters long.';
		}
		if($_POST['password'] !== $_POST['re_password']) {
			$errors[] = 'Password and Re-Password does not match.';
		}
		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = 'Email not vaild.';
		}
		if(email_exists($_POST['email']) === true) {
			$errors[] = 'The email \'' . $_POST['email'] . '\' is already in use.';
		}
	} 
?>

<?php

	if(isset($_GET['success']) && empty($_GET['success'])) {
?>
<div class="registerSuccess">
<?php
		echo 'You have been successfully registerd. <br />';
		echo 'Check your email to activate your account.';
?>
	<br />
	<a href="index.php">Back to Log In</a>
</div>
<?php
	} else {
 
		if(empty($_POST) === false && empty($errors) === true) {
			$register_data = array(
				'username'    => $_POST['username'],
				'password'    => $_POST['password'],
				'first_name'  => $_POST['first_name'],
				'last_name'   => $_POST['last_name'],
				'email'       => $_POST['email'],
				'email_code'  => md5($_POST['username'] + microtime())
			);
			
			register_user($register_data);
			header('Location: register.php?success');
			exit();
		}
		else {
?>
	<div class="registerErrors" >
<?php
		echo output_errors($errors);
	}
?>
	</div>

<?php require_once("js/loginEffect.js"); ?>	
<?php include '../includes/widgets/loginForm.php'; ?>
<form action="../public/register.php" method="POST" id="register" onmouseover="shadeOnReg()" onmouseout="shadeOffReg()">
<fieldset>
<legend> Become a Member </legend>
	<ul>
		<li> 
			<label for="username">Username*:</label>
			<input type="text" name="username" class="infoInput" />
		</li> <br />
		<li> 
			<label for="password">Password*:</label>
			<input type="password" name="password" class="infoInput" />
		</li> <br />
		<li> 
			<label for="re_password">Re-Password*:</label>
			<input type="password" name="re_password" class="infoInput" />
		</li> <br />
		<li>
			<label for="firstName">First Name*:</label>
			<input type="text" name="first_name" class="infoInput" />
		</li> <br />
		<li>
			<label for="lastName">Last Name :</label>
			<input type="text" name="last_name" class="infoInput" /> 
		</li> <br />
		<li>
			<label for="lastName">Email*:</label>
			<input type="text" name="email" class="infoInput" />
		</li>
	</ul>
	<input type="submit" value="Register" id="reg" /> 
	<input type="reset" value="Reset" id="res" />
</fieldset>
</form>


<?php
	}
	include("../includes/layouts/footerIndex.php"); ?>