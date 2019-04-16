<?php
	error_reporting(0);
	session_start();
	$_SESSION["lgn"] = false;
	$_SESSION["username"] = "";
	$_SESSION["permission"] = "-1";
	//header("Location: ../index.php");
	header('Location: http://localhost/OmartsBlackWhite3/index.php');
	die();
?>