<?php require('connection.php');?>
<html>
 <head>
  <title>Add New Patient</title>
 </head> <body bgcolor="#eee">
<table border="1" align=center width=1000 cellspacing=5 cellpadding=5>
<tr bgcolor=blue><td align=center><font SIZE=6 color=white>HOSPITAL
MANAGEMENT SYSTEM</font></td></tr>
<tr bgcolor=red><td align=center><font SIZE=6 color=white>Federal Medical Center</font></td></tr>

<tr><td><table align=center width=1000 cellspacing=0 cellpadding=10>
<tr><td align=center><a href=dlist.php>Doctors</td><td align=center><a
href=plist.php>Patients</td><td align=center>
<a
href=alist.php>Appointments</td>
</table></td></tr>
<tr bgcolor=red><td ><font size=4 color=white>New
Patient</font></td></tr>
<form name=fpadd method=post action=psave.php >
<tr><td><table width=1000 cellspacing=0 cellpadding=10>
        
<tr><td>Patient Name</td>
	
	
<img src="images/profilepic.png" alt="profilepic" style="width:20%" align="right">

<td><input type=text name=name placeholder="Surname first" size=30
maxlength=30></td></tr>
<tr><td>Sex</td><td><input type=text name=sex placeholder="M/F" size=30
maxlength=1></td></tr>
<tr><td>Address</td><td><input type=text name=addr placeholder="Patient Residence Address" size=30
maxlength=30></td></tr>
<tr><td>City/Town</td><td><input type=text name=city placeholder="Patient Residence City/Town" size=30
maxlength=15></td></tr>
<tr><td>State</td><td><input type=text name=state placeholder="Patient Residence State" size=30
maxlength=15></td></tr>

<tr><td>Phone Number</td><td><input type=number name=phone placeholder="Patient Current Phone No" size=30
maxlength=11></td></tr>


<tr><td>Age</td><td><input type=number name=age placeholder="Patient Age" size=30
maxlength=4></td></tr>

<tr><td>Occupation</td><td><input type=type name=occupa placeholder="Patient Occupation" size=30
maxlength=30></td></tr>

<tr><td>Relationship</td><td><input type=text name=rela placeholder="Single, Married or Divorced" size=30
maxlength=15></td></tr>
</table></td></tr>
 <tr bgcolor=red><td align=center><font size=4 color=white>Patient Next Of Kin
Details</font></td></tr>


 <tr><td><table width=1000 cellspacing=0 cellpadding=10>

<tr><td>Next OF Kin Name</td><td><input type=text name=next placeholder="Name Of Next Of Kin" size=30
maxlength=300></td></tr>

<tr><td>Relationship</td><td><input type=text name=nrela placeholder="Father, Mother, Son or Daughter" size=30
maxlength=15></td></tr>

<tr><td>Phone Number</td><td><input type=number name=nphone placeholder="Next Of Kin Phone Number" size=30
maxlength=15></td></tr>

<tr><td>Address</td><td><input type=text name=naddr placeholder="Next Of Kin Addresss" size=30
maxlength=300></td></tr>
</table></td></tr>
<tr><td align=center><input type=submit value=Submit></td></tr>
</form>
</table>
</body>
</html>