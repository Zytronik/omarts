<!doctype html>
<html>
	<?php
		error_reporting(0);
		session_start();
		if($_SESSION["lgn"] == NULL){
			$_SESSION["lgn"] = false;
		} elseif ($_SESSION["lgn"]){
			header("Location: connected.php");
			die();
		} else {
			$_SESSION["lgn"] = false;
		}
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
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="ninja-slider.css" rel="stylesheet" type="text/css" />
		<link href="custom.css" rel="stylesheet">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="js/ninja-slider.js" type="text/javascript"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<title>omarts</title>
	</head>
	
	<body>
		<header>
			<div id="h" class="hwrap">
				<div id="hb" class="headerbig">
					<div id="headerwrapper">
						<a href="#main"><div id="logo"></div></a>
						<div class="hlinks">
							<a href="#art"><div class="hlink"><div id="atxt1">Art</div></div></a>
							<a href="#photography"><div class="hlink"><div id="atxt2">Photography</div></div></a>
							<a href="#about"><div class="hlink"><div id="atxt3">About</div></div></a>
							<a href="#signin"><div class="hlink"><div id="atxt3">Login & Register</div></div></a>
							<a href="#media"><div class="hlink"><div id="atxt3">Media</div></div></a>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div id="main">
			<div id="home" class="home" >
				<div id="biglogo"></div>
				<div class="centered">
					<a href="#art">
						<img id="scrolla" src="img/scrollarrow.png"  onmouseover="scrollaapear();"  onmouseout="scrolladisapear();">
					</a>
				</div>
			</div>
						
			<div id="art"></div>
			<div id="arttxt">
				<div class="sectiontitle">Digital & Traditional Art</div>
				<div class="sectiontxt ast">
					<div id="exampleSlider">
					   <div class="MS-content">
							<?php
								include 'dbConfig.php';
								
								$sql = "SELECT file_name, uploaded_on, titel, zeit, groesse, textf FROM drawimages";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									// output data of each row
									
									while($row = mysqli_fetch_assoc($result)) {
										$titel = $row["titel"];
										$zeit = $row["zeit"];
										$url = $row["file_name"];
										$groesse = $row["groesse"];
										$textf = $row["textf"];
										
										if($textf == 1){
											$textf= "";
										}
									echo'
									<div data-aos="zoom-in" class="item">
										<div class="container">
											<img class="'.$groesse.'litem" src="drawimg/'.$url.'">
											<div class="overlay">
												<div class="text'.$textf.'">"'.$titel.'" ('.$zeit.')</div>
											</div>
										</div>
									</div>
									';
			
									}
									
								} else {
									echo "0 results";
								}
							?>
					   </div>
					   <div class="MS-controls">
						   <button class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
						   <button class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
					   </div>
				   </div>
				</div>
			</div>
			
			<video autoplay muted loop id="myVideo2">
				<source src="img/test8.mp4" type="video/mp4">Your browser does not support HTML5 video.
			</video>
			
			<div id="photography"></div>
			<div id="photographytxt">
				<div class="sectiontitle">Photography</div>
				<div class="sectiontxt ast">
					<div style="display:none;">
						<div id="ninja-slider">
							<div class="slider-inner">
								<ul>
								<?php
								include 'dbConfig.php';
								
								$sql = "SELECT file_name, uploaded_on, ort, datum FROM travelimages";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									// output data of each row
									
									while($row = mysqli_fetch_assoc($result)) {
										$datum = $row["datum"];
										$ort = $row["ort"];
										$url = $row["file_name"];
									echo'<li>
										<a class="ns-img" href="travelimg/'.$url.'"></a>
										<div class="caption">
											<h3>'.$ort.' ('.$datum.')</h3>
										</div>
									</li>';
			
									}
									
								} else {
									echo "0 results";
								}
								?>
								</ul>
								<div id="fsBtn" class="fs-icon" title="Expand/Close"></div>
							</div>
						</div>
					</div>
					<div style="max-width:2500px;margin:90px auto;">
						<div class="gallery">
								<?php
								include 'dbConfig.php';
								
								$sql = "SELECT file_name, uploaded_on, ort, datum FROM travelimages";
								$result = mysqli_query($conn, $sql);
								if (mysqli_num_rows($result) > 0) {
									// output data of each row
								$lighboxnr = 0;
									
									while($row = mysqli_fetch_assoc($result)) {
										$datum = $row["datum"];
										$ort = $row["ort"];
										$url = $row["file_name"];
										echo'<img class="gallery-item" data-aos="zoom-in" src="travelimg/'.$url.'" onclick="lightbox('.$lighboxnr.')" />';
										$lighboxnr = $lighboxnr+1;
										
									}
									
								} else {
									echo "0 results";
								}
								?>
						</div>
					</div>
				</div>
			</div>
			
			<video autoplay muted loop id="myVideo">
			<source src="img/test9.mp4" type="video/mp4">Your browser does not support HTML5 video.</video>
			
			<div id="about"></div>
			<div id="abouttxt">
				<div class="sectiontitle">About</div>
				<div class="sectiontxt ast">
					<table id="table1">
						<tr>
							<td id="td1" data-aos="zoom-in">Hi! My name is Omar. I'm a 17 years old IT student in Zurich, Switzerland.
								My hobbies are riding scooter, drawing, climbing, archery and traveling around the world.
								These are activities that I enjoy immensely and indulge daily.
								My career aspirations are to become a Webdesigner or an Illustrator. If you have any questions, let me know! <br><br>
								</td>
							<td id="td2" data-aos="zoom-in"><img id="pb"src="img/omar.jpg" ></td>
						</tr>
					</table>
				</div>
			</div>
			
			<div class="row">
				 <div class="column">
					<img src="img/test5.png" data-aos="zoom-in-left" class="abstand2" style="width:100%">
				 </div>
				 <div class="column">
					<img src="img/test6.png" data-aos="zoom-in-right" class="abstand2" style="width:100%">
				 </div>
			</div>
			
			<div id="signin"></div>
			<div id="signintxt">
				<div class="sectiontitle">Login & Register</div>
				<div class="sectiontxt ast">
					<div class="alles">
						<table id="table1">
							<tr>
								<td style="width: 50%;" data-aos="zoom-in">
									<div class='window'>
										<div id="invalidtxt" class="hidden"><p style="	font-size: 21px; color: #f76c6c;">Invalid Login</p></div>
										<div id="mailtxt" class="hidden"><p style="	font-size: 21px; color: #f76c6c;">Check your E-Mail to Login.</p></div>
										<form id="loginform" action="login.php" method="post">
											<div class='input-fields'>
												<input id="rguname" name="uname" type="text" placeholder="Username" class='input-line full-width'></input>
												<input id="lgnpwd" required type="password" name="pwd" placeholder="Password" class='input-line full-width'></input>
											</div>
										<div><button type="submit" value="Login" class='ghost-round full-width'>Login</button></div>
										</form>
									</div>	
								</td>
								<td style="width: 50%;" data-aos="zoom-in"> 
									<div class='window'>
										<div id="emailtxt" class="hidden"><p style="font-size: 21px; color: #f76c6c;">This E-Mail is already in use.</p></div>
										<div id="usertxt" class="hidden"><p style="	font-size: 21px; color: #f76c6c;">Username already in use or invalid.</p></div>
										<div id="registertxt" class="hidden"><p style="	font-size: 21px; color: #f76c6c;">Check your E-Mail to verify.</p></div>
										<form id="registerform" action="register.php" method="post">
											<div class='input-fields'>
												<input id="rguname"  name="uname" type="text" placeholder="Username" class='input-line full-width'></input>
												<input id="rgemail"  name="email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Email" class='input-line full-width'></input>
												<input id="rgpwd" required type="password" name="pwd" placeholder="Password" class='input-line full-width'></input>
											</div>
											<div><button type="submit" value="Register" class='ghost-round full-width'>Register</button></div>
										</form>
									</div>	
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			
			<div id="abstand"></div>
						
			<div id="media"></div>
			<div id="mediatxt">
				<div class="sectiontitle">Media</div>
				<div class="sectiontxt ast">
					<table id="table2">
						<tr>
							<td id="td3" data-aos="zoom-in">
								<a href="mailto:omar.oberholzer@gmail.com">
									<img class="media"src="img/mail.png"
										 onmouseover="this.src='img/rmail.png';"
										 onmouseout="this.src='img/mail.png';">
									</img>
								</a>
							</td>
							<td id="td3" data-aos="zoom-in">
								<a href="https://www.instagram.com/xomar.julianx/">
									<img class="media"src="img/insta.png"
										 onmouseover="this.src='img/rinsta.png';"
										 onmouseout="this.src='img/insta.png';">
									</img>
								</a>
							</td>
							<td id="td3" data-aos="zoom-in">
								<a href="https://www.youtube.com/channel/UCe39Suh0EoLLI9pczXI8qEw">
									<img class="media"src="img/yt.png"
										 onmouseover="this.src='img/ryt.png';"
										 onmouseout="this.src='img/yt.png';">
									</img>
								</a>
							</td>
							<td id="td3" data-aos="zoom-in">
								<a href="https://www.pinterest.de/omaroberholzer/">
									<img class="media"src="img/p.png"
										 onmouseover="this.src='img/rp.png';"
										 onmouseout="this.src='img/p.png';">
									</img>
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
			
			
			<footer>
				<div class="footertxt">
					<a href="#main" class="footerlink">© omarts 2019</a>
				</div>
			</footer>
		</div>
		
	<script src="js/jquery-2.2.4.min.js"></script>

    <script src="js/multislider.min.js"></script>
	
