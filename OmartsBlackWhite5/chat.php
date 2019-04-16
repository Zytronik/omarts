<?php
	error_reporting(0);
	include("dbConfig.php");
	session_start();
	$username = $_SESSION["username"];

	if(isset($_POST['chatmessage']) && !empty($_POST['chatmessage']) ){
	
	$message = htmlspecialchars($_POST['chatmessage']);
	$imgID = htmlspecialchars($_POST['imgID']);

 
	if($message != ""){
		$insert = $conn->query("INSERT into chat (text, user, time, imgID) VALUES ('".$message."','".$username."', NOW(), '".$imgID."')");
		
		if($imgID != 0){
			header('Location: http://localhost/OmartsBlackWhite3/connected.php#photography');
		}else{
			header('Location: http://localhost/OmartsBlackWhite3/connected.php#chat');
		}
	}else{
		if($imgID != 0){
			header('Location: http://localhost/OmartsBlackWhite3/connected.php#photography');
		}else{
			header('Location: http://localhost/OmartsBlackWhite3/connected.php#chat');
		}
	}
	 
	}else{
		header('Location: localhost/OmartsBlackWhite3/index.php');
	}
?>