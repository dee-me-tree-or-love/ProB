<?php

// starts the session
function StartSess($username){
    

    ob_start();
    session_start();
    // to be discussed, maybe a good option will be to add a new input to the form
    $_SESSION['username'] = $username;
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['loggedin'] = 1;
    // sets the session variables
    header("Location: ../account.php");
}
    
?>