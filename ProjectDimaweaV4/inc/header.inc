		<div class="u-header">
			<a href='index.php'><img src='../img/logo.png'></a>
			<nav>
				<div class="dropdown">
					<button class="dropbtn"></button>
					<div class="dropdown-content">
						<a href='index.php'>Home</a>
						<a href='about.php'>About Us</a>
						<a href='contact.php'>Contact Us</a>
						<?php
							if (isset($_SESSION['user'])) {
								echo "<a href='pmenu.php'>GenerationAI</a>";
								echo "<a href='noir.php'>Collection Noir</a>";
								echo "<a href='psearch.php'>Search</a>";
								echo "<a href='logout.php'>Logout</a>";
							} else {
								echo "<a href='login.php'>Login</a>";
							}
						?>
					</div>
				</div>
			</nav>
		</div>

		
	