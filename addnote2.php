<?php
	include ("conf.php");
	if ((isset($_POST["name"])) && (isset($_POST["idcard"])))	// 用isset()檢查變數是否有值(非NULL)
	{
		$link = mysqli_connect($hostname, $username, $password, $database) OR die("Error: Unable to connect to MySQL.");
		mysqli_set_charset($link, "utf8");
		$unitnumber=$_POST["unit"].$_POST["unit2"];
		$query = "INSERT INTO `db_emergency` (`ID`, `AttendanceTime`, `AttendanceUnit`, `Name`, `IdCardNumber`, `Age`, `Flag`) VALUES (NULL, CURRENT_TIMESTAMP,'".$unitnumber."','".$_POST["name"]."','".$_POST["idcard"]."','".$_POST["age"]."', '0');";
		mysqli_query($link, $query) or die("Connect DB Table Error!"); 
		mysqli_close($link);
	}
	header("Location:general_list.php");
?>