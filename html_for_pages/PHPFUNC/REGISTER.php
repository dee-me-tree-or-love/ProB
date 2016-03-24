<?php
include 'DBCONNECT.php';


$error = '';

// VALIDATION, PASSWORD VERIFICATION
if($_POST['password'] != $_POST['password_confirm']){
  SendError('Passwords do not match');
  
} else {
    
    // if everything is okay, do this: 
    $sql = 'INSERT INTO proBusers (email,password,subscription) VALUES (:email, :password, :subscription)';
    $stmt = $db->prepare($sql);
    
    if($_POST['subscribe'] == true)
    {
        // check if set and default values
        $subscription = true;
    }else
    {
        $subscription = false;
    }
    
    
    $stmt->execute([
        ':email' => $_POST['email'],
        ':password' => $_POST['password'],
        ':subscription' => $subscription
        ]
    );
    
    header("Location: ../about.php");
    exit;
}




  
    
function SendError($message)
{
    
    $error = $message;
   
    echo $error;
    
    header("Location: ../signup.php");
}

?>