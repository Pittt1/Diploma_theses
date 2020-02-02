<?php
session_start();
if ($_SESSION['zalogowany'] = true AND $_SESSION['typ'] == 2) //zalogowany student
{
	include('checkSubjectStudent.php');
}
elseif($_SESSION['zalogowany'] = true AND $_SESSION['typ'] == 3) //zalogowany profesor
{
	include('checkSubjectProfessor.php');
}
else echo "brak uprawnień".$_SESSION['zalogowany'].$_SESSION['typ']; //próba dostępu bez logowania
?>