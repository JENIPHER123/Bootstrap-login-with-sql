<?php
$con =mysqli_connect('localhost','root','','loginreg');

session_start();
session_destroy();
header('location: index.php');
exit;


?>