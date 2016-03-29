<?php

include 'DBCONNECT.php';
$sum = 'xoxo';
$sql = 'SELECT SUM(DONCOUNT) FROM PROBUSERS';
    $stmt = $db->prepare($sql);
$result = $stmt->execute();
if($result){
    $rows = $stmt->fetch(); //to get the result of a query as a row (1.1)
    $sum = $rows[0]; // to get the first column of the resulted row
}

echo $sum;


?>