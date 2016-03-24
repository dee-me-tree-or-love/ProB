<?php
include 'DBCONNECT.php';

// VALIDATION, PASSWORD VERIFICATION
if(strlen($_POST['password']) < 3){
    $error[] = 'Password is too short.';
}

if(strlen($_POST['passwordConfirm']) < 3){
    $error[] = 'Confirm password is too short.';
}

if($_POST['password'] != $_POST['passwordConfirm']){
    $error[] = 'Passwords do not match.';
}




?>