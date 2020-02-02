<?php
include ('connection.php');
session_start();
if ($_SESSION['zalogowany'] == true) //sprawdzam czy zalogowany, jeśli tak to kieruję dalej
{
	header('Location: checkSubject.php');
}
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
include ('head.php');
echo "<body>";
include ('header.php');
include ('section1.php');

include ('sectionInfo1.php');
include ('sectionInfo2.php'); //wybór użytkownika

include ('footer.php');
include ('scriptPromotor.php');
echo "</body>";
echo "</html>";
?>
