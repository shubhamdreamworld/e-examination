<?php
//all the variables defined here are accessible in all the files that include this one
$port = $_SERVER['WEBSITE_MYSQL_PORT'];
$server = "localhost:$port";
$user = "azure";
$password = "6#vWHD_$";
$db = "localdb";

$con= new mysqli($server, $user, $password, $db)or die("Could not connect to mysql".mysqli_error($con));

?>
