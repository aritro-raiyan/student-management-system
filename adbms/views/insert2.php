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
$strSQL = "INSERT INTO STD ";  
$strSQL .="(STD_ID,STD_NAME,SEM,ADMITDATE,DOB,DEPTNO) ";  
$strSQL .="VALUES ";  
$strSQL .="('".$_POST["txID"]."','".$_POST["txtNAME"]."','".$_POST["txtSEM"]."' ";  
$strSQL .=",'".$_POST["txtADMITDATE"]."','".$_POST["txtDOB"]."','".$_POST["txtDEPTNO"]."') ";  
$objParse = oci_parse($objConnect, $strSQL);  
$objExecute = oci_execute($objParse, OCI_DEFAULT);  
if($objExecute)  
{  
oci_commit($objConnect); //*** Commit Transaction ***//  
echo "Save completed.";  
}  
else  
{  
oci_rollback($objConnect); //*** RollBack Transaction ***//  
$e = oci_error($objParse);  
echo "Error Save [".$e['message']."]";  
}  
  
oci_close($objConnect);  
?>  
<button class="button button2"><a href="dataview.php">Home</a></button>
</body>  
</html>  