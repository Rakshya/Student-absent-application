<?php


include 'connection.php';
$sql ="insert into absent_report(first_name,last_Name,student_id,contact_no,address,semester,course,days_no,subject,reason)
VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[student_id]','$_POST[contact_no]','$_POST[address]','$_POST[semester]','$_POST[course]','$_POST[days_no]','$_POST[subject]','$_POST[reason]')";
 if(!mysql_query($sql,$con))
 {
     die ("Error".mysql_error());
 }
header('location:index.html');
mysql_close($con);
?>