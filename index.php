<?php
session_start();
if ($_GET['logout'] == 1) //tutaj wrzucam po wylogowaniu, kasuję dane sesji
{
	$_SESSION['zalogowany'] = false;
    $_SESSION['login'] = "";
	$_SESSION['typ'] = "";
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Wybierz/sprawdz temat pracy dyplomowej</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header class="header">
			<nav class="container">
				<div class="row-1">
					<a href="infoSection.php"><img src="images\logo.png" alt="logo"></a>
				</div>
				<div class="slogan">
					<h2><span>Wybierz lub sprawdź swój temat</span><br>
					Spróbuj, to łatwe!
					</h2>	
				</div>
				<div class="btn-us">
					<a href="infoSection.php"><button class="btn btn-us ">KLIKNIJ ABY WYBRAĆ</button></a>
				</div>			
				<div class="numbers">
					<div class="row information">
						<div class="col-4 col-m-4 col-s-12">
							<h3>Adres</h3>
							<p>Czarnowiejska 66 <br>
							   30-059 Kraków
							</p>
						</div>
						<div class="col-4 col-m-4 col-s-12">
							<h3>Zadzwoń do nas</h3>
							<p>12 617 47 99</p>
						</div>
						<div class="col-4 col-m-4 col-s-12">
							<h3>Data założenia</h3>
							<p>21 maja 1922</p>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<section class="container">
			<div class="row">
				<div class="col-6 col-m-6 col-s-12">
					<img >
				</div>
				<div class="col-6 col-m-6 col-s-12">
					
				</div>
			</div>
		</section>
	</body>
</html>