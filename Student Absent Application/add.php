
<!DOCTYPE HTML>
<html>
<head>
<title>Student Absent Application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/normalized.css">
<link rel="stylesheet" href="css/styles.css">
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
<body class="bg">
<div class="header-bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
		  		<a href="index.php"><img src="images/logoo.png"> </a>
				<p>Student Absent Application</p>
		 </div>
		<div class="menu">
			<ul class='kwicks kwicks-horizontal'>
				<li><a href="logout.php">Logout</a></li>
				<li  class="active"><a href="add.php">Add Student</a></li>
			</ul>
	 </div>
	 <div class="clear"></div>
	</div>
</div>
</div>
<div class="wrap">
					<!---start-content---->
	<div class="content">
	<div class="form">
      
      <ul class="tab-group1">
        <li class="tab active"><a href="#">Student</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h2>Student Log In</h2>
          
          <form action="addstudent.php" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="first_name" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="last_name" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Student ID<span class="req">*</span>
            </label>
            <input type="Number" name="student_id" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
		  <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
         <input type="submit" value="ADD" class="button button-block"/>
          
          </form>

        </div>
        
        <div id="login">   
          <h2></h2>
          
          <form action="#" method="post">
          
            <div class="field-wrap">
            <label>
              User Name<span class="req">*</span>
            </label>
            <input type="Text" name="username" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <input type ="submit" value="Login" class="button button-block" name="button"/>
		  
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/sign.js"></script>
						
				    
					</div>
					<!---End-content---->
					<div class="clear"> </div>
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