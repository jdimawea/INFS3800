<?php include '../inc/privatesession.inc' ; ?>
<?php include '../inc/connectioncheck.inc' ; ?>
<html>
<head>
	<title>GenerationAI - Results</title>
	<?php include '../inc/head.inc' ; ?>
</head>
<body>
	<div class="grid">
	
		<?php include '../inc/header.inc' ; ?>
			
		<div class="u-body r-body">
			<?php
				$input = $_POST['input']; 
				$query = "SELECT * FROM tools WHERE tool LIKE '%$input%' OR category LIKE '%$input%' OR price LIKE '%$input%'"; 
				
				$result = mysqli_query($con, $query);
				
				if (mysqli_num_rows($result) > 0) {
					echo "<ul class='results-list'>";
					while ($row = mysqli_fetch_array($result)) {
						echo "<li class='result-item'>";
						echo "<h3>" . htmlspecialchars($row['tool']) . "</h3>";
						echo "<p>Category: " . htmlspecialchars($row['category']) . "</p>";
						echo "<p>Price: " . htmlspecialchars($row['price']) . "</p>";
						echo "<a href='" . htmlspecialchars($row['url']) . "' target='_blank' class='result-link'>Link</a>";
						echo "</li>";
					}
					echo "</ul>";
				} else {
					echo "<p>No results found for '$input'.</p>";
					header ('refresh:2; url=psearch.php');
				}
			?>
		</div>
		
		<?php include '../inc/footer.inc' ; ?>
		
	</div>
</body>
</html>