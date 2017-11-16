<?php 
	include '../includes/init.php';
	protect_page();
	
	if(empty($_POST) === false) {
		$required_fields = array('first_name', 'email');
		//echo '<pre>', print_r($_POST, true), '</pre>';
		foreach ($_POST as $key => $value) {
			if (empty($value) && in_array($key, $required_fields) === true) {
				$errors[] = 'Fields marked with * are required.';
				break 1;
			}
		}	
		if(empty($errors) === true) {
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
				$errors[] = 'Email not vaild.';
			} else if(email_exists($_POST['email']) === true && $user_data['email'] !== $_POST['email']) {
				$errors[] = 'The email \'' . $_POST['email'] . '\' is already in use.';
			}
		}
	}
?>

<form action="changeUserInfo.php" method="POST" id="changeUserInfo" onmouseover="shadeChangeUIOn()" onmouseout="shadeChangeUIOff()">
<fieldset>
<legend> Change User Info:</legend>
	<ul class="reg_form">
		<li> 
			<label class="change_user_info" for="first_name">First Name*:</label>
			<input type="text" name="first_name" value="<?php echo $user_data['first_name']; ?>" class="infoInput" />
		</li> <br />
		<li> 
			<label class="change_user_info" for="last_name">Last Name :</label>
			<input type="text" name="last_name" value="<?php echo $user_data['last_name']; ?>" class="infoInput" />
		</li> <br />
		<li> 
			<label class="change_user_info" for="email">Email*:</label>
			<input type="text" name="email" value="<?php echo $user_data['email']; ?>" class="infoInput" />
		</li>
		<li>
		<p class="allow_email">
		<input type="checkbox" name="allow_email" <?php if($user_data['allow_email'] == 1) { echo 'checked="checked"';} ?>/>
		Would you like to recieve updates trough email?</p>
		</li>
		
	</ul>	
	<br />
	<input name="Submit" type="submit" value="Submit" id="changeUI" /> 
	
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
		echo 'Your user info have been updated!';
?>
	</b></div>
<?php
	} else {
		if(empty($_POST) === false && empty($errors) === true) {

			$update_data = array(
				'first_name'   => $_POST['first_name'],
				'last_name'    => $_POST['last_name'],
				'email'        => $_POST['email'],
				'allow_email'  =>($_POST['allow_email'] == 'on') ? 1 : 0
			);
			

			update_user($session_user_id, $update_data);
			header('Location: changeUserInfo.php?success');
			exit();
			
		} else if(empty($errors) === false) {
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