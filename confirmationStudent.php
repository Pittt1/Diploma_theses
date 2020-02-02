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

if (isset($_POST['submit']))
{

    $promotor = filtruj($_POST['promotor']);
    $praca = filtruj($_POST['praca']);
	$login = $_SESSION['login'];
// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
    die("błąd połączenia: " . $mysqli->connect_error);
} 

$sql = "INSERT INTO `topic_assign`(`topic_id`, `stud_id`) VALUES (".$praca.",(SELECT id FROM `users` WHERE login = '".$login."'))";

if ($mysqli->query($sql) === TRUE) {
	$_SESSION['matemat'] = 1;
    header('Location: checkSubject.php');

} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();	
	
    echo "Wybrano temat: ".$praca;
	echo "Wybrano profesora: ".$promotor;
	echo "Twój login to: ".$login;
}
?>