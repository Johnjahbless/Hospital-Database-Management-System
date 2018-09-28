<?php require('connection.php');?>
<html>
 <head>
  <title>Recover Patient Details</title>
 </head> 
 <body bgcolor="#eee">
<table border="1" align=center width=1000 cellspacing=5 cellpadding=5><tr bgcolor=blue><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>
<tr bgcolor=red><td align=center><font SIZE=6 color=white>Federal Medical Center</font></td></tr>

<tr><td><table align=center width=1000 cellspacing=0 cellpadding=10>
<tr><td align=center><a href=dlist.php>Doctors</td><td align=center><a
href=plist.php>Patients</td><td align=center><a
href=alist.php>Appointments</td>
</table></td></tr>
<tr bgcolor=red><td ><font size=4 color=white>Recover
Patient Details</font></td></tr>
<?php

$rno=$_GET["rno"];
 
 
 mysql_query("update Patient set pshow='Y' where pno='$rno'");
 echo "<tr><td align=center><font size=4 color=green>Successfully Records Recovered</font></td></tr>";
echo "<tr><td align=center><a
href=plist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>"; 