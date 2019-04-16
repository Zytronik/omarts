<?php
	error_reporting(0);
	include "dbConfig.php";
	
	if(isset($_POST['uname']) && !empty($_POST['uname']) AND isset($_POST['email']) && !empty($_POST['email']) AND isset($_POST['pwd']) && !empty($_POST['pwd'])){
		
		$uname = htmlspecialchars($_POST['uname']);
		$email = htmlspecialchars($_POST['email']);
		$pwd = htmlspecialchars($_POST['pwd']);
		$vstring = md5( rand(0,1000) );
		$sql = "SELECT email FROM user WHERE email='".$email."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_row($result);
 
		if($row[0] != NULL){
			echo "email";	
		}else{
			$sql = "SELECT * FROM user WHERE uname='".$uname."'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_row($result);
			if($row[0] == NULL && strlen($uname) > 2 && strlen($uname) <= 16){
				$sql = "INSERT INTO user(uname, pwd, email, permission, verified, vstring) VALUES(
				'". $uname ."', 
				'". $pwd ."', 
				'". $email ."', 1, 0,
				'". $vstring ."')";
				mysqli_query($conn, $sql);
				
				$to = $email;
				$subject = "omarts Account Bestätigen";

				$message = "
					Hi ".$uname."!
					Account Bestätigen: https://omarts.xyz/verify.php?v=".$vstring."
				";

				$headers .= 'From: <accounts@omarts.xyz>' . "\r\n";

				mail($to,$subject,$message,$headers);
				echo "register";
			}else{
				echo "username";
			}
		}
	}else{
		header("Location: ../index.php");
		die();
	}

?>