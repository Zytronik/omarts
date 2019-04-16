<?php
	session_start();
	error_reporting(0);
	include("dbconfig.php");
	$username = $_SESSION["username"];
	$sql = "SELECT verified FROM user WHERE uname = '".$username."'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	if($row[0] != NULL) {
		if($row[0] == -1){
			$_SESSION["lgn"] = false;
			$_SESSION["username"] = "";
			$_SESSION["permission"] = "-1";
			header('Location: localhost/OmartsBlackWhite3/index.php');
		}
	}
	
	if(!$_SESSION["lgn"]) {
		header("Location: index.php");
		die();
	} else {
		$csite = basename($_SERVER['PHP_SELF']);
		switch($csite) {
			case "admin.php":
				//admin only
				if($_SESSION["permission"] < 2) {
					header("Location: connected.php");
					die();
				}
				break;
				
			case "connected.php":
				break;
				
		}
	}
?>