<script>
		AOS.init({
		  duration: 1200,
		})
</script>
<script>
    $('#exampleSlider').multislider({
        interval: 4000,
        slideAll: true,
        duration: 1500
    });
</script>
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
<script>
				$(document).ready(function(){
				$("a").on('click', function(event) {
					if (this.hash !== "") {
					event.preventDefault();
					var hash = this.hash;
					$('html, body').animate({
					scrollTop: $(hash).offset().top
					}, 600, function(){
					window.location.hash = hash;
					});
					}
				});
			});
</script>
<script>
			var background_image_parallax = function($object, multiplier, offset){
			multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
				multiplier = 1 - multiplier;
			var $doc = $(document);
			offset = typeof offset !== 'undefined' ? offset : 0;
				offset = offset;
			$object.css({"background-attatchment" : "fixed"});
				$(window).scroll(function(){
				var from_top = $doc.scrollTop(),
					bg_css = '0px ' +(multiplier * from_top + offset) + 'px';
				$object.css({"background-position" : bg_css });
			});
			};
			
			background_image_parallax($("#img1"), 0.15);
</script>
<script>
        function lightbox(idx) {
            //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
            var ninjaSldr = document.getElementById("ninja-slider");
            ninjaSldr.parentNode.style.display = "block";

            nslider.init(idx);

            var fsBtn = document.getElementById("fsBtn");
            fsBtn.click();
        }

        function fsIconClick(isFullscreen, ninjaSldr) { //fsIconClick is the default event handler of the fullscreen button
            if (isFullscreen) {
                ninjaSldr.parentNode.style.display = "none";
            }
        }
