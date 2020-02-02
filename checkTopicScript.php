<?php
				$login = $_SESSION['login'];
				$sql = "SELECT * FROM `topics` where id = (select topic_id from topic_assign where stud_id = (select id from users where login = '".$login."'))";
				$result = mysql_query($sql);
				while($row = mysql_fetch_array($result)) {
				echo "Twój temat to: ".$row['topic']; 
				}
				echo"<div class='btn-us'>";
				echo"	<a href='deleteTopicScript.php'><button class='btn btn-us '>Kliknij aby usunąć temat</button></a>"; //usuwanie wybranego tematu
				echo"</div>";
?>