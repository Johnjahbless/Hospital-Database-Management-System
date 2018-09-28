<?php require('connection.php');?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Add New Patient Photo</title>
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




		
<form method="POST" action="phadd.php" enctype="multipart/form-data">
 <input type="file" name="myimage">
 <input type="submit" name="submit_image" value="Upload">
</form>

</body>
</html>
