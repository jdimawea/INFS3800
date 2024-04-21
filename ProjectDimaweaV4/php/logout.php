<?php
	session_start() ;
	
	session_unset() ;
	session_destroy() ;
	
	header('Location: http://localhost/infs3800/ProjectDimaweaV4/php/index.php');
?>