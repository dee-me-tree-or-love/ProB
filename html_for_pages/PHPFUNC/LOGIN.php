<?php

include 'DBCONNECT.php';
include 'DBuserCheck.php';

    $message = '';

    if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
       
        
        $email = $_POST["e-mail"];
        $pass = $_POST["password"];
        //$message = "HI! YOU ARE DUMB, $email, your password is $pass";
    
        if(CheckEm() == 1)
        {
            // there was a guy
            // check password
            // since dbPass is global in DBuserCheck we can access it here
            // since the password is not yet hashed
            if ($password == $dbPass) {
                
            } else {
                //sorry, passwords did not match
            }
            
        } else
        {
            // returned 0 or more
            // sorry, no such user exists, or something went wrong
        }
        
       
        // Why the hell is this shit inaccesible? 
        // echo "<script type='text/javascript'>alert('$message');</script>";
    } 
//    else 
//    {
//        $message = 'Sorry, wrong password or e-mail';
//        echo "<script type='text/javascript'> alert('{$message}'); window.location.replace('../signup.php'); </script>";
//    }
    
    
?>
