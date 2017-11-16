<div class="userCount">
		<?php 
			$suffix = (user_count() < 2) ? '' : 's';
		?>
		We have <?php echo user_count(); ?>  registered user<?php echo $suffix; ?>.
</div>