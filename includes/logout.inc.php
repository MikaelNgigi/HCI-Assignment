<?php

session_start();
if(isset($_SESSION['user_email']))
{
    unset($_SESSION['user_email']);
}

//redirect to index
header("Location: ../index.php");
die;
