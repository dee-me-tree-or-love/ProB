<?php
    $email = $_POST["e-mail"];
    $pass = $_POST["password"];
    //$message = "HI! YOU ARE DUMB, $email, your password is $pass";
    
    
    header("Location: ../Index.php");
    // Why the hell is this shit inaccesible? 
    // echo "<script type='text/javascript'>alert('$message');</script>";
?>
