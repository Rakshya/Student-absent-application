

<html>
<head>
<title>Singin</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

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
</head>
<body class="bg">
	<div class="header-bg">
		<div class="wrap">
			<div class="header">
				<div class="logo">
					<a href="index.php"><img src="images/logoo.png"> </a>
				</div>
				<div class="menu">
					<ul class='kwicks kwicks-horizontal'>
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li  class="active"><a href="sign.php">Login</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
<!---start-content---->
	<div class="wrap">
		<div class="content">
			<div class="form">
      
				<h1>Student absent application</h1>
          
				<form action="insert.php" method="post">
          
				<!-- <div class="top-row">
					<div class="field-wrap">
						<label>
							First Name<span class="req"></span>
						</label>
						<input type="text" name="first_name" required/>
					</div>
        
					<div class="field-wrap">
					  <label>
						Last Name<span class="req"></span>
					  </label>
					  <input type="text" name="last_name"required/>
					</div> 
				</div>  -->
				<div class="field-wrap">
					<label>
					 Student Id<span class="req"></span>
					</label>
					<input type="text" maxlength="10" name="student_id" required/>
				</div>

				<div class="field-wrap">
					<label>
					 Contact No<span class="req"></span>
					</label>
					<input type="tel"maxlength="10" name="contact_no" required/>
				</div>
		  
          
				<div class="field-wrap">
					<label>
						Address<span class="req"></span>
					</label>
					<input type="text" name="address" required />
				</div>
		  
		 
          
			<div class="field-wrap">
				<select input="" name="semester" required><option value="Semester">Semester</option>
	
					<option name="Semester" value="First">First</option>
					<option name="Semester" value="Second">Second</option>
					<option name="Semester" value="Third">Third</option>
					<option name="Semester" value="Fourth">Fourth</option>
					<option name="Semester" value="Fifth">Fifth</option>
					<option name="Semester" value="Sixth">Sixth</option>
					<option name="Semester" value="Seventh">Seventh</option>
					<option name="Semester" value="Eight">Eight</option>
				</select>
           
			</div>
          
			<div class="field-wrap">
				<select name="course"required><option value="Course">Course</option>
		
					<option value="BIM">BIM</option>
					<option value="BBA">BBA</option>
				</select>
			</div>
			<div class="field-wrap">
				<select name="days_no"required><option value="No of days">No.of days</option>
					<option value="Today">Today</option>
					<option value="2 days">2 days</option>
					<option value="3 days">3 days</option>
					<option value="4 days">4 days</option>
					<option value="5 days">5 days</option>
					<option value="6 days">6 days</option>
					<option value="7 days">7 days</option>
				</select>
           </div>
		  
			<div class="field-wrap">
				<label>
					Subject to<span class="req"></span>
				</label>
				<input type="text" name="subject" required autocomplete="off" maxlength="50"/>
			</div>
		  
			<div class="field-wrap">
				<label>
					Reason<span class="req"></span> 
				</label>
				<input type="text" name="reason" required autocomplete="off" maxlength="100"/>
			</div>
          <button type="submit" class="button button-block"/>Submit</a></p></button>
		
          </form>

        </div>
	</div>

		
        
        
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
    <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/sign.js"></script>-->
						
				    
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
				<li><a href="sign.php">Login/></li>
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