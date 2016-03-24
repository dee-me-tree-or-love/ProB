<?php
include 'DBCONNECT.php';




// VALIDATION, PASSWORD VERIFICATION
if($_POST['password'] === $_POST['password_confirm']){
    // if everything is okay, do this: 
    $sql = 'INSERT INTO proBusers (email,password) VALUES (:email, :password)';
    $stmt = $db->prepare($sql);
    
    $stmt->execute([
        ':email' => $_POST['email'],
        ':password' => $_POST['password']
        ]
    );
    
    header("Location: ../about.php");
    exit;
    
    
    
}else{
    $error[] = 'Please, enter a valid password and a confirmation';
    echo $error;
}






?>