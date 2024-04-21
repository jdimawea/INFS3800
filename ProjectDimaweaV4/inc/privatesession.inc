<?php
	session_start() ;
	if (!isset($_SESSION['user'])) {
		session_destroy() ;
		header ('refresh:0; url=login.php') ;
		exit() ;
	}
?>
