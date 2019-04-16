<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

// File upload path
$targetDir = "travelimg/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
	if(isset($_POST["ort"]) && !empty($_POST["datum"])){
		$datum = htmlspecialchars($_POST['datum']);
		$ort = htmlspecialchars($_POST['ort']);
	}else{
		echo "Gib eine Ortschaft und ein Datum ein!";
	}
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','JPG','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into travelimages (datum, ort, file_name, uploaded_on) VALUES ('".$datum."','".$ort."','".$fileName."', NOW())");
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