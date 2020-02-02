<?php				
	 include ('connection.php');
	 session_start();
	 $login = $_SESSION['login'];
     $sql = "delete from topic_assign where stud_id = (select id from users where login = '".$login."')";
     $query = mysql_query($sql);
	 $_SESSION['matemat'] = 0;
	 header('Location: checkSubject.php');

?>