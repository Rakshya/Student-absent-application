<?php
session_start();

include 'connection.php';

$formstudentid = $_POST['student_id'];
$loggedinstudentid = $_SESSION['student_userid'];

$result = mysql_query("select first_name,last_name from student where student_id = '$loggedinstudentid'");
while($row = mysql_fetch_array($result)){
	$fname = $row['first_name'];
	$lname = $row['last_name'];
}

if($formstudentid == $loggedinstudentid){
		mysql_query("insert into absent_report(first_name,last_name,student_id,contact_no,address,semester,course,days_no,subject,reason)
			VALUES ('$fname','$lname','$formstudentid','$_POST[contact_no]','$_POST[address]','$_POST[semester]'
			,'$_POST[course]','$_POST[days_no]','$_POST[subject]','$_POST[reason]')");
}
else{
	$_SESSION['alert'] = "you are not authorized student";
}
header('location:index.php');
mysql_close($con);
?>