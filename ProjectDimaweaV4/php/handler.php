<html>
<head>
	<title>Contact Us</title>
	<?php include '../inc/head.inc' ; ?>
</head>
<body>
	<div class="grid">
	
		<?php include '../inc/header.inc' ; ?>
		
		<div class="u-body c-body">
			<?php 

				session_start() ;
				include '../inc/connectioncheck.inc' ;
				
				if( isset($_POST['un']) && isset($_POST['pw']) ) {
					$un = $_POST['un'] ;
					$pw = $_POST['pw'] ;
				}
				
				// Checking if un and pw are empty
				if (empty($un) && empty($pw)) {
					session_destroy() ;
					echo '<h1>Username and Password are required</h1>' ;
					header ('refresh:3; url=login.php') ;
				}else if (empty($un)) {
					session_destroy() ;
					echo '<h1>Username is required</h1>' ;
					header ('refresh:3; url=login.php') ;
				}else if (empty($pw)) {
					session_destroy() ;
					echo '<h1>Password is required</h1>' ;
					header ('refresh:3; url=login.php') ;
				}else {
					$query = "SELECT * FROM login WHERE user='$un' AND pass='$pw'" ;
					
					$result = mysqli_query($con, $query) ;
					
					if (mysqli_num_rows($result) === 1) {
						$row = mysqli_fetch_assoc($result) ;
						if ($row['user'] === $un && $row['pass'] === $pw) {
							echo "<h1>Welcome " . $un . "</h1>";
							$_SESSION['login'] = "true" ;
							$_SESSION['user'] = $row['user'] ;
							header ('refresh:2; url=pmenu.php') ;
						}
					}else {
						session_destroy();
						echo '<h1>Incorrect Username or Password</h1>' ;
						header ('refresh:3; url=login.php') ;
					}
				}
				
			?>
		</div>
		
		<?php include '../inc/footer.inc' ; ?>
		
	</div>
</body>
</html>
















