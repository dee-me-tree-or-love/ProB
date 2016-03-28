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

//    // sql to check the db
//    $sql = 'SELECT email FROM proBusers WHERE email = :email';
//    $emver = $db->prepare($sql);
//    $emver->execute(
//            [
//                ':email' => $_POST['email'] 
//            ]
//        );
//    
//    
//    
//        // gets an array from the 
//    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //echo "<script type='text/javascript'> alert('{$row}'); window.location.replace('../signup.php'); </script>";
    //if(!empty($row['email'])){
            //SendError('E-Mail provided is already in use. Please log in.');
            // to open log in
            //echo '<script type="text/javascript"> ShowAccountEnter(); </script>';
            // end
        //}

//END


// VALIDATION, PASSWORD VERIFICATION
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
if($errorStat === 0)
  //else
      {
    
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
    session_start();
    // to be discussed, maybe a good option will be to add a new input to the form
    $_SESSION['visitor_name'] = "";
    $_SESSION['email'] = $_POST['email'];
    // sets the session variables
    header("Location: ../about.php");
    exit;
    
    
    
}




  
    


?>