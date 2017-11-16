<?php
	
	include '../includes/init.php';
	
	 logged_in_redirect();
	
	if (empty($_POST) === false) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		if (empty($username) || empty($password)) {
			$errors[] = 'You need to enter an username and/or password.';
		} else if (!user_exists($username)) {
			$errors[] = 'Username doesn\'t exist.';
		} else if (!user_active($username)) {
			$errors[] = 'Account is not active.';
		} else {
			
			if (strlen($password) > 32) {
				$errors[] = 'Paswword is to long.';
			}
			
			$login = login($username, $password);
				if ($login === false) {
					$errors[] = 'Username / password combination is incorrect.';
				} else {
					$_SESSION['user_id'] = $login;
					header('Location: index.php');
					exit();
				}
		}
	} else {
		$errors[] = 'No errors recieved';
		//header('Location: index.php');
	}	
	include("../includes/layouts/loginHeader.php");
	require_once("js/loginEffect.js");
	include 'aside.php';
	
	
	if (!empty($errors)) {
?>
<div class="loginErrors" >
<?php		
	echo '- ' . output_errors($errors);
	}
	
?>	
</div>
<?php
	if (!logged_in()) {
		include("../includes/layouts/footerIndex.php");
	} else {
		include("../includes/layouts/footer.php");
	}
?>