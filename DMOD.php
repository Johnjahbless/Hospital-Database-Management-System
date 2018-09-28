<html>
 <head>
   <title>Modify Doctor Profile</title>
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
<?php
require('connection.php');
error_reporting(1);
$rno=trim($_GET["rno"]);
$rs1=mysql_query("SELECT * from doct where dno='".$rno."'");
$sno=1;
while( $row=mysql_fetch_array($rs1)) {
 echo "<tr bgcolor=red><td ><font size=4 color=white>Edit Doctor
Details</font></td></tr>";
 echo "<form name=fdmod method=post action=dupdate.php>";
 echo "<tr><td><table width=1000 cellspacing=0 cellpadding=10>";
 echo "<tr><td>Doctor Name</td><td><input type=text name=name
size=30 maxlength=30 value='".$row[1]."'></td></tr>";
 echo "<tr><td>Department</td><td><input type=text name=spec
size=30 maxlength=30  value='".$row[2]."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td colspan=2 align=center><input type=hidden name=rno value=".$rno."><input type=submit value=Submit></td></tr>";
 echo "</form>";
 $sno++;
}
if ($sno==1) echo "<tr><td align=center><font size=4 color=red>Records
Not Found</font></td></tr>";
?>
</table>
</body>
</html> 