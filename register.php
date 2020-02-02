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
include ('loginSection.php');

switch ($_GET['typ']) //pobieram zmienną z metody GET aby wyświetlić prawidłową treść
{
	case "student":
	include ('registerStudentSection.php');
	break;
	
	case "wykladowca":
	include ('registerProfessorSection.php');
	break;
	
	case "studenterror":
	include ('errorSection.php');
	include ('registerStudentSection.php');
	break;
	
	case "professorerror":
	include ('errorSection.php');
	include ('registerProfessorSection.php');
	break;
}


include ('footer.php');
include ('scriptPromotor.php');

echo "</body>";
echo "</html>";
?>
