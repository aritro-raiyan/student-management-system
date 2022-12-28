<?php 
include ('../models/css.php');
?>
<html>  
<head>  
</head>  
<body>  
	<h2 style="text-align:justify"> Student Management System </h2>
<form action="insert2.php" name="frmAdd" method="post">  
<table width="600" border="1">  
<tr>  
<th width="91"> <div align="center">ID  </div></th>  
<th width="98"> <div align="center">Name  </div></th>  
<th width="198"> <div align="center">Semester </div></th>  
<th width="97"> <div align="center">Admit Date  </div></th>  
<th width="59"> <div align="center">Date of Brith  </div></th>  
<th width="59"> <div align="center">Dept No </div></th>  
</tr>  
<tr>  
<td><div align="center"><input type="text" name="txID" size="5"></div></td>  
<td><input type="text" name="txtNAME" size="20"></td>  
<td><input type="text" name="txtSEM" size="20"></td>  
<td><div align="center"><input type="text" name="txtADMITDATE" size="2"></div></td>  
<td align="right"><input type="text" name="txtDOB" size="5"></td>  
<td align="right"><input type="text" name="txtDEPTNO" size="5"></td>  
</tr>  
</table>  
<input type="submit" name="submit" value="submit">  
</form>  
<button class="button button2"><a href="dataview.php">Home</a></button>
</body>  
</html>  