<?php require('connection.php');?>
<html>
 <head>
  <title>Delete Doctors</title>
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
<tr bgcolor=red><td ><font size=4 color=white>Doctors
List</font></td></tr>
<tr><td><a href=dadd.php>Add New Record</a></td></tr>
<tr><td><table width=1000 cellspacing=0 cellpadding=10>
<tr bgcolor=#ccccc><td align=left>S No</td><td align=left>Doctor
Name</td><td align=left>Department</td><td
align=left>Options</td></tr>
<?php

error_reporting(1);
$todel=$_GET['rno'];
mysql_query("update doct SET dshow='N' where dno='$todel' ;");
$rs1=mysql_query("SELECT * from doct where dshow='Y' order by
dname;");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {
 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td><a
href=dmod.php?rno=".$row[0].">Modify</a> | <a
href=ddel.php?rno=".$row[0].">Delete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table></td></tr>
<tr><td align=center><hr></td></tr>
<tr bgcolor=red><td><font size=4 color=white>Deleted
Records</font></td></tr>
<tr><td><table width=1000 cellspacing=0 cellpadding=10>
<tr bgcolor=#ccccc><td align=left>S No</td><td align=left>Doctor
Name</td><td align=left>Department</td><td
align=left>Options</td></tr>
<?php
$rs2=mysql_query("SELECT * from doct where dshow='N' order by
dname;");
$sno=1;
while( $row=mysql_fetch_array($rs2)) {
 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td><a
href=dundel.php?rno=".$row[0].">Undelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table></td></tr> 
</table>
</body>
</html> 