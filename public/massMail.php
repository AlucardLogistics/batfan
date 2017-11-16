<?php 
	include '../includes/init.php';
	protect_page();
	admin_protect();
	
?>
<br />
<h1>Mass Email</h1>

<?php
	if(isset($_GET['success']) === true && empty($_GET['success']) === true) {
?>
	<p>Emails have been sent</p>
<?php		
	} else {
		if(empty($_POST) === false) {
			
			if(empty($_POST['subject']) === true) {
				$errors[] = 'Subject is required';
			}
			
			if(empty($_POST['body'])) {
				$errors[] = 'Body is required';
			}
			
			if(empty($errors) === false) {
				echo output_errors($errors);
			} else {
				mail_users($_POST['subject'], $_POST['body']);
				header('Location: massMail.php?success');
				exit();
			}
		}
	?>

	<form action="massMail.php" method="POST" id="massMail" onmouseover="shadeMassMailOn()" onmouseout="shadeMassMailOff()">
	<fieldset>
	<legend> Email all users</legend>
		<ul class="reg_form">
			<li> 
				<label class="mass_mail" for="subject">Subject:</label>
				<input type="text" name="subject" value="" class="infoInput" />
			</li> <br />
			<li> 
				<label class="mass_mail" for="body">Body:</label>
				<textarea name="body" class="infoInput"></textarea>
			</li>
		</ul>
		<input name="Submit" type="submit" value="Send" id="changeUI" /> 
		<a href="index.php">
			<input name="button" type="button" value="Back" id="res" />
		</a>
	</fieldset>
	</form>


<?php 
	}
	include 'aside.php'; 
?>
