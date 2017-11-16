<!DOCTYPE html>
<html>
<head>
<title>Batzy</title>

<link rel="stylesheet" href="stylesheets/footer.css" type="text/css" />
<link rel="stylesheet" href="stylesheets/login.css" type="text/css" />
<link rel="stylesheet" href="stylesheets/loginHeader.css" type="text/css" />


</head>

<body>
<div id="header">
<ul id="header_menu">

	<!-- Home Button 
	<li class="homeButton"><a href="ridd.html"></a></li>
	
	<li><a href="#"><?php echo date("m.d.y"); ?></a></li>-->
	<li><a href="#"><?php 
			$suffix = (user_count() < 2) ? '' : 's';
		?>
		<?php echo user_count(); ?>  registered user<?php echo $suffix; ?></a></li>
	
	<!-- Profile Button -->
	<li><a href="#"><?php echo $user_data['first_name']; ?>, Logged In</a></li>
	
	<!-- Account Button --> 
	<li><a href="#">Account</a>
		<div class="one_column_layout">
			<div class="col_1">
				<?php if(has_access($session_user_id, 1) === true) {
					echo '<a class="headerLinks">Admin Settings</a>';
					echo '<div class="clear"></div>';
					echo '<br />';
					echo '<a class="listLinks" href="../public/admin.php">Admin</a>';
					echo '<a class="listLinks" href="../public/massMail.php">Mass Email</a>';
					}?>
				<a class="headerLinks">Settings</a>
					<div class="clear"></div>
					<br />
				<!--<a class="listLinks" style="font-weight: bold; color: white;">Inbox (3)</a>-->
				
				<a class="listLinks" href="../public/changePassword.php">Change Password</a>
				<a class="listLinks" href="../public/changeUserInfo.php">Change User Info</a>
				<a class="listLinks" href="<?php echo $user_data['username']; ?>">Profile</a>
				
				<a class="headerLinks" href="../public/logout.php">Log Out</a>
			</div>
		</div>
	</li>
	
	<!-- Program Button -->
	<li><a href="#">Programs</a>
		<ul class="dropup">
			<li><a href="../public/forum.php">Justice League Forum</a></li>
			<li><a href="#">Batcave Utilities</a></li>
			<li><a href="#">Arkham Asylium Cams</a></li>
			<li><a href="#">Gotham City Surveillance</a></li>
			<li><a href="../public/downloads.php">Download BatApps</a></li>
		</ul>
	</li>

</ul>
</div>