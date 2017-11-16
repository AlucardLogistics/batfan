<?php 
	include '../includes/init.php'; 
	//logged_in_redirect();
	include '../includes/layouts/loginHeader.php';
?>
<br />
<h1>Recover</h1>
<?php 
	if(isset($_GET['success']) === true && empty($_GET['success']) === true) {
?>
	<p>Recovery data has been emailed to you.</p>
<?php
	
	} else {
			$mode_allowed = array('username', 'password');
		if(isset($_GET['mode']) === true && in_array($_GET['mode'], $mode_allowed) === true) {
			if(isset($_POST['email']) === true && empty($_POST['email']) === false) {
				if(email_exists($_POST['email']) === true) {
					recover($_GET['mode'], $_POST['email']);
					header('Location: recover.php?success');
					exit();
				} else {
					echo 'Email not found';
				}
			}	
	?>

	<form action="" method="POST" id="recoverUsername" onmouseover="shadeChangePassOn()" onmouseout="shadeChangePassOff()">
	<fieldset>
	<legend> Recover Username: </legend>
		<ul class="recoverUser_form">
			<li> 
				Pease enter your email address:
			</li><br />
			<li> 
				<input type="text" name="email" class="infoInput" />
			</li> <br />
		</ul>	
		<input name="Submit" type="submit" value="Recover" id="changeSub" /> 
		<a href="index.php">
		<input name="button" type="button" value="Back" id="res" />
		</a>
	</fieldset>
	</form>

	<?php		
		}  else {
			header('Location: index.php');
			exit();
		}
	}
?>
<?php include '../includes/widgets/footerIndex.php'; ?>
