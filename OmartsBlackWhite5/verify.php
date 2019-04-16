<?php
	include "dbConfig.php";
	if(isset($_GET['v']) && !empty($_GET['v'])){
			$vstring = $_GET['v'];
			$sql = "SELECT vstring FROM user WHERE vstring='".$vstring."'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_row($result);
	 
			if($row[0] != NULL){
				$sql = "UPDATE user SET verified = 1 WHERE vstring = '".$vstring."'";
				mysqli_query($conn, $sql);
				$vstring1 = md5( rand(0,1000) );
				echo $vstring1;
				$sql = "UPDATE user SET vstring = '".$vstring1."' WHERE vstring = '".$vstring."'";
				mysqli_query($conn, $sql);
				header("Location: index.php");
			}else{
				header("Location: index.php");
			}
		}else{
			die();
		}
	?>