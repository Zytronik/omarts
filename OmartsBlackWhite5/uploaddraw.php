<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "drawimg/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
	if(isset($_POST["titel"]) && !empty($_POST["zeit"])){
		$zeit = htmlspecialchars($_POST['zeit']);
		$titel = htmlspecialchars($_POST['titel']);
		$textf = htmlspecialchars($_POST['textf']);
		$groesse = htmlspecialchars($_POST['groesse']);
	}else{
		echo "Gib einen Titel und die Zeit an!";
	}
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','JPG','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into drawimages (groesse, textf, zeit, titel, file_name, uploaded_on) VALUES ('".$groesse."','".$textf."','".$zeit."','".$titel."','".$fileName."', NOW())");
            if($insert){
                header("Location: admin.php");
				die();
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Not uploaded because of error #".$_FILES["file"]["error"];
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>