</script>
<script>
	$(document).ready(function() {
	  $('#loginform').submit(function(e) {
		e.preventDefault();
		$.ajax({
		   type: "POST",
		   url: 'login.php',
		   data: $(this).serialize(),
		   success: function(data)
		   {
			  switch(data) {
					case "login":
						$(location).attr('href', 'login.php');
						break;
					case "invalid":
						document.getElementById("invalidtxt").classList.remove("hidden");
						document.getElementById("lgnuname").classList.add("invalid");
						document.getElementById("lgnpwd").classList.add("invalid");
						document.getElementById("lrcontainer").classList.add("invalidbox");
						document.getElementById("emailtxt").classList.add("hidden");
						document.getElementById("registertxt").classList.add("hidden");
						document.getElementById("mailtxt").classList.add("hidden");
						document.getElementById("usertxt").classList.add("hidden");
						break;
					case "mail":
						document.getElementById("mailtxt").classList.remove("hidden");
						document.getElementById("invalidtxt").classList.add("hidden");
						document.getElementById("lgnuname").classList.add("invalid");
						document.getElementById("lgnpwd").classList.add("invalid");
						document.getElementById("lrcontainer").classList.add("invalidbox");
						document.getElementById("emailtxt").classList.add("hidden");
						document.getElementById("registertxt").classList.add("hidden");
						document.getElementById("usertxt").classList.add("hidden");
						break;
					default:
						break;
			  }
		   }
	   });
	 });
	});
</script>
<script>
	$(document).ready(function() {
	  $('#registerform').submit(function(e) {
		e.preventDefault();
		$.ajax({
		   type: "POST",
		   url: 'register.php',
		   data: $(this).serialize(),
		   success: function(data)
		   {
			  switch(data) {
					case "register":
						document.getElementById("registertxt").classList.remove("hidden");
						document.getElementById("emailtxt").classList.add("hidden");
						document.getElementById("invalidtxt").classList.add("hidden");
						document.getElementById("usertxt").classList.add("hidden");
						document.getElementById("mailtxt").classList.add("hidden");
						break;
					case "email":
						document.getElementById("emailtxt").classList.remove("hidden");
						document.getElementById("registertxt").classList.add("hidden");
						document.getElementById("invalidtxt").classList.add("hidden");
						document.getElementById("usertxt").classList.add("hidden");
						document.getElementById("mailtxt").classList.add("hidden");
						break;
					case "username":
						document.getElementById("emailtxt").classList.add("hidden");
						document.getElementById("registertxt").classList.add("hidden");
						document.getElementById("invalidtxt").classList.add("hidden");
						document.getElementById("usertxt").classList.remove("hidden");
						document.getElementById("mailtxt").classList.add("hidden");
						break;
					default:
						break;
			  }
		   }
	   });
	 });
	});
</script>
	</body>
</html>