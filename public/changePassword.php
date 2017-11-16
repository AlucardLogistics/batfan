<?php 
	include '../includes/init.php'; 
	protect_page();
?>
<?php 
	if (empty($_POST) === false) {
		$required_fields = array('current_password', 'password', 'repassword');
		foreach ($_POST as $key => $value) {
			if (empty($value) && in_array($key, $required_fields) === true) {
				$errors[] = 'Fields marked with * are required.';
				break 1;
			}
		}	
		if($user_data['password'] === md5($_POST['current_password'])) {
			if(trim($_POST['password']) !== trim($_POST['repassword'])) {
				$errors[] = 'New passwords do not match';
			} else if (strlen($_POST['password']) < 6 || strlen($_POST['password']) > 32) {
				$errors[] = 'Password must be between 6 and 32 characters long.';
			}
		} else {
			$errors[] = 'Your current password is incorrect.';
		}
	}
?>
<form action="changePassword.php" method="POST" id="changePass" onmouseover="shadeChangePassOn()" onmouseout="shadeChangePassOff()">
<fieldset>
<legend> Change Password</legend>
	<ul class="reg_form">
		<li> 
			<label class="change_pass" for="current_password">Password*:</label>
			<input type="password" name="current_password" class="infoInput" />
		</li> <br />
		<li> 
			<label class="change_pass" for="password">New Password*:</label>
			<input type="password" name="password" class="infoInput" />
		</li> <br />
		<li> 
			<label class="change_pass" for="repassword">Re-Password*:</label>
			<input type="password" name="repassword" class="infoInput" />
		</li>
	</ul>	
	<input name="Submit" type="submit" value="Submit" id="changeSub" /> 
	<a href="index.php">
	<input name="button" type="button" value="Back" id="res" />
	</a>
</fieldset>
</form>

<?php 
	if(isset($_GET['success']) === true && empty($_GET['succes']) === true) {
?>
	<div class="change_pass_errors"><b>
<?php	
		echo 'Your password have been changed!';
?>
	</b></div>
<?php
	} else {
		if(isset($_GET['force']) === true && empty($_GET['force']) === true) {
			$errors[] = 'You must change your password!';
		}
		if(empty($_POST) === false && empty($errors) === true) {
			
			change_password($session_user_id, $_POST['password']);
			header('Location: changePassword.php?success');
		} else if (empty($errors) === false) {
?>
<div class="change_pass_errors">
<?php
		echo output_errors($errors);
	}
?>
</div>
<?php 	
		}
	require_once("js/loginEffect.js");
	include 'aside.php'; 
?>
