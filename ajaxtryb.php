<?php

include ('mysqli.php');


//tutaj wybieramy rok w zależności od trybu
$sql = "SELECT y.id, y.year FROM `year` as y join studies_year as j on y.id = j.year_id WHERE j.studies_id = ".$_GET['id'];

$result = $mysqli->query($sql);


$json = [];
 while($row = $result->fetch_assoc()){
         $json[$row['id']] = $row['year'];
    }


    echo json_encode($json);
?>