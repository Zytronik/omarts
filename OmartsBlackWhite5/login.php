<?php
	error_reporting(0);
	include "dbConfig.php";
	session_start();
	if($_SESSION["lgn"] != NULL && $_SESSION["lgn"]) {
		header("Location: http://localhost/OmartsBlackWhite3/admin.php");
		die();
	}
	if(isset($_POST['uname']) && !empty($_POST['uname']) AND isset($_POST['pwd']) && !empty($_POST['pwd']) ){
		
		$uname = htmlspecialchars($_POST['uname']);
		$password = htmlspecialchars($_POST['pwd']);
		
		$sql = "SELECT uname, pwd, verified FROM user WHERE uname='".$uname."' AND pwd='".$password."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);

		if($row[0] != NULL) {
			$sql = "SELECT uname, pwd, verified, permission FROM user WHERE uname='".$uname."' AND pwd='".$password."' AND verified='1'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_row($result);
			if($row[0] != NULL) {
				$perm = $row[3];
				echo"login";
				$_SESSION["username"] = $uname;
				$_SESSION["permission"] = $perm;
				$_SESSION["lgn"] = true;		

			}
			
			$sql = "SELECT uname, pwd, verified FROM user WHERE uname='".$uname."' AND pwd='".$password."' AND verified='0'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_row($result);
			if($row[0] != NULL) {
				echo "mail";
			}
			
			
		}else{
			echo "invalid";

		}
	}else{
		echo "invalid";
	}
	
?>