<?php
session_start();
header('location:login.html');
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

$s = "select * from userregistration where user = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	echo " Username Already Taken";
}
else {
	$reg = "insert into userregistration(user,password) values('$name' , '$pass')";
	mysqli_query($con , $reg);
}

//if (!$con) {
     //die("Connection failed: " . mysqli_connect_error());
 //}



?>