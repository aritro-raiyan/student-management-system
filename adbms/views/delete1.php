<?php 
include ('../models/css.php');
?>
<html>  
<head>  
 
</head>  
<body>  
	<h2 style="text-align:justify"> Student Management System </h2>
<?php  
$objConnect = oci_connect("ari","1234","localhost/XE");  
$strSQL = "SELECT * FROM STD";  
$objParse = oci_parse ($objConnect, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
?>  
<table width="600" border="1">  
<tr>  
<th width="91"> <div align="center">ID  </div></th>  
<th width="98"> <div align="center">Name  </div></th>  
<th width="198"> <div align="center">Semester </div></th>  
<th width="97"> <div align="center">Admit Date  </div></th>  
<th width="59"> <div align="center">Date of Brith  </div></th>  
<th width="59"> <div align="center">Dept No </div></th>  
<th width="30"> <div align="center">Delete  </div></th>   
</tr>  
<?php  
while($objResult = oci_fetch_array($objParse,OCI_BOTH))  
{  
?>  
<tr>  
<td><div  align="center"><?= $objResult ["STD_ID"];?></div></td>  
<td><?= $objResult["STD_NAME"];?></td>  
<td><?= $objResult["SEM"];?></td>  
<td><div  align="center"><?= $objResult["ADMITDATE"];?></div></td>  
<td align="right"> <?=$objResult["DOB"];?> </td>
<td align="right"> <?=$objResult["DEPTNO"];?> </td>  
 
<td align="center"><a  href="delete2.php?STD_ID=<?=$objResult["STD_ID"];?>">Delete</a>
 
<!-- Confirm Delete  
<td align="center"><a href="JavaScript:if(confirm('Confirm Delete?')==true){window.location='php_oracle_delete2.php?CusID=<?=$objResult["STD_ID"];?>';}">Delete</a></td>  
-->  
</tr>  
<?php  
}  
?>  
</table>  
<?php  
oci_close($objConnect);  
?>  
<button class="button button2"><a href="dataview.php">Home</a></button>
</body>  
</html>  