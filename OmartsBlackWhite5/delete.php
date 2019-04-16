<?php
	include 'dbConfig.php';
	
		$id = htmlspecialchars($_POST['id']);
		$submit = htmlspecialchars($_POST['submit']);
		echo $id;
		
		$sql = "SELECT id, file_name FROM images WHERE iD = ".$id;
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$url = $row["file_name"];
				$id= $row["id"];
			}
			if($submit === 'ok') {
				die();
			}else{
				unlink('travelimg/'.$url.'');
				$sql = "DELETE FROM images WHERE id = ".$id;
				mysqli_query($conn, $sql);
			}
		}
?>
