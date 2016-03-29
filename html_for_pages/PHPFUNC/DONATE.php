<?php

include 'DBCONNECT.php';
session_start();

$tempDons = $_SESSION['dons'];
$tempDons++;
$_SESSION['dons'] = $tempDons;

$sql = 'UPDATE probusers SET DONCOUNT=:dons WHERE email=:email';
    $stmt = $db->prepare($sql);
$result = $stmt->execute([
        ':email' => $_SESSION['email'],
        ':dons' => $tempDons,
        ]);
//echo "<script type='text/javascript'> alert('Your donation was successful. We really appreciate it!);</script>";
echo "<script type='text/javascript'> alert('Thank you very much, for your contribution!'); window.location.replace('../account.php'); </script>";


?>
