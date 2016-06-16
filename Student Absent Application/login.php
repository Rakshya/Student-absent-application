<?php
session_start();
	
mysql_connect("localhost","root","root");
mysql_select_db("student");

if (isset($_POST['button']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(($username != "") && ($password != ""))
    {
        $query = "select * from admin where username = '" . $username . "' and password = '" . $password . "'";
        $result = mysql_query($query);

        if(mysql_num_rows(mysql_query($query)) > 0) {

            $row = mysql_fetch_array($result);

            $_SESSION['user_id'] = $row['user_id'];
			$_SESSION['checklogin'] = "yes";
			//echo $row['user_id'];
            header("location:display.php");
        }
        else {
            die ("Username and password is incorrect!!! please try again!!!" . mysql_error());
        }
    }
	else{
		$msg="Please provide password and Username";
	}    
}
else {
	header("Location: sign.php");
}
?>