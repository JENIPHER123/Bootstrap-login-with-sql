<?php 

$username = $_POST['username'];
$password = $_POST['password']; 
//connecting to databese

$con =mysqli_connect('localhost','root','','loginreg');

//querying the login 

//$login = ;
$res ="SELECT * from login where username ='$username' and password = '$password' ";
$query = mysqli_query($con ,$res );

if(mysqli_num_rows($query)==1){
    header('location: main.php');
    exit;
   
}else{
   header('location: error.php');
   exit;
}


?>