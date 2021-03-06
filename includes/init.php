<?php
	session_start();
	//turn erros off in the browser
	//error_reporting(0);

	include 'connect.php';
	include 'functions/general.php';
	include 'functions/users.php';
	include 'functions/chat.php';
	
	$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
	$current_file = end($current_file);
	
	if (logged_in()) {
		$session_user_id = $_SESSION['user_id'];
		$user_data = user_data($session_user_id, 'user_id', 'username', 'password', 'first_name', 'last_name', 'email', 'password_recover', 'type', 'allow_email', 'profile');
		if(user_active($user_data['username']) === false) {
			session_destroy();
			header('Location: index.php');
			exit();
		}
		
		if($current_file !== 'changePassword.php' && $current_file !== 'logout.php' && $user_data['password_recover'] == 1) {
			header('Location: ../public/changePassword.php?force');
			exit();
		}
	}
	
	//error_reporting(E_ALL);
	//ini_set("display_errors", 1);
	$errors = array();
?>