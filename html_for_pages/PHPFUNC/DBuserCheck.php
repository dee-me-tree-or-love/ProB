<?php
include 'DBCONNECT.php';
global $dbEm;
global $dbPass;

// returns 1 if there is such email
function CheckEm()
{
    // Statement to fetch data about the user by given email.
    $sqlst = 'SELECT email, password FROM members WHERE email = :email'; 
    $stmt = $db->prepare($sqlst);
    // should result in one row, if everything goes well
    $stmt->execute(
            [
            ':email' => $_POST['email']
            ]
        );
    // store result 
    $stmt->store_result();
    $stmt->bind_result($dbEm, $dbPass);
    echo "<script type='text/javascript'> alert('{$dbEm}');";
//    if ($stmt->num_rows != 0) {
//        return 1;
//    } else {
//        return $stmt->num_rows;
//    }
    
}  

?>