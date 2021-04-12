<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pooja";

$connection = mysqli_connect($servername, $username, $password, $database);

//CREATE A DATABASE
$sql = "CREATE DATABASE dbname";
mysqli_query($connection, $sql);

if(!$connection){
	die("Sorry, we couldn't connect with database".mysqli_error());
}
else {
		echo "Connection is Successful";
}
echo "<br>";

//CREATE A TABLE

$sql = "CREATE TABLE table2(name varchar(20) not null, roll_no int(5) primary key)";
if(mysqli_query($connection, $sql)){
	echo "Table is created";
}
	else {
		echo "Table is not created".mysqli_error($connection);
}
echo "<br>";

//INSERT DATA INTO DATABASE

$sql = "INSERT INTO table2(name, roll_no)
VALUES('Bappa Pramanik', 69)";
if(mysqli_query($connection, $sql)){
	echo "Data inserted into database";
}
else{
	echo "Data is not inserted into database".mysql_error();
}
echo "<br>";

?>