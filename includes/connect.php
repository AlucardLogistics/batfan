<?php 
	
	//change or die with a message if site deployed
	$con = mysqli_connect('localhost', 'root', '3666') or die(mysql_error());
	mysqli_select_db($con, 'batz_base') or die(mysql_error());

?>