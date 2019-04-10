<?php
session_start();
header('location:index.html');
$servername = "localhost";
$username = "root";
$password = "";
$database = "health_care";
// Create connection
// $con = mysqli_connect('localhost', 'root', '');
$con = mysqli_connect($servername, $username, $password, $database);
mysqli_select_db( $con, 'health_care');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from user_registration where user = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	echo " Username Already Taken";
}
else {
	$reg = "insert into user_registration(user,password) values('$name' , '$pass')";
	mysqli_query($con , $reg);
}

//if (!$con) {
     //die("Connection failed: " . mysqli_connect_error());
 //}



?>