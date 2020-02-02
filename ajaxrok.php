<?php

include ('mysqli.php');


//tutaj wybieramy promotora w zależności od roku

$sql = "SELECT u.id, concat(d. description,' ', u.name, ' ',u.surname) as promotor FROM `users` as u join degree as d on u.degree = d.id WHERE u.type = 3";

$result = $mysqli->query($sql);


$json = [];
 while($row = $result->fetch_assoc()){
         $json[$row['id']] = $row['promotor'];
    }


    echo json_encode($json);
?>