<?php 
include ('../models/css.php');
?>
<html>  
<head>  
</head>  
<body>  
<?php  
include ('../models/css.php');
$objConnect = oci_connect("ari","1234","localhost/XE");  
  
$strSQL = "UPDATE STD SET ";  
$strSQL .="STD_ID = '".$_POST["STD_ID"]."' ";  
$strSQL .=",STD_NAME = '".$_POST["STD_NAME"]."' ";  
$strSQL .=",SEM = '".$_POST["SEM"]."' ";  
$strSQL .=",ADMITDATE = '".$_POST["ADMITDATE"]."' ";  
$strSQL .=",DOB = '".$_POST["DOB"]."' ";  
$strSQL .=",DEPTNO = '".$_POST["DEPTNO"]."' ";  
$strSQL .="WHERE STD_ID = '".$_GET["STD_ID"]."' ";  
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