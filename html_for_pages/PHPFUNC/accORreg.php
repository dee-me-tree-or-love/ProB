<?php

include 'checkSessionMeth.php';
if(isStarted() == 0)
{
    // not yet registered
    header('Location: ../signup.php');
}
else
{
    // already registered
    header('Location: ../account.php');
}


?>