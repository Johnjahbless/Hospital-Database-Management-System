<?php require('connection.php');?>
<html>
 <head>
  <title>Add Diagnosis</title>
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
<tr bgcolor=red><td ><font size=4 color=white>Save
Patient Diagnosis</font></td></tr>
<?php

$pat=trim($_POST["pat"]);
$doc=trim($_POST["doc"]);
$diagno=trim($_POST["diagno"]);
$disc=trim($_POST["disc"]);
$note=trim($_POST["note"]);
$error=0;
if ($pat=="") { $error=1; echo "<tr><td><font color=red size=4>Patient's Name
can't be empty</font></td></tr>"; }
if ($doc=="") { $error=1; echo "<tr><td><font color=red
size=4>doctor Id can't be empty</font></td></tr>"; }
if ($diagno=="") { $error=1; echo "<tr><td><font color=red
size=4>Patient Diagnosis can't be empty</font></td></tr>"; }
if ($disc=="") { $error=1; echo "<tr><td><font color=red
size=4>Discharge Summary can't be empty</font></td></tr>"; }
if ($note=="") { $error=1; echo "<tr><td><font color=red
size=4>Notes column can't be empty</font></td></tr>"; }

if ($error==0) {
 
 mysql_query("insert into diagno(adoctor, apatient, adiagnosis, adischarge, anote, ashow)
values('".$doc."','".$pat."','".$diagno."','".$disc."','".$note."','Y')");
 echo "<tr><td align=center><font size=4 color=green>Successfully
Records Inserted</font></td></tr>";
}
else {
 echo "<form name=fdiadd method=post action=disave.php>";

 echo "<tr><td><table width=1000 cellspacing=0 cellpadding=10>";

 echo "<tr><td>Patient Id</td><td><input type=text name=name
size=30 maxlength=30 value='".$pat."'></td></tr>";

 echo "<tr><td>Doctor Id</td><td><input type=text name=spec
size=30 maxlength=30 value='".$doc."'></td></tr>";

 echo "<tr><td>Diagnosis</td><td><input type=text name=spec
size=30 maxlength=300 value='".$diagno."'></td></tr>";

echo "<tr><td>Discharge Summary</td><td><input type=text name=spec
size=30 maxlength=300 value='".$disc."'></td></tr>";

echo "<tr><td>Notes</td><td><input type=text name=spec
size=30 maxlength=300 value='".$note."'></td></tr>";

 echo "</table></td></tr>";
 echo "<tr><td align=center><input type=submit
value=Submit></td></tr>";
 echo "</form>";
}
echo "<tr><td align=center><a
href=dilist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>";