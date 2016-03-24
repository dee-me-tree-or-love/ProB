<?php
include 'DBCONNECT.php';



if($_POST['subscribe_true'] == true)
{
    $subscription = true;
}
// VALIDATION, PASSWORD VERIFICATION
if($_POST['password'] = $_POST['password_confirm']){
    // if everything is okay, do this: 
    
    $stmt = $db->prepare('INSERT INTO members (email,password,subscription) VALUES (:email, :password, :subscription)');
    
    $stmt->execute(array(
        ':password' => $_POST['password'],
        ':email' => $_POST['email'],
        ':subscription' => $subscription,
    ));
    
    header('Location: ../about.php');
    exit;
    
    
    
}else{
    $error[] = 'Please, enter a valid password and a confirmation';
}






?>