<?php
session_start();
if($_SESSION['user_id'] == "")
{	
	header("Location:sign.php");
}

$per_page = 50; //per page result
if(!isset($_GET['page']))
{
    $page = 1;  //current page
}
else
{
    $page = $_GET['page'];
}
if($page<=1)
    $start = 0; // staring row
else
    $start = $page * $per_page - $per_page;

$con=mysql_connect("localhost","root","root");

if(!mysql_select_db("student",$con)){
    die("cannot connect");
}
mysql_select_db("student",$con);
$searchq = '';
$whereClause = '';

$query = '';

if(isset($_POST['search'])) {
    $searchq = $_POST['search'];
    $query1 = "SELECT * FROM absent_report WHERE first_name LIKE '%" . $searchq . "%' OR student_id LIKE '%" . $searchq . "%' ";
    $searchresult = mysql_query($searchresult);
}
$sqli= "select * from absent_report  LIMIT $start , $per_page"   ;
$query = "SELECT * FROM absent_report";

$num_row = mysql_num_rows(mysql_query($query)); //25
$num_page = ceil($num_row/$per_page); //total number of pages  9

$result = mysql_query ($sqli);


?>
<html>
<head>
<title>Admin Control Panel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src='js/jquery-1.8.1.min.js' type='text/javascript'></script>
<script src='js/jquery.kwicks.js' type='text/javascript'></script>
<script language="javascript">
			

			function hightlight(obj) {
				obj.setAttribute("style", "height:22px; text-decoration:underline; cursor: pointer; color:blue;");
			}
			
			function unhightlight(obj) {
				obj.setAttribute("style", "height:22px; text-decoration:none; color : black;");
			}
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
						<li  class="active"><a href="logout.php">Logout</a></li>
						<li><a href="add.php">Add Student</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
    <div class="wrap">
		<!---start-content---->
				<div class="content">    
					<div class="displaybody">   
						<centre><h3><b></b> Student absent Table</h3></b></centre>
						<table border="2" cellspacing="5" cellpadding="0" style="margin-top: 10px;">

								<tr>
									<th>S.N</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Student ID</th>
									<th>Contact No</th>
									<th>Address</th>
									<th>Semester</th>
									<th>Course</th>
									<th>No of Days</th>
									<th>Subject</th>
									<th>Reason</th>
									<th>Date and Time</th>
								</tr>
							<?php
									if (mysql_num_rows($result) > 0) {
										while($row = mysql_fetch_array($result))
										{
											echo "<tr id='".$row['user_id']."' onClick='javascript: showDetails(".$row['user_id'].");' onMouseOver='javascript: hightlight(this);' onMouseOut='javascript: unhightlight(this);' style='background-color : white;'>";
											echo "<td>" .$row['S.N']."</td>";
													echo "<td>" .$row['first_name']."</td>";
													echo "<td>" .$row['last_name']."</td>";
													echo "<td>" .$row['student_id']."</td>";
													echo "<td>" .$row['contact_no']."</td>";
													echo "<td>" .$row['address']."</td>";
													echo "<td>" .$row['semester']."</td>";
													echo "<td>" .$row['course']."</td>";
													echo "<td>" .$row['days_no']."</td>";
													echo "<td>" .$row['subject']."</td>";
													echo "<td>" .$row['reason']."</td>";
													echo "<td>" .$row['date']."</td>";
													echo"</tr>";
										}
									}
									else {
										echo "<tr><td colspan='4'>No records found</td></tr>";
									}
									echo"</table>";

									$prev = $page - 1;
									$next = $page + 1;
									echo "<hr>";
									if($prev >0)
										echo "<a href='?page=$prev'> Prev</a>";

									$number=1;
									for($number; $number<=$num_page ; $number=$number+1)
									{
										if($page == $number)
										{
											echo "<b>[$number]</b>";
										}
										else
										{
											echo "<a href='?page=$number'>$number </a>";
										}
									}

									if($next <  $num_page + 1)
										echo "<a href='?page=$next'> Next </a>";

							?>
						</table>
					</div>
				</div>	
	</div>
	<div></div>
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
<?php mysql_close($con); ?>




