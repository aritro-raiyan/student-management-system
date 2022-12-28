<?php 
include ('../models/css.php');
?>
<html>  
<head>  

</head>  
<body>  
<?php  
$objConnect =  oci_connect("ari","1234","localhost/XE");  
$strSQL = "DELETE FROM STD ";  
$strSQL .="WHERE STD_ID = '".$_GET["STD_ID"]."' ";  
$objParse = oci_parse($objConnect, $strSQL);  
$objExecute = oci_execute($objParse, OCI_DEFAULT);  
if($objExecute)  
{  
oci_commit($objConnect); //*** Commit Transaction ***//  
echo "Record Deleted.";  
}  
else  
{  
oci_rollback($objConnect); //*** RollBack Transaction ***//  
$e = oci_error($objParse);  
echo "Error Delete [".$e['message']."]";  
}  
oci_close($objConnect);  
?>  
<button class="button button2"><a href="dataview.php">Home</a></button>
</body>  
</html>  