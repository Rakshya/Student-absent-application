<?php
session_start();
$con=mysql_connect("localhost","root","root");
if(!mysql_select_db("student",$con)){
    die("cannot connect".mysql_error());
}

$result1=mysql_query("select first_name,last_name,student_id,password from student");
while ($row = mysql_fetch_array($result1)) {

    if ((strcmp($row['first_name'],$_POST['first_name']) == 0) && (strcmp($row['last_name'],$_POST['last_name']) == 0) 
		&& (strcmp($row['student_id'],$_POST['student_id']) == 0) && (strcmp($row['password'],$_POST['password']) == 0))
    {
		$_SESSION['student_userid'] = $row['student_id'];
        header('location:form.php');
    }
}
die ("Error" . mysql_error());
?>