<?php
session_start();
//include ('mysqli.php');

$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "easy_choice";


function filtruj($zmienna)
{
    if(get_magic_quotes_gpc())
        $zmienna = stripslashes($zmienna); // usuwamy slashe

    // usuwamy spacje, tagi html oraz niebezpieczne znaki
    return mysql_real_escape_string(htmlspecialchars(trim($zmienna)));
}

if (isset($_POST['add']))
{

    $temat = filtruj($_POST['topic']);
    $opis = filtruj($_POST['description']);
	$rok = filtruj($_POST['year']);
	$rodzaj = filtruj($_POST['studies']);
	$login = $_SESSION['login'];
// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
    die("Błąd połączenia: " . $mysqli->connect_error);
} 

$sql = "INSERT INTO `topics`( `topic`, `description`, `prof_id`, `year_id` ,`studies_id` ) VALUES ('".$temat."','".$opis."',(select id from users where login ='".$login."'),'".$rok."','".$rodzaj."')";

if ($mysqli->query($sql) === TRUE) {
    header('Location: checkSubject.php'); //temat dodany, wracam z powrotem do panelu promotora
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();	
	
    echo "Dodano temat: ".$temat;
	echo "Opis tematu: ".$opis;
	echo "Promotorem będzie: ".$login;
}
?>