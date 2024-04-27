	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	
		if (!isset($_SESSION['user'])) {
			echo "<link rel='stylesheet' href='../style/style.css'>" ;
			
		} else {
			echo "<link rel='stylesheet' href='../style/darkstyle.css'>" ;
		}
	
	?>
