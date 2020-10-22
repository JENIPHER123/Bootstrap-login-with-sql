<?Php

$username = $_POST['user'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$con =mysqli_connect('localhost','root','','loginreg');

if($pass1 ==$pass2){

$insert= "INSERT INTO login (username , email ,password) VALUES ('$username', '$email','$pass1')";
$query= mysqli_query($con, $insert);

header('location: registered.php');
exit;

}else{

    header('location: failed.php');
    exit;
}
?>