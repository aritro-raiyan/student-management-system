<?php	
 include ('../controllers/logincheck.php');
 include ('../models/css.php');
 ?>

<!html>
	<head>
		<title> Login </title>
	</head>
	<body>
		<form method="POST" >
			<table >
				<tr bgcolor="White">
					<td >
						<h2> Student Management System </h2>
					</td>
					<td align="right">
						<button class="button button2"><a href="reg.php"> Registration </a></button>
					</td>
				</tr>
				<tr >
					<td colspan="3" align="center">
						<form>
							<fieldset>
								<legend> LOGIN </legend>
								<table>
									<tr>
										<td> User Name: </td>
										<td> <input type="text" name="username" value=""> </td>
									</tr>
									<tr>
										<td> Password: </td>
										<td> <input type="password" name="password" value=""> </td>
									</tr>
									<tr>
										
									</tr>
									<tr>
										<td>
											<br>
											<input type="submit" name="login" value="login">
											<br>
										</td>
									</tr>
								</table>
							</fieldset>
						</form>
					</td>
				</tr>
				<tr height="50px">
					<td align="center" colspan="3">
						<p>FFF:Student Management System @2022</p>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>

