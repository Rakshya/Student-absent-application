<?php


include 'connection.php';
$sql ="insert into student(first_name,last_name,student_id,password)
VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[student_id]','$_POST[password]')";
 if(!mysql_query($sql,$con))
 {
     die ("Error".mysql_error());
 }
header('location:display.php');
mysql_close($con);
?>