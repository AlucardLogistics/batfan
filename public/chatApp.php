<?php include '../includes/init.php'; ?>
<?php 
	if(isset($_POST['send'])) {
		send_message($_POST['sender'], $_POST['text_sent']);
	}
?>


<!-- Messages Box-->
<div id="chatBox"> 
	<?php 
		$messages = get_message();
		foreach($messages as $message) {
			echo $message['sender'] . ': ' . $message['message'] . '<br />';
		}
	
	?>
	<form action="chatApp.php" method="post">
	<input type="text" name="text_sent" />
	<input type="submit" name="send" value="Send" />
	</form>
</div>

