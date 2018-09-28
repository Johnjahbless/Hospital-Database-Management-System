<html>
 <head>
  <title>Recover Doctor</title>
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
<tr bgcolor=red><td ><font size=4 color=white>Recover
Doctor Details</font></td></tr>

<?php
require('connection.php');
error_reporting(1);
$rno=$_GET["rno"];
 mysql_query("update doct set dshow='Y' where dno='$rno'");
 echo "<tr><td align=center><font size=4 color=green>SuccessfullyRecords Recovered</font></td></tr>";
echo "<tr><td align=center><a
href=dlist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>"; 