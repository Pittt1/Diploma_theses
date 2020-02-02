<?php
include ('connection.php');
session_start();

echo "<!DOCTYPE html>";
echo "<html lang='en'>";
include ('head.php');
echo "<body>";
include ('header.php');
include ('section1.php');
//promotor widzi dwie sekcje, dodawanie tematów i ich listę:
include ('addTopicSection.php');
include ('checkTopicSection.php');

include ('footer.php');
echo "</body>";
echo "</html>";
?>

