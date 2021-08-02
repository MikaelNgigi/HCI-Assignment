<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "@#Lock001";
$dbname = "gateusers";

$conn = mysqli_connect($servername, $dbusername,$dbpassword, $dbname );

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}