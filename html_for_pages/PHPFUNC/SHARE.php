<?php

include 'DBCONNECT.php';
session_start();

$tempShares = $_SESSION['shares'];
$tempShares++;
$_SESSION['shares'] = $tempShares;

$sql = 'UPDATE probusers SET SHARECOUNT=:shares WHERE email=:email';
    $stmt = $db->prepare($sql);
$result = $stmt->execute([
        ':email' => $_SESSION['email'],
        ':shares' => $tempShares,
        ]);


////window.open("mailto:ddeivis2012@gmail.com");
//$mailToLoc = '"mailto:'.$_POST['rec_name'];
//    $mailToLoc = $mailToLoc.'&subject=Check%20out%20this%20page!';
//        $mailToLoc = $mailToLoc.'&body=escape("';
//            $mailToLoc = $mailToLoc.$_POST['comm'];
//                $mailToLoc = $mailToLoc.'")';
//echo "<script type='text/javascript'> alert('Your donation was successful. We really appreciate it!);</script>";
//echo "<script type='text/javascript'> alert('Thank you very much, for your support!'); window.open({$mailToLoc}); </script>";
echo "<script type='text/javascript'> alert('Thank you very much, for your support! {$tempShares}'); window.location.replace('../account.php'); </script>";
//echo "<script type='text/javascript'> window.location.replace('../account.php'); </script>";

//?cc=someoneelse@example.com&bcc=andsomeoneelse@example.com
//&subject=Summer%20Party&body=You%20are%20invited%20to%20a%20big%20summer%20party!"
//&subject=Summer%20Party&body=You%20are%20invited%20to%20a%20big%20summer%20party!


?>
