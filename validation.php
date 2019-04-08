<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "club_management";
// Create connection
// $con = mysqli_connect('localhost', 'root', '');
$con = mysqli_connect($servername, $username, $password, $database);
mysqli_select_db( $con, 'club_management');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from userregistration where user = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	$_SESSION['username'] = $name;
	header('location:navigation.html');
}
else {
	header('location:login.html');
}

// if (!$con) {
//     die("Connection failed: " . mysqli_connect_error());
// }



?>