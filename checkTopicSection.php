<?php
				echo "Tematy w bazie to: </br>";
				 $sql = "SELECT t.topic, t.description, case WHEN u.name is null THEN '---' else u.name end AS name, case WHEN u.surname is null THEN '---' else u.surname end AS surname FROM `topics` as t left join topic_assign as a on t.id = a.topic_id left join users as u on a.stud_id = u.id;";
				 $result = mysql_query($sql);
				 while($row = mysql_fetch_array($result)) {
				 echo $row['topic']." ".$row['description']." ".$row['name']." ".$row['surname']."</br>"; //tutaj można wpleść ładną tabelkę HTML
				 }
?>
