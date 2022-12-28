<?php	
 require '../models/usermodel.php';
session_start();
if (isset($_REQUEST['login'])) 
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn = oci_parse(connection(), "select username,password from user_list where username='$username' and password='$password'");       
		oci_execute($conn);
		$row = oci_fetch_all($conn, $RESULT);
		$RESULT = array();
			if($row)
				{
    				$_SESSION['username']=$username;
    				$_SESSION['time_start_login'] = time();
    				$RESULT['message']="Login Successfully"; 
    				header("location: ../views/dataview.php");
				}
				else
				{
    				echo '<script>alert("Username or password in incorrect")</script>';
				}
				$r = array($RESULT);
				echo json_encode($r);
	}
				?>