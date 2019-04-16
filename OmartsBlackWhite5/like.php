<?php
	error_reporting(0);
	include("dbConfig.php");
	session_start();
	$username = $_SESSION["username"];
	$imgID = htmlspecialchars($_POST['imgID']);
	
	$q = "SELECT Count(1) FROM likes WHERE userID = '".$username."' AND imgID = '".$imgID."'";	
	$r = mysqli_query($conn, $q);
	$row = mysqli_fetch_row($r);

	if($row[0] >= 1) {
		header('Location: http://localhost/OmartsBlackWhite3/connected.php#photography');
	} else {
		$insert = $conn->query ("INSERT into likes (userID, imgID) VALUES ('".$username."', '".$imgID."')");
	}
	
	header('Location: http://localhost/OmartsBlackWhite3/connected.php#photography');
?>