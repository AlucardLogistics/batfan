<?php 
	include '../includes/init.php'; 
	
	if(isset($_GET['username']) === true && empty($_GET['username']) === false) {
		$username		= $_GET['username'];
		
		if(user_exists($username) === true) {
			$user_id		= user_id_from_username($username);
			$profile_data 	= user_data($user_id, 'first_name', 'last_name', 'email');
?>
	<h1><?php echo $profile_data['first_name']; ?>'s Page</h1>
	<p> <?php echo $profile_data['email'];?> </p>
	<p><?php echo htmlentities(strip_tags($profile_data['first_name']))?></p>
	<form action="" method="post" enctype="multipart/form-data" style="border: 1px dashed #ccc; padding: 5px; width:14%;">
	<?php
		if(isset($_FILES['profile']) === true) {
			if(empty($_FILES['profile']['name']) === true) {
				echo 'Please choose a file';				
			} else {
				$allowed = array('jpg', 'jpeg', 'gif', 'png');
				
				$file_name = $_FILES['profile']['name'];
				$file_extn = strtolower(end(explode('.', $file_name)));
				$file_temp = $_FILES['profile']['tmp_name'];
				
				if(in_array($file_extn, $allowed) === true) {
					change_profile_image($session_user_id, $file_temp, $file_extn);
					header('Location: ' . $current_file);
					exit();
				} else {
					echo 'Incorrect file type. Allowed: ';
					echo implode(', ', $allowed);
				}
			}
		}
	?>
	
		<input type="file" name="profile"><br /><br />
		<input type="submit">
	</form>

<?php	
		} else {
			echo 'no such user';
		}
	} else {
		header('Location: index.php');
		exit();
	}

?>


<?php include 'aside.php'; ?>
