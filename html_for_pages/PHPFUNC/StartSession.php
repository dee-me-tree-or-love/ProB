<?php
ob_start();
session_start();
// starts the session
function StartSess($username,$email,$password,$subs){
    
    $creds= $email.$password;

    
    // to be discussed, maybe a good option will be to add a new input to the form
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;
    $_SESSION['subs'] = $subs;
    $_SESSION['loggedin'] = 1;
    $_SESSION['creds'] = $creds;
    echo "<script type='text/javascript'> alert('{$_SESSION['creds']}');</script>";
    // sets the session variables
    header("Location: ../account.php");
}
    
?>