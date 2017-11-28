<?php

	function email($to, $subject, $body) {
		mail($to, $subject, $body, 'From: batzy@localcave.org');
	}

	function logged_in_redirect() {
		if(logged_in()) {
			header('Location: index.php');
			exit();
		}
	}

	function protect_page() {
		if (!logged_in()) {
			header('Location: anonymus.php');
			exit();
		}
	}
	
	function admin_protect() {
		global $user_data;
		if(has_access($user_data['user_id'], 1) === false) {
			header('Location: index.php');
		}
	}

	function array_sanitize($item) {
		$item = htmlentities(strip_tags(mysqli_real_escape_string($item)));
	}
	
	function sanitize($data) {
		$con = mysqli_connect('localhost', 'root', '3666');
		return htmlentities(strip_tags(mysqli_real_escape_string($con, $data)));
	}
	
	function output_errors($errors) {
		$output = array();
		
		foreach($errors as $error) {
			$output[] = '<li>' . $error . '</li>';
		}
		return '<ul>' . implode('', $output) . '</ul>';
	}

?>