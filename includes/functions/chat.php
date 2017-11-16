<?php 

	function get_message() {
		
		$query = "SELECT `Sender`, `Message` FROM `chat`";
		$run = mysql_query($query);
		$messages = array();
		
		while($message = mysql_fetch_assoc($run)) {
			
			$messages[] = array('sender'   => $mssage['Sender'],
								'message'  => $message['Message']);
		}
		return $messages;
	
	}
	
	function sent_message($sender, $message) {
		
		if(!empty($sender) && !empty($message)) {
			
			$sender     = mysql_real_escape_string($sender);
			$message    = mysql_real_escape_string($message);
			
			$query = "INSERT INTO `chat` VALUES (null, '{$sender}', '{$message}')";
			
			if($run = mysql_query($query)) {
				return true;
			} else {
				return false;
			}
		} else {
			
		}
	}

?>