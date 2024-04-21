<?php include '../inc/publicsession.inc' ; ?>
<html>
<head>
	<title>Login</title>
	<?php include '../inc/head.inc' ; ?>
</head>
<body>
	<div class="grid">
	
		<?php include '../inc/header.inc' ; ?>
		
		<div class="u-body l-body">
			<div class="login-container">
				<form action="handler.php" method="post" class="login-form">
					<input type="text" name="un" placeholder="Username" value="jma">
					<input type="password" name="pw" placeholder="Password" value="jm123">
					<input type="submit" value="Login" class="submit">
				</form>
			</div>
		</div>
		
		<?php include '../inc/footer.inc' ; ?>
		
	</div>
</body>
</html>