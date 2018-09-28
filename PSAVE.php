<?php require('connection.php');?>

<html>
 <head>
  <title>Save Patient Details</title>
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
Patient</font></td></tr>

<?php

$name=trim($_POST["name"]);
$sex=trim($_POST["sex"]);
$addr=trim($_POST["addr"]);
$city=trim($_POST["city"]);
$state=trim($_POST["state"]);
$phone=trim($_POST["phone"]);
$age=trim($_POST["age"]);
$occupa=trim($_POST["occupa"]);
$rela=trim($_POST["rela"]);
$next=trim($_POST["next"]);
$nrela=trim($_POST["nrela"]);
$nphone=trim($_POST["nphone"]);
$naddr=trim($_POST["naddr"]);
$error=0;
if ($name=="") { $error=1; echo "<tr><td><font color=red size=4>Name
can't be empty</font></td></tr>"; }
if ($sex=="") { $error=1; echo "<tr><td><font color=red
size=4>Sex can't be empty</font></td></tr>"; }
if ($addr=="") { $error=1; echo "<tr><td><font color=red
size=4>Address can't be empty</font></td></tr>"; }
if ($city=="") { $error=1; echo "<tr><td><font color=red
size=4>City can't be empty</font></td></tr>"; }
if ($state=="") { $error=1; echo "<tr><td><font color=red
size=4>State can't be empty</font></td></tr>"; }
if ($phone=="") { $error=1; echo "<tr><td><font color=red
size=4>Phone number can't be empty</font></td></tr>"; }
if ($age=="") { $error=1; echo "<tr><td><font color=red
size=4>Patient Age can't be empty</font></td></tr>"; }
if ($occupa=="") { $error=1; echo "<tr><td><font color=red
size=4>Patient Occupation can't be empty</font></td></tr>"; }
if ($rela=="") { $error=1; echo "<tr><td><font color=red
size=4>Patient Relationship can't be empty</font></td></tr>"; }
if ($next=="") { $error=1; echo "<tr><td><font color=red
size=4>Patient Next Of Kin Name can't be empty</font></td></tr>"; }
if ($nrela=="") { $error=1; echo "<tr><td><font color=red
size=4>Patient Next of Kin Relationship can't be empty</font></td></tr>"; }
if ($nphone=="") { $error=1; echo "<tr><td><font color=red
size=4>Patient Next Of Kin Phone can't be empty</font></td></tr>"; }
if ($naddr=="") { $error=1; echo "<tr><td><font color=red
size=4>Patient Next Of Kin Address can't be empty</font></td></tr>"; }

if ($error==0) {
 
 mysql_query("insert into patient(pname, paddr, pcity, pstate, psex, pphone, page, poccupa, prela, pnext, pnrela, pnphone, pnaddr, pshow)
values('".$name."','".$addr."','".$city."','".$state."','".$sex."','".$phone."','".$age."','".$occupa."','".$rela."','".$next."','".$nrela."','".$nphone."','".$naddr."','Y')");
 echo "<tr><td align=center><font size=4 color=green>Successfully
Records Inserted</font></td></tr>";
}


else {
 echo "<form name=fpadd method=post action=psave.php>";
 echo "<tr><td><table width=1000 cellspacing=0 cellpadding=10>";
 echo "<tr><td>Patient Name</td><td><input type=text name=name 
size=30 maxlength=30 value='".$name."'></td></tr>";
 echo "<tr><td>Sex</td><td><input type=text name=sex 
size=30 maxlength=1 value='".$sex."'></td></tr>";

 echo "<tr><td>Address</td><td><input type=text name=addr 
size=30 maxlength=30 value='".$addr."'></td></tr>";

 echo "<tr><td>City/Town</td><td><input type=text name=city 
size=30 maxlength=15 value='".$city."'></td></tr>";

 echo "<tr><td>State</td><td><input type=text name=state 
size=30 maxlength=15 value='".$state."'></td></tr>";

echo "<tr><td>Phone Number</td><td><input type=number name=phone 
size=30 maxlength=11 value='".$phone."'></td></tr>";


echo "<tr><td>age</td><td><input type=text name=age 
size=30 maxlength=4 value='".$age."'></td></tr>";


echo "<tr><td>Occupation</td><td><input type=next name=occupa 
size=30 maxlength=20 value='".$occupa."'></td></tr>";


echo "<tr><td>Relationship</td><td><input type=text name=rela 
size=30 maxlength=15 value='".$rela."'></td></tr>";


echo "<tr><td>Next Of Kin Name</td><td><input type=text name=next 
size=30 maxlength=300 value='".$next."'></td></tr>";


echo "<tr><td>Relationship</td><td><input type=text name=nrela 
size=30 maxlength=15 value='".$nrela."'></td></tr>";

echo "<tr><td>Phone Number</td><td><input type=number name=nphone 
size=30 maxlength=11 value='".$nphone."'></td></tr>";

 echo "<tr><td>Address</td><td><input type=text name=naddr 
size=30 maxlength=30 value='".$naddr."'></td></tr>";
 echo "</table></td></tr>";
 echo "<tr><td align=center><input type=submit
value=Submit></td></tr>";
 echo "</form>";
}
echo "<tr><td align=center><a
href=plist.php>Continue...</a></td></tr>";
echo "</table>";
echo "</body></html>";