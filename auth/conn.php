<?php
$server = "localhost";
$dbname = "test";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con){
	die ("Connection Faild" . mysqli_connect_error());
}
echo "connection complete";
?>