<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$db_name = 'users';

$con = mysqli_connect($hostname,$username,$password) or die("Please enter valid details....");
mysqli_select_db($con,$db_name) or die("Database doesnt exixts....")
?>