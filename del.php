<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "emergency";

	$link = mysqli_connect($hostname, $username, $password, $database) OR die("Error: Unable to connect to MySQL.");

	mysqli_set_charset($link,"utf8");
	$query = "DELETE FROM `db_emergency` WHERE `db_emergency`.`ID` = ".$_GET["ID"];
	$result=mysqli_query($link,$query) or die("Connect DB Table Error!");

	mysqli_close($link);
	header("location:general_list.php");

?>