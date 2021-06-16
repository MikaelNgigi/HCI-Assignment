<?php

session_start();
if(isset($_SESSION['user_email']))
{
    unset($_SESSION['user_email']);
}

//redirect to login
header("Location: ../login.php");
die;
