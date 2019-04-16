<!DOCTYPE html>
<html lang=en-US">
<?php 
	include("server.php");
?>
<head>
	<link rel="apple-touch-icon" sizes="57x57" href="img/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
	<link rel="manifest" href="img/fav/manifest.json">
	<meta charset="utf-8">
	<link href="ninja-slider.css" rel="stylesheet" type="text/css" />
	<link href="custom.css" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="js/ninja-slider.js" type="text/javascript"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<title>omarts | Admin</title>
	<style>
		.gallery img{
			width: 100%;
			height: auto;
			border-radius: 5px;
			cursor: pointer;
			transition: .3s;
		}
		.grid-container2 {
			display: grid;
			grid-template-columns: auto;
		}
		.grid-item2 {
		    font-size: 20px;
		    text-align: center;
			padding: 10px;
			
		}
		.grid-container4 {
			display: grid;
			grid-template-columns: auto auto;
		}
		.grid-item4 {
		    font-size: 20px;
		    text-align: center;
			//border: 1px solid black;
			
		}
		.grid-container1 {
			display: grid;
			grid-template-columns: auto auto auto;
			padding: 10px;
		}
		.grid-item1 {
		    font-size: 20px;
		    text-align: center;
		}
		.grid-container3 {
			display: grid;
			grid-template-columns: auto auto;
		}
		.grid-item3 {
		    font-size: 20px;
		    text-align: center;
		}
		

		.hwrap {
			width: 100%;
			height: 110px;
			transition-duration: 0.4s;
			transition-timing-function: cubic-bezier(0.61, 0, 0.35, 1);
		}

		.hlinks {
			color: white;
			font-size: 20px;
			float: right;
			font-family: 'Raleway', sans-serif;
			padding: 20px;
			font-weight: bolder;
		}

		.hlink {
			float: left;
			padding-left: 15px;
			padding-right: 15px;
		}

		a > .hlink {
			position: relative;
			color: #fff;
			text-decoration: none;
			transition-duration: 0.4s;
			transition-timing-function: cubic-bezier(0.61, 0, 0.35, 1);
		}

		a > .hlink:hover {
			color: #f76c6c;
		}

		a > .hlink:before {
			content: "";
			position: absolute;
			width: 100%;
			height: 2px;
			bottom: 0;
			left: 0;
			background-color: #fff;
			visibility: hidden;
			-webkit-transform: scaleX(0);
			transform: scaleX(0);
			-webkit-transition: all 0.3s ease-in-out 0s;
			transition: all 0.3s ease-in-out 0s;
		}

		a > .hlink:hover:before {
			visibility: visible;
			-webkit-transform: scaleX(0.7);
			transform: scaleX(0.7);
			background-color: #f76c6c;
		}
		html, body{
			margin: 0;
			padding: 0;
			background: url(img/travel/bg.JPG);
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			color: white;
		}
	</style>
