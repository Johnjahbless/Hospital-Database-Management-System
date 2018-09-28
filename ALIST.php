<?php
require('connection.php');
error_reporting(1);
?>
<html>
 <head>
  <title>HOSPITAL MANAGEMENT SYSTEM</title>
 </head> 
 <body bgcolor="#eee">
<table border="1" align=center width=1000 cellspacing=5 cellpadding=5>

<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>

<tr bgcolor=red><td align=center><font SIZE=6 color=white>Federal Medical Center</font></td></tr>

<tr><td><table align=center width=1000 cellspacing=0 cellpadding=10>
<tr><td align=center><a href=dlist.php>Doctors</td><td align=center><a
href=plist.php>Patients</td><td align=center><a
href=alist.php>Appointments</td>
</table></td></tr>
<tr bgcolor=red><td ><font size=4 color=white>Appointments
List</font></td></tr>
<tr><td><a href=app.php>Add New Appointments</a></td></tr>
<tr><td><table width=1000 cellspacing='0' cellpadding='10'>
<tr bgcolor=#ccccc><td align=left>S No</td><td align=left>Patient
Name</td><td align=left>Doctor
Name</td><td align=left>Time</td>
<td align=left>Date</td><td
align=left>Options</td></tr>
<?php

if($_GET['rno']!=null)
{
$todel=$_GET['rno'];
mysql_query("update appt SET ashow='N' where ano='$todel' ;");
}
$rs1=mysql_query("SELECT * from appt where ashow='Y'");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {

$rs2=mysql_query("SELECT pname from patient where pno='$row[2]'");
$rs3=mysql_query("SELECT dname from doct where dno='$row[1]'");
$rs22=mysql_fetch_assoc($rs2);
$rs33=mysql_fetch_assoc($rs3);
 echo "<tr><td>$sno</td><td>$rs22[pname]</td><td>$rs33[dname]</td><td>$row[3]</td><td>$row[5]</td><td><a
href=alist.php?rno=".$row[0].">Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>No Records Deleted
</font></td></tr>";?>
</table></td></tr>
<tr><td align=center><hr></td></tr>
<tr bgcolor=red><td><font size=4 color=white>Deleted
Records</font></td></tr>
<tr><td><table width=1000 cellspacing=0 cellpadding=10>
<tr bgcolor=#ccccc><td align=left>S No</td><td align=left>Patient
Name</td><td align=left>Doctor
Name</td><td align=left>Time</td>
<td align=left>Date</td><td
align=left>Options</td></tr>
<?php
$rs1=mysql_query("SELECT * from appt where ashow='N'");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {

$rs2=mysql_query("SELECT pname from patient where pno='$row[2]'");
$rs3=mysql_query("SELECT dname from doct where dno='$row[1]'");
$rs22=mysql_fetch_assoc($rs2);
$rs33=mysql_fetch_assoc($rs3);
 echo "<tr><td>$sno</td><td>$rs22[pname]</td><td>$rs33[dname]</td><td>$row[3]</td><td>$row[5]</td><td><a
href=aundel.php?rno=".$row[0].">Undelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>No Records Deleted</font></td></tr>";
?>
</table></td></tr>
</table>
</body>
</html> 