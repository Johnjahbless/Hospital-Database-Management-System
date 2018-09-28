<?php
require('connection.php');
error_reporting(1);
?><html>
 <head>
  <title>Patients Lists</title>
 </head> 
 <body bgcolor="#eee">
<table border="1" align=center width=1000 cellspacing=5 cellpadding=5>
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>


<tr bgcolor=red><td align=center><font SIZE=6 color=white>Federal Medical Center</font></td></tr>


<tr><td><table align=center width=1000 cellspacing=0 cellpadding=10>

<tr><td align=center><a href=dlist.php>Doctors</td>

<td align=center><a href=plist.php>Patients</td>

<td align=center><a href=alist.php>Appointments</td>
</table></td></tr>

<tr bgcolor=red><td ><font size=4 color=white>Patient
List</font></td></tr>

<tr><td><table align=center width=1000 cellspacing=0 cellpadding=10>

<tr><td align=center><a href=padd.php>Add New Record</td>

<td align=center><a href=diadd.php>Add New Patient Diagnosis</td>

<td align=center><a href=dilist.php>View Patient Diagnosis</td>
</table></td></tr>
<tr><td><table width=1000 cellspacing=0 cellpadding=10>

<td bgcolor=#ccccc align=left>S No</td>
<td bgcolor=#ccccc align=left>Patient Name</td>
<td bgcolor=#ccccc align=left>Address</td>
<td bgcolor=#ccccc align=left>City/Town</td>
<td bgcolor=#ccccc align=left>State</td>
<td bgcolor=#ccccc align=left>Sex</td>
<td bgcolor=#ccccc align=left>Phone Number</td>
<td bgcolor=#ccccc align=left>Age</td>
<td bgcolor=#ccccc align=left>Occupation</td>
<td bgcolor=#ccccc align=left>Relationship</td>
<td bgcolor=#ccccc align=left>Options</td></tr>
<?php


$rs1=mysql_query("SELECT * from patient where pshow='Y' order by
pname;");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {
 echo "<tr><tr bgcolor=#ffffcc><td bgcolor=#fffffc>$sno</td><td bgcolor=#ccffcc>$row[1]</td><td bgcolor=#fccccc>$row[2]</td><td bgcolor=#cfffcc>$row[3]</td><td bgcolor=#fccccf>$row[4]</td><td bgcolor=#ffffcf>$row[5]</td><td bgcolor=#cccfcc>$row[6]</td><td bgcolor=#00ffcc>$row[14]</td><td bgcolor=##ffffcf>$row[8]</td>
<td bgcolor=#f000cc>$row[9]</td><td>
<a
href=pmod.php?rno=".$row[0].">View</a> | 
</td></tr>";
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
<tr bgcolor=#ccccc><td align=left>S No</td><td align=left>Patient
Name</td><td align=left>Address</td>
<td align=left>City/Town</td>
<td align=left>State</td>
<td align=left>Sex</td>
<td align=left>Phone Number</td>
<td align=left>Age</td>
<td align=left>Occupation</td>
<td align=left>Relationship</td>
<td align=left>Options</td></tr>
<?php
$rs2=mysql_query("SELECT * from patient where pshow='N' order by
pname;");
$sno=1;
while( $row=mysql_fetch_array($rs2)) {
 echo "<tr><td>$sno</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td><a
href=Pundel.php?rno=".$row[0].">Undelete</a></td></tr>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>No Records
Deleted</font></td></tr>";
?>
</table></td></tr>
</table>
</body>
</html> 