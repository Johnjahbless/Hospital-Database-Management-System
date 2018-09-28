<?php require('connection.php');?>
<html>
 <head>
  <title>Add Patient Diagnosis</title>
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
<tr bgcolor=red><td ><font size=4 color=white>Add Patient Diagnosis</font></td></tr>
<form name=fdiadd method=post action=disave.php>
<tr><td><table width=1000 cellspacing=0 cellpadding=10>
<tr><td>Patient Id</td><td><select name=pat style="width:230px">
<?php


$rs1=mysql_query("SELECT * from patient where pshow='Y' order by
pname;");
$sno=1;
?>
<option selected="selected" disabled="disabled">Patient Id</option>
<?php
while( $row=mysql_fetch_array($rs1)) {
 $patient_id=$row[0];
 $patient=$row[1];
 ?>
	<option value="<?php echo $patient_id ?>"><?php echo $patient_id."  :  ".$patient ?></option>
 <?php
 $sno++;
}
?>
</select>
</td></tr>
<tr><td>Doctor Id</td><td><select name=doc style="width:230px">
<option selected="selected" disabled="disabled">Doctor Id</option>
<?php

$rs2=mysql_query("SELECT * from doct where dshow='Y' order by
dname;");
$sno=1;
while($row1=mysql_fetch_array($rs2)) {
 $doctor_id=$row1[0];
 $doctor=$row1[1];
 ?>
	<option value="<?php echo $doctor_id ?>"><?php echo $doctor_id."  :  ".$doctor ?></option>
 <?php
 $sno++;
}
?>
</select>
</td></tr>

<tr><td>Diagnosis</td><td><input type=text name=diagno placeholder="patient diagnosis" size=30
maxlength=30000></td></tr>
<tr><td>Discharge Summary</td><td><input type=text name=disc placeholder="patient discharge summary" size=30
maxlength=30000></td></tr>
<tr><td>Notes</td><td><input type=text name=note placeholder="patient dead, alive or discharge" size=30
maxlength=30000></td></tr>
</table></td></tr>
<tr><td align=center><input type=submit value=Submit></td></tr>
</form>
</table>
</body>
</html>