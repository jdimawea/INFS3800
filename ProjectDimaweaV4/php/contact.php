<?php include '../inc/publicsession.inc' ; ?>
<html>
<head>
	<title>Contact Us</title>
	<?php include '../inc/head.inc' ; ?>
</head>
<body>
	<div class="grid">
	
		<?php include '../inc/header.inc' ; ?>
		
		<div class="u-body c-body">
			<h1>Contact Us</h1>
			<form action="path_to_your_form_handler.php" method="post">
				<textarea class='contactbox' name="message" placeholder="What can we do for you?"></textarea>
				<button type="submit" class="submit-button">Send Message</button>
			</form>
		</div>
		
		<?php include '../inc/footer.inc' ; ?>
		
	</div>
</body>
</html>