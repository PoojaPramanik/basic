<?php
$servername = "localhost";
$username = "root";
$password = "";

// Creating a connection
$conn = mysqli_connect($servername, $username, $password);

//create a database
$sql = "create database book4";
mysqli_query($conn,$sql);

if(!$conn){
	die("Sorry we failed to connect: ".mysqli_connect_error());
}
else {
echo "Successfully database created";
}

?>