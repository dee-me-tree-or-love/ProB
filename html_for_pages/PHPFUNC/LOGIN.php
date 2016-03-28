<?php
include 'DBCONNECT.php';



    
    // Statement to fetch data about the user by given email.
    $sqlst = 'SELECT email, password, name FROM proBusers WHERE email = :email'; 
    $stmt = $db->prepare($sqlst);
    // should result in one row, if everything goes well
    $stmt->execute(
            [
            ':email' => $_POST['email']
            ]
        );
    // store result 
    
    $result = $stmt->execute();
    if($result){
    $rows = $stmt->fetchAll(); // to get a user as an array
    $numR = count($rows);
    // was used for testing
    //echo "<script type='text/javascript'> alert('{$numR}');</script>";
    // if a person with such email was found, we continue the process
    if($numR == 1)
    {
        // returns the first column from the first returned row
        $dbEmail = $rows[0][0];
        //also testing purposes
        //echo "<script type='text/javascript'> alert('{$dbEmail}'); window.location.replace('../signup.php');</script>";
        $dbPassword = $rows[0][1];
        // testing
        $out = $dbEmail." asd ".$dbPassword;
        //echo "<script type='text/javascript'> alert('{$out}'); window.location.replace('../signup.php');</script>";
        
        // checking whether password is correct
        if($dbPassword == $_POST['password']){
            // this means you have entered!
            echo "<script type='text/javascript'> alert('NICE!'); window.location.replace('../signup.php');</script>";
            // we need the user's name
            $dbName = $rows[0][2];
            // to start the session
            require 'StartSession.php';
            
            StartSess($dbName,$dbEmail,$dbPassword);
        }
        // passwords apparently did not match
        else
        {
            $message = 'sorry, passwords did not match';
                // To show alert
            echo "<script type='text/javascript'> alert('{$message}'); window.location.replace('../signup.php'); </script>";
               // end
        }
        
        
    }  
    // it's either a database problem, or it fetched zero rows
    else {
         $message = 'sorry, no such user exists, please, create a new account';
                // To show alert
        echo "<script type='text/javascript'> alert('{$message}'); window.location.replace('../signup.php'); </script>";
               // end
    }
    
    
    
    
    }
    // something unexpected
    else
    {
    $message = 'sorry, no such user exists, or something went wrong';
                // To show alert
    echo "<script type='text/javascript'> alert('{$message}'); window.location.replace('../signup.php'); </script>";
               // end
    }

?>
