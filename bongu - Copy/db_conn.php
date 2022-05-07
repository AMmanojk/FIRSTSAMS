<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";
$db_name1 = "test";
$db_name2 = "test_1";


$conn = mysqli_connect($sname, $unmae, $password, $db_name);
$conn1 = mysqli_connect($sname, $unmae, $password, $db_name2);
$conn2 = mysqli_connect($sname, $unmae, $password, $db_name1);

if (!$conn) {
	echo "Connection failed!";
}
if (!$conn) {
	echo "Connection failed!";
}
