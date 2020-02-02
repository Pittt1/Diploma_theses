		<header class="header">
			<nav class="container">
				<div class="row">
					<img src="images/logo.png" alt="logo">
					<ul>
					<?php
					session_start();
					if ($_SESSION['zalogowany'] == true)
					{
						echo "<li><a href='index.php?logout=1'>Wyloguj</a></li>";
						echo "<li><a href='checkSubject.php'>Witaj ".$_SESSION['login']."</a></li>";
					}
					?>
						<li><a href="#">Kontakt</a></li>
					<?php
					session_start();
					if ($_SESSION['zalogowany'] == false)
					{
						echo "<li><a href='register.php?typ=wykladowca'>Wykładowca</a></li>";
						echo "<li><a href='register.php?typ=student'>Student</a></li>";
					}
					?>

					</ul>
				</div>

			</nav>
		</header>