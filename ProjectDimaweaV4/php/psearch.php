<?php include '../inc/privatesession.inc' ; ?>
<html>
<head>
	<title>GenerationAI - Search</title>
	<?php include '../inc/head.inc' ; ?>
</head>
<body>
	<div class="grid">
	
		<?php include '../inc/header.inc' ; ?>
			
		<div class="u-body s-body">
			<form action="presult.php" method="post"> <!-- Update action to your search handling page -->
				<input type="text" name="query" placeholder="Search for AI Technologies...">
				<button type="submit">Search</button>
			</form>			
		</div>
		
		<?php include '../inc/footer.inc' ; ?>
		
	</div>
</body>
</html>