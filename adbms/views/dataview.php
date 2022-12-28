<html>
<head>

</head>
<body>
  <h2 style="text-align:justify"> Student Management System </h2>
<?php
include ('../models/css.php');
$conn = oci_connect("ari","1234","localhost/XE");
if (!$conn)
{exit("Connection Failed:"  . $conn);}
$sql="SELECT * FROM STD";
$rs= oci_parse($conn, $sql);
oci_execute($rs, OCI_DEFAULT);
if (!$rs)
{exit("Error in SQL");}
echo "<table border=1><tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>SEMESTER</th>";
echo "<th>ADMIT DATE</th>";
echo "<th>DATE-OF-BIRTH</th>";
echo "<th>DEPT NO</th></tr>";
while (oci_fetch($rs))
{
$sid=oci_result($rs,"STD_ID");
$sname=oci_result($rs,"STD_NAME");
$sem=oci_result($rs,"SEM");
$admit=oci_result($rs,"ADMITDATE");
$dob=oci_result($rs,"DOB");
$deptno=oci_result($rs,"DEPTNO");

echo "<tr><td>$sid</td>";
echo "<td>$sname</td>";
echo "<td>$sem</td>";
echo "<td>$admit</td>";
echo "<td>$dob</td>";
echo "<td>$deptno</td></tr>";
}
oci_close($conn);
echo "</table>";
?>
<button class="button button2"><a href="insert1.php">Insert</a></button>
<button class="button button2"><a href="search.php">Search</a></button>
<button class="button button2"><a href="update1.php">Update</a></button>
<button class="button button2"><a href="delete1.php">Delete</a></button>

</body>
</html>
