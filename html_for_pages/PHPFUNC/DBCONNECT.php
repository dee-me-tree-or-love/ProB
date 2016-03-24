<?php
    define('DBHOST','localhost');
    define('DBUSER','dbi339282');
    define('DBNAME','localhost');
    define('DBPASS','bccMxqtHck'); 
  
    try {

    //create PDO connection 
    $db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch(PDOException $e) {
    //show error, if the PDO exception was reported
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
    }
    
    
?>