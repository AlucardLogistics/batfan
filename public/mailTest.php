<?php 
	if(mail('lylteen@yahoo.com', '2 hours', 'And it fucking worked to send some <strong>stupid ass shit</strong> mail!!!', 'From: mata@incur.org')) {
		echo 'mail sent';
	} else {
		echo 'mail didnt\'t want to go';
	}
?>