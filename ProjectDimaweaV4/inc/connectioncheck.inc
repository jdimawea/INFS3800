<?php
	
	$con = mysqli_connect("127.0.0.1","joe","joe123","INFS3800Project");
	
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} 
	
?>