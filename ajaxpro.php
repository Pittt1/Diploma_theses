<?php

include ('mysqli.php');

//tutaj wybieramy temat w zależności od promotora

$sql = "SELECT t.id,t.topic FROM `topics` as t left join topic_assign as a on t.id = a.topic_id WHERE t.prof_id = ".$_GET['id']." and a.topic_id is null";

$result = $mysqli->query($sql);


$json = [];
 while($row = $result->fetch_assoc()){
         $json[$row['id']] = $row['topic'];
    }


    echo json_encode($json);
?>