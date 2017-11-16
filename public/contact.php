<?php include '../includes/init.php'; ?>
<?php include("../includes/layouts/header.php"); ?>

<body>

<?php require_once("js/loginEffect.js"); ?>
<?php include 'aside.php'; ?>
<?php
	if (!logged_in()) {
		include("../includes/layouts/footerIndex.php");
	} else {
		include("../includes/layouts/footer.php");
	}
?>