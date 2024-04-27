		<div class="u-header">
			<a href='http://localhost/infs3800/ProjectDimaweaV4/php/index.php'><img src='../img/logo.png'></a>
			<nav>
				<a href='http://localhost/infs3800/ProjectDimaweaV4/php/index.php'>Home</a>
				<a href='http://localhost/infs3800/ProjectDimaweaV4/php/about.php'>About Us</a>
				<a href='http://localhost/infs3800/ProjectDimaweaV4/php/contact.php'>Contact Us</a>
				<!-- add logoff in php -->
				<?php
					if (isset($_SESSION['user'])) {
						echo "<a href='http://localhost/infs3800/ProjectDimaweaV4/php/phome.php'>Noir</a>" ;
						echo "<a href='http://localhost/infs3800/ProjectDimaweaV4/php/logout.php'>Logout</a>";
					} else {
						echo "<a href='http://localhost/infs3800/ProjectDimaweaV4/php/login.php'>Login</a>";
					}				
				?>

				
			</nav>			
		</div>