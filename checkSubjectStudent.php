<?php
include ('connection.php');
session_start();

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
include ('head.php');
echo "<body>";
include ('header.php');
include ('section1.php');

if ($_SESSION['matemat'] == 0) //sprawdzam czy student już wybrał temat
{
	include ('chooseTopicSection.php');
}
else 
{
	include ('checkTopicScript.php');
}


include ('footer.php');
include ('scriptPromotor.php');
echo "</body>";
echo "</html>";
?>
