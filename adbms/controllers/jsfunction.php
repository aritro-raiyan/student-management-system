<html>
<head>
</head>

<body>
	<script type="text/javascript">
	function validateForm()
	{
  		let name = document.forms["myform"]["name"].value;
  		let email = document.forms["myform"]["email"].value;
  		let username = document.forms["myform"]["username"].value;
  		let password = document.forms["myform"]["password"].value;
  		let confirmpassword = document.forms["myform"]["confirmpassword"].value;
  		let gender = document.forms["myform"]["gender"].value;
  		let date = document.forms["myform"]["mydate"].value;
  		let month = document.forms["myform"]["mymonth"].value;
  		let year = document.forms["myform"]["myyear"].value;

 		if (name == "") 
 		{
   	 		alert("Name must be filled out");
    		return false;
  		}

		if (email == "") 
 		{
   	 		alert("Email must be filled out");
    		return false;
  		}

  		if (username == "") 
 		{
   	 		alert("Username must be filled out");
    		return false;
  		}

  		if (password == "") 
 		{
   	 		alert("Password must be filled out");
    		return false;
  		}

  		if (confirmpassword == "") 
 		{
   	 		alert("Password did not match");
    		return false;
  		}

  		if (gender == "") 
 		{
   	 		alert("Gender must be filled out");
    		return false;
  		}

  		if (mydate == "") 
 		{
   	 		alert("DATE OF BIRTH must be filled out");
    		return false;
  		}

  		if (mymonth == "") 
 		{
   	 		alert("DATE OF BIRTH must be filled out");
    		return false;
  		}

  		if (myyear == "") 
 		{
   	 		alert("DATE OF BIRTH must be filled out");
    		return false;
  		}

	}	
	
	</script>
</body>
</html>