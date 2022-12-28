<?php

	require '../models/usermodel.php';
	if (isset($_REQUEST['submit'])) 
	{


		$username = $_POST['username'];
		$password = $_POST['password'];
		$confirmpassword = $_POST['confirmpassword'];


		if ($username != null &&  $password != null)
		{
			if ($password == $confirmpassword) 
			{
				
				$conn = oci_parse(connection(), "INSERT INTO USER_LIST (username,password) VALUES ('$username','$password')"); 
				$result = oci_execute($conn);  

			header('location: ../views/login.php');
			}
			else 
			{
				header('location: ../views/reg.php?msg=error');
			}
		} 
		else 
		{
			echo "Null Submission!";
		}
	
	}

?>