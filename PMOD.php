<?php require('connection.php');?>
<html>
 <head>
  
   <title>Print/Modify Patient Profile</title>
 </head> 
 <body bgcolor="#eee">
<table border="1" align=center width=1000 cellspacing=5 cellpadding=5>
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>
<tr bgcolor=red><td align=center><font SIZE=6 color=white>Federal Medical Center</font></td></tr>

<tr><td><table align=center width=1000 cellspacing=0 cellpadding=10>
<tr><td align=center><a href=dlist.php>Doctors</td><td align=center><a
href=plist.php>Patients</td>
<td align=center><a href=alist.php>Appointments</td>
</table></td></tr>

<?php

$rnooo=trim($_GET["rno"]);



$rs1=mysql_query("SELECT * from patient where pno='".$rnooo."'");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {
 echo "<tr bgcolor=red><td ><font size=4 color=white>Edit/Print Patient
Details</font></td></tr>";
 echo "<form name=fpmod method=post action=pupdate.php>";
 echo "<tr><td><table width=1000 cellspacing=0 cellpadding=10>";


echo "<td align=center><a href=imgadd.php>View photo</td>";

echo "<tr><td>Patient Photo</td><td><input type=file name=image 
   value='".$row[14]."'></td></tr>";


 echo "<tr><td>Patient Name</td><td><input type=text name=name 
size=30 maxlength=30 value='".$row[1]."'></td></tr>";

 echo "<tr><td>Address</td><td><input type=text name=addr 
size=30 maxlength=30  value='".$row[2]."'></td></tr>";
echo "<tr><td>City/Town</td><td><input type=text name=city 
size=30 maxlength=15  value='".$row[3]."'></td></tr>";
echo "<tr><td>State</td><td><input type=text name=state 
size=30 maxlength=11  value='".$row[4]."'></td></tr>";
echo "<tr><td>Sex</td><td><input type=text name=sex 
size=30 maxlength=1  value='".$row[5]."'></td></tr>";
echo "<tr><td>Phone Number</td><td><input type=number name=phone 
size=30 maxlength=11  value='".$row[6]."'></td></tr>";
echo "<tr><td>Age</td><td><input type=number name=age 
size=30 maxlength=4  value='".$row[7]."'></td></tr>";
echo "<tr><td>Occupation</td><td><input type=text name=occupa 
size=30 maxlength=30  value='".$row[8]."'></td></tr>";
echo "<tr><td>Relationship</td><td><input type=text name=rela 
size=30 maxlength=11  value='".$row[9]."'></td></tr>";

echo "</table></td></tr>";
 echo "<tr bgcolor=red><td align=center><font size=4 color=white>Patient Next Of Kin
Details</font></td></tr>";


 echo "<tr><td><table width=1000 cellspacing=0 cellpadding=10>";

echo "<tr><td>Next Of Kin Name </td><td><input type=text name=next 
size=30 maxlength=30  value='".$row[10]."'></td></tr>";

echo "<tr><td>Relationship</td><td><input type=text name=nrela 
size=30 maxlength=15  value='".$row[11]."'></td></tr>";

echo "<tr><td>Phone Number</td><td><input type=number name=nphone 
size=30 maxlength=11  value='".$row[12]."'></td></tr>";

echo "<tr><td>Address</td><td><input type=text name=naddr 
size=30 maxlength=30  value='".$row[13]."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td colspan=2 align=center><input type=hidden name=rno value=".$rnooo."><input type=submit value=Submit></td></tr>";



echo "</form>";

 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>No Records
Deleted</font></td></tr>";
?>

<td align=center><a href=pdel.php?rno=".$row[0].">Delete</td>
</table>
</body>
</html> 