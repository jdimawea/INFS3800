		<div class="u-header">
			<a href='http://localhost/infs3800/ProjectDimaweaV4/php/index.php'><img src='../img/logo.png'></a>
			<nav>
				<div class="dropdown">
					<button class="dropbtn"></button>
					<div class="dropdown-content">
					<div class="dropdown-content">
						<a href='http://localhost/infs3800/ProjectDimaweaV4/php/index.php'>Home</a>
						<a href='http://localhost/infs3800/ProjectDimaweaV4/php/about.php'>About Us</a>
						<a href='http://localhost/infs3800/ProjectDimaweaV4/php/contact.php'>Contact Us</a>
						<?php
							if (isset($_SESSION['user'])) {
								echo "<a href='http://localhost/infs3800/ProjectDimaweaV4/php/pmenu.php'>GenerationAI</a>";
								echo "<a href='http://localhost/infs3800/ProjectDimaweaV4/php/noir.php'>Collection Noir</a>";
								echo "<a href='http://localhost/infs3800/ProjectDimaweaV4/php/psearch.php'>Search</a>";
								echo "<a href='http://localhost/infs3800/ProjectDimaweaV4/php/logout.php'>Logout</a>";
							} else {
								echo "<a href='http://localhost/infs3800/ProjectDimaweaV4/php/login.php'>Login</a>";
							}
						?>
					</div>
					</div>
				</div>
			</nav>
		</div>

		
	