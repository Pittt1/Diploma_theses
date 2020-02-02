<?php
//rejestracja promotora
include ('connection.php');
session_start();
function filtruj($zmienna)
{
    if(get_magic_quotes_gpc())
        $zmienna = stripslashes($zmienna); // usuwamy slashe

    // usuwamy spacje, tagi html oraz niebezpieczne znaki
    return mysql_real_escape_string(htmlspecialchars(trim($zmienna)));
}

if (isset($_POST['submit']))
{
    $login = filtruj($_POST['login']);
    $password1 = filtruj($_POST['password1']);
    $password2 = filtruj($_POST['password2']);
    $name = filtruj($_POST['name']);
    $surname = filtruj($_POST['surname']);
    $type = 3;
	$mail = filtruj($_POST['mail']);
	$phone = filtruj($_POST['phone']);	
	$stud_year = filtruj($_POST['studia1']);
	$stud_type = filtruj($_POST['studia2']);	
	$degree = filtruj($_POST['degree']);
    // sprawdzamy czy login nie jest już w bazie
    if (mysql_num_rows(mysql_query("SELECT login FROM users WHERE login = '".$login."';")) == 0)
    {
        if ($password1 == $password2) // sprawdzamy czy hasła takie same
        {
            mysql_query("INSERT INTO `users` (`login`, `pass`, `name`, `surname`, `type`, `mail`, `phone`, `stud_year`, `stud_type`, `degree`)
                VALUES ('".$login."', '".$password1."', '".$name."', '".$surname."', '".$type."', '".$mail."', '".$phone."', '".$stud_year."', '".$stud_type."', '".$degree."');");
				
			//przekierowanie do panelu użytkownika
			$_SESSION['zalogowany'] = true;
			$_SESSION['login'] = $login;
			$_SESSION['typ'] = 3;
			header('Location: checkSubject.php');
        }
		
		
        else //hasła różne
		{	
		$_SESSION['error'] = 'Hasła muszą być takie same';
		header('Location: register.php?typ=professorerror');
		}
    }
	
	
    else //login zajęty
	{	
	$_SESSION['error'] = 'Podany login jest zajęty';
	header('Location: register.php?typ=professorerror');
	}
}
?>