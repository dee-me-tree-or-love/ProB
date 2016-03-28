<?php


    

function isStarted()
{
    session_start();
    if (!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != '')) {
        // is not started
        return 0;
    }else{
        // is started
        return 1;
        $ContrRegBtnVal = 'Account';
    }
}

?>

