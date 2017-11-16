<?php 

	if (logged_in()) {
		include '../includes/layouts/header.php';
		include '../includes/layouts/footer.php';

	} else {
		include '../includes/layouts/loginHeader.php';
		include '../includes/widgets/loginForm.php';
		include '../includes/widgets/registerForm.php';
		include '../includes/layouts/footerIndex.php';
	}

?>