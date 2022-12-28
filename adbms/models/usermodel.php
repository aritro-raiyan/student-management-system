<?php
	
	function connection()
	{
		$conn = oci_connect("ari","1234","localhost/XE");
		if(!$conn)
		{
			$error = oci_error();
			trigger_error(htmlentities($error['message'],ENT_QUOTES),E_USER_ERROR);

		}
		return $conn;
	}	
?>