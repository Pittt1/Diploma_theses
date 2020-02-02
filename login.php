<?php
session_start();
include ('connection.php');
function filtruj($zmienna)
{
    if(get_magic_quotes_gpc())
        $zmienna = stripslashes($zmienna); // usuwamy slashe

    // usuwamy spacje, tagi html oraz niebezpieczne znaki
    return mysql_real_escape_string(htmlspecialchars(trim($zmienna)));
}

if (isset($_POST['loguj']))
{
    $login = filtruj($_POST['username']);
    $haslo = filtruj($_POST['password']);
    // sprawdzamy czy login i hasło są dobre
    if (mysql_num_rows(mysql_query("SELECT login, pass FROM users WHERE login = '".$login."' AND pass = '".$haslo."';")) > 0)
    {
		if (mysql_num_rows(mysql_query("SELECT * FROM users WHERE login = '".$login."' AND type = 3;")) > 0)
		{
			//typ profesor
        $_SESSION['zalogowany'] = true;
        $_SESSION['login'] = $login;
		$_SESSION['typ'] = 3;
		header('Location: checkSubject.php');
		}
		else{
		//typ student
			if (mysql_num_rows(mysql_query("SELECT * FROM `topic_assign` WHERE stud_id = (select id from users where login = '".$login."');")) > 0)
			{
				//ma temat
				$_SESSION['zalogowany'] = true;
				$_SESSION['login'] = $login;
				$_SESSION['typ'] = 2;
				$_SESSION['matemat'] = 1;
				header('Location: checkSubject.php');

			}
			else
			{
				//nie ma tematu
			$_SESSION['zalogowany'] = true;
			$_SESSION['login'] = $login;
			$_SESSION['typ'] = 2;
			$_SESSION['matemat'] = 0;
			header('Location: checkSubject.php');
			}
		}
		
    }
    else echo "Wpisano złe dane.";
}
?>