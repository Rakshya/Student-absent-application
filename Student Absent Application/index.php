<?php

session_start();
if(isset($_SESSION['alert'])){
	$alert = $_SESSION['alert'];
	?>
	<script> alert(<?php echo $_SESSION['alert'] ?>); </script>
	<?php
unset($_SESSION['alert']);
	}

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Students Absent Application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="CSS/slide.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
<script src='js/jquery-1.8.1.min.js' type='text/javascript'></script>
<script src='js/jquery.kwicks.js' type='text/javascript'></script>
<script type='text/javascript'>
	$(function() {
	$('.kwicks').kwicks({
		maxSize : 250,
		spacing : 5,
		behavior: 'menu'
		});
	});
</script>
 <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'> 
<!-- Scripts--> 
    <script type='text/javascript' src='js/jquery.min.js'></script>
    <script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='js/camera.min.js'></script> 
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			jQuery('#camera_wrap_2').camera({
				height: '500px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>
</head>
<body>
	<div class="header-bg">
		<div class="wrap">
			<div class="header">
				<div class="logo">
					<a href="index.php"><img src="images/logoo.png"> </a>
					<p>Student Absent Application</p>
				
				</div>
				<div class="menu">
					<ul class='kwicks kwicks-horizontal'>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="sign.php">login</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div id="slider">
		<figure>
			<img src="images/prime.jpg" width="600px" height="400px">
			<img src="images/bim.jpg" width="600px" height="400px">
			<img src="images/slider3.jpg" width="600px" height="400px">
			<img src="images/slider2.jpg" width="600px" height="400px">
			<img src="images/prime.jpg" width="600px" height="400px">
		</figure>
	</div>
	<div class="about">
					<h3>Prime College</h3>
					<h1>Prime College is the first IT enabled college of Nepal and has been<br>
					actively involved in educational and social sector since its <br>inception.</h1>
					
	</div>
  
	<div class="footer-bg">
		<div class="wrap">
			<div class="footer">
				<div class="f_grid">
					<div class="social">
						<ul class="follow_icon">
							<li><a href="#" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/g+.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/tw.png" alt=""></a></li>
						</ul>
					</div>
				</div>
				
				<div class="f_grid1">
					<ul class="f_nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="sign.php">Login</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
					<div class="copy">
						<p class="w3-link">&copy; 2016 Prime College. All rights reserved | Design by Rakshya Dangol</p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="f_logo">
					<a href=""><img src="images/logoo.png" alt=""></a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</body>
</html>