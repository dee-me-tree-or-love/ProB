<?php
include 'DBCONNECT.php';

$errorStat = 0;



// to show an alert and go back to the same page
// BEGIN
function SendError($message)
{
    // makes an error status equal to 1
    $errorStat = 1;
    // To show alert
    echo "<script type='text/javascript'> alert('{$message}'); window.location.replace('../signup.php'); </script>";
    // end
    
    // send back to location
    //header("Location: ../signup.php"); 
}
// END


//BEGIN


// VALIDATION, PASSWORD VERIFICATION
// Statement to fetch data about the user by given email.
    $sqlst = 'SELECT email FROM proBusers WHERE email = :email'; 
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
        if($numR != 0)
        {
            SendError("Such email is already in use, try to log in");
        }
    }


if($_POST['password'] != $_POST['password_confirm']){
   
//    $error = 'fuck';
//    echo "<script type='text/javascript'> alert('{$error}'); </script>";
    // OUTPUTS AN ERROR, MAKES ERROR INDICATOR 1 and redirects back to the sign up page    
    SendError("Passwords do not match");
} 
if(strlen($_POST['password']) < 3)
{
    SendError("Password is too short");
}



// only if nothing happened and errorStatus remained 0 we can process
if($errorStat == 0)
  //else
      {
    
    // if everything is okay, do this: 
    $sql = 'INSERT INTO proBusers (email,password,subscription,name) VALUES (:email, :password, :subscription, :name)';
    $stmt = $db->prepare($sql);
    
    if($_POST['subscribe'] == 'true')
    {
        // check if set and default values
        $subscription = 1;
    }else
    {
        $subscription = 0;
    }
    
    
    $stmt->execute([
        ':email' => $_POST['email'],
        ':password' => $_POST['password'],
        ':subscription' => $subscription,
        ':name' => $_POST['username']
        ]
    );
    // to start the session
    require 'StartSession.php';
    StartSess($_POST['username'],$_POST['email'],$_POST['password'],$subscription = 0);
    echo "<script type='text/javascript'> alert('{$_SESSION['loggedin']}'); </script>";
    
    exit;
    
    
    
}




  
    


?>