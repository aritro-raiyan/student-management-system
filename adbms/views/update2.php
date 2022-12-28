<?php 
include ('../models/css.php');
?>
<html>  
<head>  

</head>  
<body>  
<form  action="update3.php?STD_ID=<?=$_GET["STD_ID"];?>"  name="frmEdit" method="post">  
<?php  

$objConnect = oci_connect("ari","1234","localhost/XE"); 
$strSQL = "SELECT * FROM STD WHERE STD_ID =  '".$_GET["STD_ID"]."' ";  
$objParse = oci_parse ($objConnect, $strSQL);  
oci_execute ($objParse,OCI_DEFAULT);  
$objResult = oci_fetch_array($objParse);  
if(!$objResult)  
{  
echo "Not found STDID=".$_GET["STD_ID"];  
}  
else  
{  
  
?>  
<table width="600" border="1">  
<tr>  
<th width="91"> <div align="center">ID  </div></th>  
<th width="160"> <div align="center">Name  </div></th>  
<th width="198"> <div align="center">Semester  </div></th>  
<th width="97"> <div align="center">Admit Date  </div></th>  
<th width="70"> <div align="center">Date of Birth  </div></th>  
<th width="70"> <div align="center">Dept No  </div></th>  

</tr>  
<tr>  
<td><div align="center"><input type="text"  name="STD_ID" size="5"  value="<?=$objResult["STD_ID"];?>"></div></td>  
<td><input type="text" name="STD_NAME" size="20"  value="<?=$objResult["STD_NAME"];?>"></td>  
<td><input type="text" name="SEM" size="20"  value="<?=$objResult["SEM"];?>"></td>  
<td><input type="text" name="ADMITDATE" size="20"  value="<?=$objResult["ADMITDATE"];?>"></td>  
<td><input type="text" name="DOB" size="20"  value="<?=$objResult["DOB"];?>"></td>
<td><div align="center"><input type="text"  name="DEPTNO" size="2"  value="<?=$objResult["DEPTNO"];?>"></div></td>  


</tr>  
</table>  
<input type="submit" name="submit" value="submit">  
<?php  
}  
oci_close($objConnect);  
?>  
</form>  
<button class="button button2"><a href="dataview.php">HOME</a></button>
</body>  
</html>  