</head>
<body>
	<header>
		<div id="h" class="hwrap">
			<div class="hlinks">
				<a href="index.php"><div class="hlink"><div id="atxt3">Home</div></div></a>
				<a href="logout.php"><div class="hlink"><div id="atxt3">Logout</div></div></a>
			</div>
		</div>
	</header>
	<div class="container">
		<div class="grid-container3">
			<div class="grid-item3">
				<h2>Travel IMG Upload</h2>
				<div class="upfrm">
					<form action="uploadtravel.php" method="post" enctype="multipart/form-data">
						Select Image File to Upload:
						<input type="file" name="file">
						<input type="submit" name="submit" value="Upload">
						</br>Ort:  <input type="text" name="ort">
						</br>Datum: <input type="text" name="datum">
					</form>
				</div>
			</div>
			<div class="grid-item3">
				<h2>Drawings IMG Upload</h2>
				<div class="upfrm">
					<form action="uploaddraw.php" method="post" enctype="multipart/form-data">
						Select Image File to Upload:
						<input type="file" name="file">
						<input type="submit" name="submit" value="Upload">
						</br>Titel:  <input type="text" name="titel">
						</br>Sonstiges(Jahr, ~Zeit): <input type="text" name="zeit">
						</br>Grösse(s/ss/sss): <input type="text" name="groesse">
						</br>Textfarbe(w/s = 1/2): <input type="text" name="textf">
					</form>
				</div>
			</div>
		</div>
		<div class="gallery">
			</br></br></br>
			<div class="grid-container4">
				<div class="grid-item4">
					<div class="grid-container1">
						<?php

						include 'dbConfig.php';
						
						if(isset($_POST['submit']) && !empty($_POST['submit']) && isset($_POST['id']) && !empty($_POST['id'])){
							$submit = htmlspecialchars($_POST['submit']);
							$id = htmlspecialchars($_POST['id']);
							
							$sql = "SELECT file_name FROM travelimages WHERE iD = ".$id;
							$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
									$url = $row["file_name"];
								}
								if($submit === 'ok') {
									die();
								}else{
									unlink('travelimg/'.$url.'');
									$sql = "DELETE FROM travelimages WHERE id = ".$id;
									mysqli_query($conn, $sql);
								}
							}
						}
			
						$sql = "SELECT * FROM travelimages ORDER BY uploaded_on DESC";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
			
							while($row = mysqli_fetch_assoc($result)) {
								$imageURL = 'travelimg/'.$row["file_name"];
								$datum = $row["datum"];
								$ort = $row["ort"];
								$id = $row["id"];
						?>		
								<div class="grid-item1">
									<div class="grid-container2">
										<div class="grid-item2"><img src="<?php echo $imageURL; ?>" alt="" /></div>  
										<div class="grid-item2"><?php echo  $ort; ?><?php echo "   $datum"; ?></div> 
										<form method="post" action="admin.php">
											<input type="hidden" name="id" value="<?php echo "   $id"; ?>">
											<div class="grid-item2"><button type="submit" name="submit" value="nok">DELETE</button></div>
										</form>
									</div>
								</div>
						<?php 
							}
						}else{ 
						?>
							<p>No image(s) found...</p>
						<?php 
						} 
						?>
					</div>
				</div>
				<div class="grid-item4">
					<div class="grid-container1">
						<?php

						include 'dbConfig.php';
						
						if(isset($_POST['submit']) && !empty($_POST['submit']) && isset($_POST['id']) && !empty($_POST['id'])){
							$submit = htmlspecialchars($_POST['submit']);
							$id = htmlspecialchars($_POST['id']);
							
							$sql = "SELECT file_name FROM drawimages WHERE iD = ".$id;
							$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
									$url = $row["file_name"];
								}
								if($submit === 'ok') {
									die();
								}else{
									unlink('drawimg/'.$url.'');
									$sql = "DELETE FROM drawimages WHERE id = ".$id;
									mysqli_query($conn, $sql);
								}
							}
						}
			
						$sql = "SELECT * FROM drawimages ORDER BY uploaded_on DESC";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
			
							while($row = mysqli_fetch_assoc($result)) {
								$imageURL = 'drawimg/'.$row["file_name"];
								$zeit = $row["zeit"];
								$titel = $row["titel"];
								$id = $row["id"];
						?>			
								<div class="grid-item1">
									<div class="grid-container2">
										<div class="grid-item2"><img src="<?php echo $imageURL; ?>" alt="" /></div>  
										<div class="grid-item2"><?php echo  $titel; ?><?php echo "   $zeit"; ?></div> 
										<form method="post" action="admin.php">
											<input type="hidden" name="id" value="<?php echo "   $id"; ?>">
											<div class="grid-item2"><button type="submit" name="submit" value="nok">DELETE</button></div>
										</form>
									</div>
								</div>
						<?php 
							}
						}else{ 
						?>
							<p>No image(s) found...</p>
						<?php 
						} 
						?>
					</div>
				</div>
			</div>
		</div>		
	</div>
		<script>
			function scr(){
				var x = window.pageYOffset;
				if (x > 0){
					document.getElementById("logo").classList.add("logosmall");
					document.getElementById("biglogo").classList.add("blc");
					document.getElementById("hb").classList.add("hs1");
					document.getElementById("h").classList.add("hs");
				} else {
					document.getElementById("logo").classList.remove("logosmall");
					document.getElementById("biglogo").classList.remove("blc");
					document.getElementById("hb").classList.remove("hs1");
					document.getElementById("h").classList.remove("hs");
				}
			}
			window.onscroll = scr;
		</script>
</body>
</html>